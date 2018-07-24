<article <?php post_class();?>>

        <?php
            get_template_part('resources/private/partials/header', 'single');
        ?>

        <section class="post-body">
        <?php
            the_content();
            get_template_part('resources/private/partials/linkpages', 'single');
        ?>
        </section>

        <?php
            get_template_part('resources/private/partials/footer', 'single');
        ?>

    </section>

</article>
