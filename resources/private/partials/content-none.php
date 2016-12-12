<?php
/**
* Output of an individual post.
*/
global $post;
?>

<article <?php post_class();?>>

        <?php
            get_template_part('resources/private/partials/header', 'none');
        ?>

        <section class="post-body">
        <?php
            echo '<p>'.__('Sorry, the content or file you have requested is not available.', 'TEXT_DOMAIN').'</p>';
        ?>
        </section>

        <?php
            get_template_part('resources/private/partials/footer', 'none');
        ?>

    </section>

</article>
