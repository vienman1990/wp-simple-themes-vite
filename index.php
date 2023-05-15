<?php
get_header();

if ( have_posts() ) {

    while ( have_posts() ) {
        the_post();
        
        get_template_part( 'parts/content' );
    }

} else {

    get_template_part( 'parts/content', 'none' );

}

get_footer();