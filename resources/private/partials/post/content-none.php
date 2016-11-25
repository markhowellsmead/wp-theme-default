<?php
/**
* Output of an individual post.
*/
global $post;
?>

<article <?php post_class();?>>

        <?php
            get_template_part('resources/private/partials/post/header');
        ?>

        <section class="post-body">
        <?php
            echo '<p>'.__('Sorry, the content or file you have requested is not available.', 'wordpress_theme').'</p>';
        ?>
        </section>

        <?php
            get_template_part('resources/private/partials/post/footer');
        ?>

    </section>

</article>
