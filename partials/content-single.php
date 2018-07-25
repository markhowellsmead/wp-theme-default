<article <?php post_class();?>>

        <?php
            get_template_part('partials/header', 'single');
        ?>

        <section class="post-body">
        <?php
            the_content();
            get_template_part('partials/linkpages', 'single');
        ?>
        </section>

        <?php
            get_template_part('partials/footer', 'single');
        ?>

    </section>

</article>
