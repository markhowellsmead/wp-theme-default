<?php

wp_link_pages(array(
    'before' => '<div class="page-links"><span class="page-links-title">'.__('Pages:', 'TEXT_DOMAIN').'</span>',
    'after' => '</div>',
    'link_before' => '<span>',
    'link_after' => '</span>',
    'pagelink' => '<span class="screen-reader-text">'.__('Page', 'TEXT_DOMAIN').' </span>%',
    'separator' => '<span class="screen-reader-text">, </span>',
));
