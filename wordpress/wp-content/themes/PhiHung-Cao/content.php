<div class="blog-post">
	<h2 class="blog-post-title"><?php the_title(); ?></h2>
	<p class="blog-post-meta"><?php the_time( get_option( 'date_format' ) ); ?> by <a href="#"><?php the_author(); ?></a></p>

 <?php the_content(); ?>

</div><!-- /.blog-post -->