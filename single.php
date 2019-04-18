<?php

get_header( 'single' );

the_post();
get_template_part( 'partials/content', get_post_type() );


get_footer( 'single' );
