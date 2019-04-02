<article <?php post_class(); ?>>

		<?php
			get_template_part( 'partials/header', 'loop' );
		?>

		<section class="post-body">
		<?php
			the_excerpt();
		?>
		</section>

		<?php
			get_template_part( 'partials/footer', 'loop' );
		?>

	</section>

</article>
