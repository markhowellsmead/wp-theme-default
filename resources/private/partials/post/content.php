<?php
/**
* Output of an individual post.
*/
global $post;
?>

    <article id="post<?=the_ID()?>" <?php post_class();?>>

            <?php
                get_template_part('resources/private/partials/post/header');
            ?>

            <section class="post-body">
            <?php
                the_excerpt();
            ?>
            </section>

            <?php
                get_template_part('resources/private/partials/post/footer');
            ?>

        </section>

    </article>
