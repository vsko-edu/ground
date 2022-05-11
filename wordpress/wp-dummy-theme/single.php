<?php get_header(); ?>
    <div class="main">
        <div class="content">
			<?php
			if ( have_posts() ):
				while ( have_posts() ):
					the_post(); ?>
                    <h1 class="entry-title">
                        <?php the_title(); ?>
                    </h1>
                    <div class="entry-content"><?php the_content(); ?></div>
				<?php
				endwhile;
			endif;
			wp_reset_postdata();
			?>
        </div>
        <div class="sidebar">
            sidebar
        </div>
    </div>
<?php get_footer(); ?>