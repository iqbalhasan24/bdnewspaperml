<?php 
/*+++++++++++++++++++++get_top_first_slider_post++++++++++++++++++++++++++++++*/
function get_top_first_slider_post($post_formate, $cat_id, $post_no, $div_class,$title_bg_color_code){                 
                  
                    if ( has_post_format($post_formate) ) {          
                    $args = array(
                        'posts_per_page'  => $post_no,
                        'cat'           => $cat_id,
                        'orderby'       => 'date',
                        'order'       => 'DESC',
                    );

                    $category_link = get_category_link ( $cat_id); 
                    $cat_name = get_cat_name ( $cat_id); 
                    //$pfx_date = get_the_date( $format, $post_id );                   
                   
	                            $query = new WP_Query( $args );
	                            	$i=0;
	                            if ( $query->have_posts() ) :
	                                while ( $query->have_posts() ) {
	                                    $query->the_post();
	                                    $i++;                                   

	                                    	$bg_post_thumbnail_url = 'background-image:url('. get_the_post_thumbnail_url().')'; 
			                   			?>	


			                   			<div class="item <?php if($i==1): echo('active'); endif; ?>" style="<?php echo $bg_post_thumbnail_url; ?>">
											<div class="featured-post">
										 		<div class="post-content">
										 			<a class="post-cat" href="<?php echo $category_link; ?>"><?php echo $cat_name; ?></a>
										 			<h2 class="post-title title-extra-large">
										 				<a href="<?php the_permalink();?>">
										 						<?php 
									                                $title=get_the_title();
									                                $title_10word=wp_trim_words($title,10);
									                                _e($title_10word);
								                                ?>
										 				</a>
										 			</h2>
										 			<span class="post-date">March 16, 2017</span>
										 		</div>
										 	</div><!--/ Featured post end -->							
										</div><!-- Item 1 end -->
	                           	<?php	                           	                            	

	                           }
                    
                    endif; 
                    wp_reset_postdata();
            }

      
   }/*end function*/
/*+++++++++++++++++++++End get_top_first_slider_post++++++++++++++++++++++++++++++*/




/*+++++++++++++++++++++get_top_second_sportligh_post++++++++++++++++++++++++++++++*/
function get_top_second_sportligh_post($cat_id, $post_no, $post_class){
                    $args = array(
                        'posts_per_page'  => $post_no,
                        'cat'           => $cat_id,
                        'orderby'       => 'date',
                        'order'       => 'DESC'
                    );

                    $category_link = get_category_link ( $cat_id); 
                    $cat_name = get_cat_name ( $cat_id); 
                    //$pfx_date = get_the_date( $format, $post_id );



                   
	                            $query = new WP_Query( $args );
	                            if ( $query->have_posts() ) :

	                                while ( $query->have_posts() ) {
	                                    	$query->the_post();
	                                    	$post_thumbnail_url =  get_the_post_thumbnail_url(); 
	                                    	if($post_thumbnail_url ==""): $post_thumbnail_url = '/wp-content/themes/bangladesh24/images/news/tech/gadget4.jpg'; endif;
	                                    	//var_dump($post_thumbnail_url);
					?>

			                   			<div class="post-overaly-style contentTop <?php echo $post_class; ?> clearfix">
											<div class="post-thumb">
												<a href="<?php the_permalink(); ?>"><img class="img-fluid" src="<?php echo $post_thumbnail_url; ?>" alt="" /></a>
											</div>
											<div class="post-content">
									 			<a class="post-cat" href="<?php echo $category_link; ?>"><?php echo $cat_name; ?></a>
									 			<h2 class="post-title title-large">
									 				<a href="<?php the_permalink();?>">
								 						<?php 
							                                $title=get_the_title();
							                                $title_10word=wp_trim_words($title,10);
							                                _e($title_10word);
						                                ?>
									 				</a>
									 			</h2>
									 			<span class="post-date">February 19, 2017</span>
								 			</div><!-- Post content end -->
										</div><!-- Post Overaly end -->

	                           	<?php 
	                           }
                    	endif;
                    
                    wp_reset_postdata();
          

      
   }/*end function*/
/*+++++++++++++++++++++End get_top_second_sportligh_post++++++++++++++++++++++++++++++*/



