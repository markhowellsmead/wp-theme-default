<?php

get_header('single');

the_post();

get_template_part('resources/private/partials/post/content', 'single');

get_footer('single');
