<?php

get_header('single');

the_post();

get_template_part('resources/private/partials/content', 'single');

get_footer('single');
