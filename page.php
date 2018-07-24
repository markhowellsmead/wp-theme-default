<?php

get_header('page');

the_post();

get_template_part('partials/content', 'page');

get_footer('page');
