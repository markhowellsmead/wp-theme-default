<article <?php post_class();?>>

        <?php
            get_template_part('resources/private/partials/post/header', 'single');
        ?>

        <section class="post-body">
        <?php
            the_content();
            get_template_part('resources/private/partials/general/linkpages', 'single');
        ?>
        </section>

        <?php
            get_template_part('resources/private/partials/post/footer', 'single');
        ?>

    </section>

</article>
