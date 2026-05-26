<?php
	include(locate_template("Module/Category/newsList_dls_1_0_0/newsList_dls_1_0_0_css.php"));
?>
<div class="newsList_dls_1_0_0">
    <div class="newsList_dls_1_0_0__title">Tin tức</div>
    <div class="newsList_dls_1_0_0__line"></div>
    <ul>
		<?php 
			if ( have_posts() ) :
				$key = 0;
				while ( have_posts() ) : the_post();
					global $post; 
					$kim = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');            
					$img = ($kim[0]!='')?$kim[0]:catch_that_image($post->ID);
					$date = get_the_date();
					$excerpt = wp_trim_words( get_the_excerpt($post->ID), 120 );
					if ($key == 0) {
						echo '
							<li class="newsList_dls_1_0_0__hot">
								<div class="newsList_dls_1_0_0__pic">
									<a href="'.get_permalink($post->ID).'"><img width="360" height="225" src="'.$img.'" alt="'.get_the_title($post->ID).'"></a>
								</div>
								<h3 class="newsList_dls_1_0_0__hotContent">
									<span>'.$date.'</span>
									<a href="'.get_permalink($post->ID).'">'.get_the_title($post->ID).'</a>
									<p>'.$excerpt.'</p>
								</h3>
							</li>
						';
					} else {
						echo '
							<li class="newsList_dls_1_0_0__item">
								<div class="newsList_dls_1_0_0__pic">
									<a href="'.get_permalink($post->ID).'"><img width="360" height="225" src="'.$img.'" alt="'.get_the_title($post->ID).'"></a>
								</div>
								<h3 class="newsList_dls_1_0_0__tt">
									<span>'.$date.'</span>
									<a href="'.get_permalink($post->ID).'">'.get_the_title($post->ID).'</a>
								</h3>
							</li>
						';
					}
					$key++;
				endwhile;
			endif;
		?>
        <!-- <li class="newsList_dls_1_0_0__hot">
            <div class="newsList_dls_1_0_0__pic">
                <a href="#"><img width="360" height="225" src="image/pic.jpg" alt=""></a>
            </div>
            <h3 class="newsList_dls_1_0_0__hotContent">
                <span>20 September, 2022</span>
                <a href="#">Quisque lobortis lobortis nibh vel accumsan</a>
                <p>Vivamus leo lacus, tincidunt sit amet fringilla convallis, tincidunt vitae enim. Suspendisse eget vulputate lorem. In id nisi nec turpis pulvinar faucibus eget porttitor quam. Cras malesuada pellentesque mauris. Nullam vel pellentesque nisi. Nullam metus sapien, tincidunt nec elit eu, mattis fringilla arcu. Pellentesque molestie blandit purus vel hendrerit. Aliquam semper elementum massa aliquet egestas. Duis vitae arcu quis orci cursus feugiat. Aenean et diam nec mauris faucibus blandit. Aenean finibus quam id ligula imperdiet lacinia...</p>
            </h3>
        </li>
        <li class="newsList_dls_1_0_0__item">
            <div class="newsList_dls_1_0_0__pic">
                <a href="#"><img width="360" height="225" src="image/pic.jpg" alt=""></a>
            </div>
            <h3 class="newsList_dls_1_0_0__tt">
                <span>20 September, 2022</span>
                <a href="#">Pellentesque sodales risus quis libero facilisis, ullamcorper porta enim mollis.</a>
            </h3>
        </li>
        <li class="newsList_dls_1_0_0__item">
            <div class="newsList_dls_1_0_0__pic">
                <a href="#"><img width="360" height="225" src="image/pic.jpg" alt=""></a>
            </div>
            <h3 class="newsList_dls_1_0_0__tt">
                <span>20 September, 2022</span>
                <a href="#">Pellentesque sodales risus quis libero facilisis, ullamcorper porta enim mollis.</a>
            </h3>
        </li>
        <li class="newsList_dls_1_0_0__item">
            <div class="newsList_dls_1_0_0__pic">
                <a href="#"><img width="360" height="225" src="image/pic.jpg" alt=""></a>
            </div>
            <h3 class="newsList_dls_1_0_0__tt">
                <span>20 September, 2022</span>
                <a href="#">Pellentesque sodales risus quis libero facilisis, ullamcorper porta enim mollis.</a>
            </h3>
        </li>
        <li class="newsList_dls_1_0_0__item">
            <div class="newsList_dls_1_0_0__pic">
                <a href="#"><img width="360" height="225" src="image/pic.jpg" alt=""></a>
            </div>
            <h3 class="newsList_dls_1_0_0__tt">
                <span>20 September, 2022</span>
                <a href="#">Pellentesque sodales risus quis libero facilisis, ullamcorper porta enim mollis.</a>
            </h3>
        </li>
        <li class="newsList_dls_1_0_0__item">
            <div class="newsList_dls_1_0_0__pic">
                <a href="#"><img width="360" height="225" src="image/pic.jpg" alt=""></a>
            </div>
            <h3 class="newsList_dls_1_0_0__tt">
                <span>20 September, 2022</span>
                <a href="#">Pellentesque sodales risus quis libero facilisis, ullamcorper porta enim mollis.</a>
            </h3>
        </li>
        <li class="newsList_dls_1_0_0__item">
            <div class="newsList_dls_1_0_0__pic">
                <a href="#"><img width="360" height="225" src="image/pic.jpg" alt=""></a>
            </div>
            <h3 class="newsList_dls_1_0_0__tt">
                <span>20 September, 2022</span>
                <a href="#">Pellentesque sodales risus quis libero facilisis, ullamcorper porta enim mollis.</a>
            </h3>
        </li> -->
        
    </ul>
</div>
<!-- <div class="newsList_dls_1_0_0">
	<div class="newsList_dls_1_0_0__title">Other Products</div>
	<div class="newsList_dls_1_0_0__line"></div>
	<ul>
		<?php
		// $related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 3, 'post__not_in' => array($post->ID) ) );
		// if( $related ) foreach( $related as $key => $post ) {
		// 	setup_postdata($post); 
		// 	$time = get_the_date('d/m/Y');
		// 	echo'
		// 		<li>
		// 			<div class="newsList_dls_1_0_0__pic">
		// 				<a href="'.get_permalink().'"><img width="360" height="225" src="'.get_the_post_thumbnail_url(get_the_ID(),'medium').'" alt="'.get_the_title().'"></a>
		// 			</div>
		// 			<h3 class="newsList_dls_1_0_0__tt">
		// 				<a href="'.get_permalink().'">Aluminium Quarzite</a>
		// 				<span>'.get_the_title().'</span>
		// 			</h3>
		// 		</li>
		// 	';	
		// }
		// wp_reset_postdata(); 
	?>
	</ul>
</div> -->