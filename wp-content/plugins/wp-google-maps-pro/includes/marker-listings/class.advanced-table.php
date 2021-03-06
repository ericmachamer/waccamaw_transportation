<?php

namespace WPGMZA\MarkerListing;

class AdvancedTable extends \WPGMZA\MarkerDataTable
{
	public function __construct($map_id=null)
	{
		global $wpgmza;
		
		\WPGMZA\MarkerDataTable::__construct();
		
		// Temporary workaround for map ID not passed through datatables endpoint
		if($map_id == null && isset($_REQUEST['wpgmzaDataTableRequestData']))
			$map_id = (int)$_REQUEST['wpgmzaDataTableRequestData']['map_id'];
		
		$this->map_id = $map_id;
		
		$table = $this->element->querySelector("table");
		$table->addClass('responsive');
		$table->addClass('wpgmza_table');
		
		if($wpgmza->settings->useLegacyHTML)
		{
			$this->element->setAttribute("id", "wpgmza_marker_holder_$map_id");
			$this->element->addClass("wpgmza_marker_holder");
			$this->element->setInlineStyle("width", "100%");
			
			$table->setAttribute("id", "wpgmza_table_$map_id");
			$table->removeClass("display");
			$table->setAttribute("cellspacing", "0");
			$table->setAttribute("cellpadding", "0");
			$table->setInlineStyle("width", "100%");
			
			foreach($table->querySelectorAll("thead>[data-wpgmza-column-name]") as $th)
			{
				$name = $th->getAttribute("data-wpgmza-column-name");
				
				switch($name)
				{
					case "icon":
						$name = "marker";
						break;
					
					case "title":
						$th->addClass("all");
						break;
				}
				
				$th->addClass("wpgmza_table_$name");
			}
			
			if($tfoot = $table->querySelector('tfoot'))
				$tfoot->remove();
			
			//$tbody = $this->element->ownerDocument->createElement('tbody');
			//$table->appendChild($tbody);
		}
	}
	
	protected function getColumns()
	{
		global $wpdb;
		global $wpgmza;
		
		$settings = $wpgmza->settings;
		$result = array();
		
		if(empty($settings->wpgmza_settings_markerlist_icon))
			$result['icon'] = '';
		
		if(empty($settings->wpgmza_settings_markerlist_title))
			$result['title'] = __('Title', 'wp-google-maps');
		
		if(empty($settings->wpgmza_settings_markerlist_category))
			$result['category'] = __('Category', 'wp-google-maps');

		if(empty($settings->wpgmza_settings_markerlist_address))
			$result['address'] = __('Address',		'wp-google-maps');
		
		if(empty($settings->wpgmza_settings_markerlist_description))
			$result['description'] = __('Description',	'wp-google-maps');
		
		// TODO: It might be more efficient to put this in a class property in the constructor
		$customFields = new \WPGMZA\CustomFields();
		
		foreach($customFields as $field)
			$result["custom_field_" . $field->id] = __($field->name, 'wp-google-maps');
		
		return $result;
	}
	
	protected function getCustomFieldColumnNames()
	{
		$result = array();
		
		// TODO: It might be more efficient to put this in a class property in the constructor
		$customFields = new \WPGMZA\CustomFields();
		
		foreach($customFields as $field)
			$result[] = "custom_field_" . $field->id;
			
		return $result;
	}
	
	/**
	 * Exclude custom_field_* fields from search clause - they need to be in HAVING, not WHERE
	 * @return array
	 */
	protected function getSearchClause($input_params, &$query_params, $exclude_columns=null)
	{
		if(!$exclude_columns)
			$exclude_columns = array();
		
		$exclude_columns = array_merge($exclude_columns, $this->getCustomFieldColumnNames());
		
		return \WPGMZA\MarkerDataTable::getSearchClause($input_params, $query_params, $exclude_columns);
	}
	
	// TODO: This is duplicated from admin marker table. Use a trait when PHP 5.4 is the minimum version
	protected function filterColumns(&$columns, $input_params)
	{
		global $WPGMZA_TABLE_NAME_MARKERS;
		global $WPGMZA_TABLE_NAME_CATEGORIES;
		global $WPGMZA_TABLE_NAME_MARKERS_HAS_CATEGORIES;
		global $WPGMZA_TABLE_NAME_MARKERS_HAS_CUSTOM_FIELDS;
		
		foreach($columns as $key => $value)
		{
			$name = $this->getColumnNameByIndex($key);
			
			if(preg_match('/^custom_field_(\d+)$/', $name, $m))
			{
				$field_id = (int)$m[1];
				
				$columns[$key] = "(
					SELECT value 
					FROM $WPGMZA_TABLE_NAME_MARKERS_HAS_CUSTOM_FIELDS
					WHERE field_id=$field_id
					AND object_id=$WPGMZA_TABLE_NAME_MARKERS.id
				) AS $name";
			}
			else
				switch($name)
				{
					case 'icon':
						
						$columns[$key] = \WPGMZA\ProMarker::getIconSQL($this->map_id, true);
					
						break;
					
					case 'category':
						
						$columns[$key] = "(
							SELECT GROUP_CONCAT(category_name SEPARATOR ', ')
							FROM $WPGMZA_TABLE_NAME_CATEGORIES
							WHERE $WPGMZA_TABLE_NAME_CATEGORIES.id IN (
								SELECT category_id
								FROM $WPGMZA_TABLE_NAME_MARKERS_HAS_CATEGORIES
								WHERE marker_id = $WPGMZA_TABLE_NAME_MARKERS.id
							)
						) AS category";
							
						break;
				}
		}
		
		$columns[] = 'id';
		
		return $columns;
	}
	
	protected function getHavingClause($input_params, &$query_params, $exclude_columns=null)
	{
		global $wpdb;
		
		// TODO: Can't filter on custom fields at the moment - we'd need to intersect I believe. Otherwise both WHERE and HAVING are applied with AND logic
		return '';
		
		if(empty($input_params['search']['value']))
			return "";
		
		$columns = array_keys($this->getColumns());
		$customFieldColumnNames = $this->getCustomFieldColumnNames();
		
		$exclude = array_diff($columns, $customFieldColumnNames);
		
		if(empty($exclude))
			return "";
		
		return \WPGMZA\MarkerDataTable::getSearchClause($input_params, $query_params, $exclude);
	}
	
	protected function getWhereClause($input_params, &$query_params, $clause_for_total=false)
	{
		$clauses = \WPGMZA\MarkerDataTable::getWhereClause($input_params, $query_params, $clause_for_total);
		
		if(!empty($input_params['markerIDs']))
		{
			$markerIDs = explode(',', $input_params['markerIDs']);
			$count = count($markerIDs);
			$placeholders = implode(',', array_fill(0, $count, '%d'));
			
			$clauses .= " AND id IN ($placeholders)";
			
			foreach($markerIDs as $id)
				array_push($query_params, $id);
		}
		
		return $clauses;
	}
	
	public function getRecords($input_params)
	{
		$records = \WPGMZA\MarkerDataTable::getRecords($input_params);
		
		for($index = 0; $index < count($records->data); $index++)
		{
			$last = count($records->data[$index]) - 1;
			
			$records->meta[$index]->id = $records->data[$index][$last];
			unset($records->data[$index][$last]);
		}
		
		return $records;
	}
}
