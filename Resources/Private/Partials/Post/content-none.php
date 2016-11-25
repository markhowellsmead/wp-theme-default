<?php
/**
* Output of an individual post.
*/
global $post;
?>

<article <?php post_class();?>>

        <?php
            get_template_part('Resources/Private/Partials/Post/Header');
        ?>

        <section class="post-body">
        <?php
            echo '<p>'.__('Sorry, the content or file you have requested is not available.', 'wordpress_theme').'</p>';
        ?>
        </section>

        <?php
            get_template_part('Resources/Private/Partials/Post/Footer');
        ?>

    </section>

</article>
