<article <?php post_class();?>>

        <?php
            get_template_part('resources/private/partials/header', 'single');
        ?>

        <section class="post-body">
        <?php
            the_content();
        ?>
        </section>

        <?php
            get_template_part('resources/private/partials/footer', 'single');
        ?>

    </section>

</article>
