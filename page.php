<?php

get_header('page');

the_post();

get_template_part('resources/private/partials/page/content', 'page');

get_footer('page');
