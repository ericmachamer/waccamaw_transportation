<?php
if( have_rows('flex_content') ):
    while ( have_rows('flex_content') ) : the_row();
        switch( get_row_layout() ) :

            case 'flex_graphic_columns':
                get_template_part('partials/flex-sections/graphic-columns');
                break;

            case 'flex_background_box':
                get_template_part('partials/flex-sections/bg-block');
                break;

            case 'two_column':
                get_template_part('partials/flex-sections/two-column');
                break; 

            case 'people_slider': 
                get_template_part('partials/flex-sections/box-slider');
                break;

            case 'latest_news': 
                get_template_part('partials/flex-sections/latest-news');
                break;

            case 'testimonials': 
                get_template_part('partials/flex-sections/testimonials');
                break; 

            case 'iconic': 
                get_template_part('partials/flex-sections/iconic');
                break;

            case 'concave-testimonials':
                get_template_part('partials/flex-sections/concave-testimonials');
                break;

            case 'concave-numbers':
                get_template_part('partials/flex-sections/concave-numbers');
                break;

            case 'cards':
                get_template_part('partials/flex-sections/cards');
                break;

            case 'logos':
                get_template_part('partials/flex-sections/logos');
                break;

            case 'flex_awards':
                get_template_part('partials/flex-sections/awards-block');
                break;

            case 'gallery':
                get_template_part('partials/flex-sections/gallery');
                break;

            case 'million_mile_drivers':
                get_template_part('partials/flex-sections/million-mile-drivers');
                break;


            case 'custom':
            case 'dual':
            case 'features':

                break;
        
        endswitch;

    endwhile;
endif;
