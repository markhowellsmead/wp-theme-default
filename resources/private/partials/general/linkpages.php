<?php

wp_link_pages(array(
    'before' => '<div class="page-links"><span class="page-links-title">'.__('Pages:', 'wordpress_theme').'</span>',
    'after' => '</div>',
    'link_before' => '<span>',
    'link_after' => '</span>',
    'pagelink' => '<span class="screen-reader-text">'.__('Page', 'wordpress_theme').' </span>%',
    'separator' => '<span class="screen-reader-text">, </span>',
));
