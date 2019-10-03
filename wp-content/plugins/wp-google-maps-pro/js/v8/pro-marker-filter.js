/**
 * @namespace WPGMZA
 * @module ProMarkerFilter
 * @requires WPGMZA.MarkerFilter
 */
jQuery(function($) {
	
	WPGMZA.ProMarkerFilter = function(map)
	{
		var self = this;
		
		WPGMZA.MarkerFilter.call(this, map);
	}
	
	WPGMZA.ProMarkerFilter.prototype = Object.create(WPGMZA.MarkerFilter.prototype);
	WPGMZA.ProMarkerFilter.prototype.constructor = WPGMZA.ProMarkerFilter;
	
	WPGMZA.MarkerFilter.createInstance = function(map)
	{
		return new WPGMZA.ProMarkerFilter(map);
	}
	
	WPGMZA.ProMarkerFilter.prototype.getFilteringParameters = function()
	{
		var params = WPGMZA.MarkerFilter.prototype.getFilteringParameters.call(this);
		
		// TODO: Marker listign params
		if(this.map.markerListing)
			params = $.extend(params, this.map.markerListing.getFilteringParameters());
		
		// TODO: Custom field filter params
		var customFieldFilterAjaxParams = this.map.customFieldFilterController.getAjaxRequestData();
		var customFieldFilterFilteringParams = customFieldFilterAjaxParams.data.widgetData;
		params.customFields = customFieldFilterFilteringParams;
		
		return params;
	}
	
	// WPGMZA.ProMarkerFilter.prototype.on
	
	WPGMZA.ProMarkerFilter.prototype.update = function()
	{
		// TODO: Call REST API
		// TODO: Emit event with returned marker IDs
		// TODO: Catch said event on marker listing
		
		var self = this;
		var params = this.getFilteringParameters();
		
		if(params.center instanceof WPGMZA.LatLng)
			params.center = params.center.toLatLngLiteral();
		
		this.map.showPreloader(true);
		
		WPGMZA.restAPI.call("/markers/", {
			data: {
				fields: ["id"],
				filter: JSON.stringify(params),
			},
			success: function(result, status, xhr) {
				
				self.map.showPreloader(false);
				
				var event = new WPGMZA.Event("filteringcomplete");
				
				event.map = self.map;
				event.filteredMarkers = result;
				
				self.onFilteringComplete(event);
				
				self.trigger(event);
				self.map.trigger(event);
				
			}
		});
	}
	
	WPGMZA.ProMarkerFilter.prototype.onFilteringComplete = function(event)
	{
		var self = this;
		var map = [];
		
		event.filteredMarkers.forEach(function(data) {
			map[data.id] = true;
		});
		
		this.map.markers.forEach(function(marker) {
			
			if(marker != self.map.storeLocatorMarker)
			{
				var allowByFilter = map[marker.id];
				marker.setVisible(allowByFilter);
			}
			
		});
	}
	
});