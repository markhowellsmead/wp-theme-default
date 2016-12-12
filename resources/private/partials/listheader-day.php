<div class="row">
    <header>
        <h1 class="list-title"><?php
        printf(
            __('Articles from %1$s', 'TEXT_DOMAIN'),
            the_date(get_option('date_format'))
        );
        ?></h1>
    </header>
</div>
