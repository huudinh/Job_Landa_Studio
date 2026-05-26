<style>
	<?php
		include(locate_template("Module/Category/priceList_dls_1_0_0/sass/priceList_dls_1_0_0.min.css"));
	?>
</style>
<div class="priceList_dls_1_0_0">
    <div class="priceList_dls_1_0_0__title">
		<?php
			echo single_cat_title();
		?>
	</div>
    <div class="priceList_dls_1_0_0__line"></div>
    <ul>
		<?php 
			if ( have_posts() ) :
				while ( have_posts() ) : the_post();
					global $post; 
					$kim = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');            
					$img = ($kim[0]!='')?$kim[0]:catch_that_image($post->ID);
					$date = get_the_date();
					$excerpt = wp_trim_words( get_the_excerpt($post->ID), 120 );
					$brand = get_field('brand');
					$link = get_field('link');
					echo '
						<li>
							<div class="priceList_dls_1_0_0__pic">
								<a href="'.get_permalink($post->ID).'"><img width="360" height="225" src="/rs?w=360&h=225&src='.$img.'" alt="'.get_the_title($post->ID).'"></a>
							</div>
							<h3 class="priceList_dls_1_0_0__tt">
								<a href="'.get_permalink($post->ID).'">'.get_the_title($post->ID).'</a>
								<span>'.$brand.'</span>
							</h3>
						</li>
					';
				endwhile;
			endif;
		?> 
       
    </ul>
</div>