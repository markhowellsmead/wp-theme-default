<article <?php post_class('c-post'); ?>>

	<?php
		get_template_part( 'partials/header', get_post_type() );
	?>

	<section class="c-post__body">
		<?php
			the_content();
		?>
	</section>

</article>
