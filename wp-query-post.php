<?php
global $post;
$args = array( 'posts_per_page' => 2, 'post_type'=> 'post' );
$myposts = get_posts( $args );
foreach( $myposts as $post ) : setup_postdata($post); ?>
	
	<div class="single_footer_left fix">
		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<?php the_excerpt(); ?>
	</div>
	
		
<?php endforeach; ?>