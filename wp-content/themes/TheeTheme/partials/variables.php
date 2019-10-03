
<style>
  html, :root {
    <?php


      if(get_field('primary', 'options')) {
        echo "--primary: " . get_field('primary', 'options') . "; 
        ";
        echo "---primary: " . rgbToHsl(...hexToRgb(get_field('primary', 'options'))) . "; ";
      }
      if(get_field('secondary', 'options')) {
        echo "--secondary: " . get_field('secondary', 'options') . "; 
        ";
        echo "---secondary: " . rgbToHsl(...hexToRgb(get_field('secondary', 'options'))) . "; ";
      }


      	$variables = [
			'primary-negative',


			'secondary-negative',


			'font-family',
				'serif',
				'sans:',
				'ornate',



			'btn-border-width',
			'btn-border-radius',
			'btn-border-style',
			'btn-text-transform',
			'btn-font-family',
			'btn-line-height',


			'light',
			'off-light',

			'dark',
			'off-dark',


			'very-dark-grey',
			'dark-grey',
			'grey',
			'light-grey',
			'very-light-grey',

			'brand-primary-negative',
			'brand-secondary-negative',
      	];
      foreach($variables as $variable) {
        if(get_field($variable, 'options')) {
          echo "--" . $variable . ": " . get_field($variable, 'options') . ";
          "; 
        }
      }

      ?>


  }

</style>