/*+++++++++++++++++++++get_top_second_sportligh_post++++++++++++++++++++++++++++++*/
function get_latest_news_list($cat_id, $post_no){
                    $args = array(
                        'posts_per_page'  => $post_no,
                        'cat'           => $cat_id,
                        'orderby'       => 'date',
                        'order'       => 'DESC'
                    );

                    $category_link = get_category_link ( $cat_id); 
                    $cat_name = get_cat_name ( $cat_id); 
                    //$pfx_date = get_the_date( $format, $post_id );



                   
	                            $query = new WP_Query( $args );
	                            if ( $query->have_posts() ) :

	                                while ( $query->have_posts() ) {
	                                    	$query->the_post();
	                                    	$post_thumbnail_url =  get_the_post_thumbnail_url(); 
	                                    	if($post_thumbnail_url ==""): $post_thumbnail_url = '/wp-content/themes/bangladesh24/images/news/tech/gadget4.jpg'; endif;
	                                    	//var_dump($post_thumbnail_url);
					?>

			                   			
										<li class="clearfix">
										<div class="post-block-style clearfix">
											<div class="post-thumb">
												<a href="<?php the_permalink(); ?>"><img class="img-fluid" src="<?php echo $post_thumbnail_url; ?>" alt="" /></a>
											</div>
											<a class="post-cat" href="<?php echo $category_link; ?>"><?php echo $cat_name; ?></a>
											<div class="post-content">
									 			<h2 class="post-title title-medium">
									 				<a href="<?php the_permalink();?>">
									 					<?php 
							                                $title=get_the_title();
							                                $title_7word=wp_trim_words($title,7);
							                                _e($title_7word);
						                                ?>						                                	
						                            </a>
									 			</h2>
									 			<div class="post-meta">
									 				<!-- <span class="post-author"><a href="#">John Doe</a></span>
									 				<span class="post-date">Feb 19, 2017</span> -->								 				
									 				<span style="color: #000;">Published: 
									 					<?php the_time('M, j, Y'); 
									 					//the_time('M, j, Y | g:i A'); ?>									 					
									 				</span>
									 			</div>
								 			</div>
										</div>
									</li>

	                           	<?php 
	                           }
                    	endif;
                    
                    wp_reset_postdata();
          

      
   }/*end function*/
/*+++++++++++++++++++++End get_top_second_sportligh_post++++++++++++++++++++++++++++++*/




/*+++++++++++++++++++++get_post_for_tab_content++++++++++++++++++++++++++++++*/
function get_post_for_tab_content( $cat_id, $post_no){                 
                  
                            
                    $args = array(
                        'posts_per_page'  => $post_no,
                        'cat'           => $cat_id,
                        'orderby'       => 'date',
                        'order'       => 'DESC',
                    );

                    $category_link = get_category_link ( $cat_id); 
                    $cat_name = get_cat_name ( $cat_id); 
                    //$pfx_date = get_the_date( $format, $post_id );                   
                   
	                            $query = new WP_Query( $args );
	                            	$i=0;
	                            	
	                            if ( $query->have_posts() ) :
	                                while ( $query->have_posts() ) {
	                                    $query->the_post();
	                                    $i++;
	                                    	$bg_post_thumbnail_url = 'background-image:url('. get_the_post_thumbnail_url().')'; 
			                   			?>	


			                   			<?php if($i==1): ?> 
			                   				<div class="col-lg-6 col-md-6">
								      			<div class="post-block-style clearfix">
													<div class="post-thumb">
														<a href="#">
															<img class="img-fluid" src="/wp-content/themes/bangladesh24/images/news/tech/robot1.jpg" alt="" />
														</a>
													</div>
													<a class="post-cat" href="#">Robotics</a>
													<div class="post-content">
											 			<h2 class="post-title">
											 				<a href="#">There's no escaping Watsone Dynamics' wheeled jumping robot</a>
											 			</h2>
											 			<div class="post-meta">
											 				<span class="post-author"><a href="#">John Doe</a></span>
											 				<span class="post-date">Feb 24, 2017</span>
											 			</div>
											 			<p>Lumbersexual meh sustainable Thundercats meditation kogi. Tilde Pitchfork vegan, gentrify minim elit semiotics non messenger bag Austin which roasted ...</p>
										 			</div><!-- Post content end -->
												</div><!-- Post Block style end -->
									      	</div><!-- Col end -->
			                   			<?php elseif($i==2): ?>
			                   				<div class="col-lg-6 col-md-6">
						      					<div class="list-post-block">
													<ul class="list-post">

										<?php elseif($i >=2): ?>

												<li class="clearfix">
													<div class="post-block-style post-float clearfix">
														<div class="post-thumb">
															<a href="#">
																<img class="img-fluid" src="/wp-content/themes/bangladesh24/images/news/tech/robot2.jpg" alt="" />
															</a>
														</div><!-- Post thumb end -->

														<div class="post-content">
												 			<h2 class="post-title title-small">
												 				<a href="#">Robot Life on Mars! Meet the Machines Exploring the Red Planet To…</a>
												 			</h2>
												 			<div class="post-meta">
												 				<span class="post-date">Feb 13, 2017</span>
												 			</div>
											 			</div><!-- Post content end -->
													</div><!-- Post block style end -->
												</li><!-- Li 1 end -->

			                   			<?php elseif($i == $post_no): ?>
					                   			</ul>
					                   		</div>
					                   	</div>			                   				
			                   			<?php endif; ?>			                   			
	                           	<?php                           	                            	

	                           }
                    
                    endif; 
                    wp_reset_postdata();
           

      
   }/*end function*/
/*+++++++++++++++++++++End get_post_for_tab_content++++++++++++++++++++++++++++++*/