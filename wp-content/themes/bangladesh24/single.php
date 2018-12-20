<?php get_header(); ?>



	<section class="block-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12">
					<?php
							if (have_posts()) : 
								while (have_posts()) : the_post();
									$alternative_featured_image = get_field('alternative_featured_image');
									$post_thumbnail_url = $alternative_featured_image['url'];
									if( !isset($post_thumbnail_url)):
										$post_thumbnail_url = get_the_post_thumbnail_url();
									endif;	
					?>
					<div class="single-post">
						<div class="post-media post-featured-image">
							<img src="<?php echo $post_thumbnail_url; ?>" class="img-fluid" alt="">
						</div>
						
						<div class="post-title-area">
							<a class="post-cat" href="#">Food</a>
							<h2 class="post-title">
				 				Tacos ditched the naked chicken chalupa, so here's how to make your own
				 			</h2>
				 			<div class="post-meta">
								<span class="post-author">
									By <a href="#">John Doe</a>
								</span>
								<span class="post-date"><i class="fa fa-clock-o"></i> March 14, 2017</span>
								<span class="post-hits"><i class="fa fa-eye"></i> 21</span>
								<span class="post-comment"><i class="fa fa-comments-o"></i>
								<a href="#" class="comments-link"><span>01</span></a></span>
							</div>
						</div><!-- Post title end -->

						<div class="post-content-area">
							<div class="entry-content">
								<p> <span class="dropcap">T</span> ityful a rethoric question ran over her cheek When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.</p>


								<blockquote>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone and feel the charm of existence.</blockquote>

								<p>Lo-fi cred gastropub, brunch aliquip stumptown culpa. Banh mi eiusmod tattooed, freegan Schlitz master cleanse pug. Eu 8-bit id PBR Pinterest taxidermy, swag church-key Echo Park commodo yr. Adipisicing leggings enim laboris wayfarers, cliche Carles placeat typewriter mixtape cold-pressed. Etsy Pitchfork Austin, selvage beard reprehenderit ea ugh.</p>

								
								<h3>When, while the lovely valley teems with vapour around me, and the meridian sun strikes.</h3>

								<p><img class="pull-left" src="/wp-content/themes/bangladesh24/images/news/news-details/news-details2.jpg" class="img-fluid" alt=""></p>
								<p>Pitchfork kitsch plaid forage aliquip, sustainable taxidermy deserunt health goth stumptown cred VHS butcher. Mixtape fap Intelligentsia small batch placeat labore, bitters swag chia Echo Park. Four loko aliquip id, delectus beard Bushwick bespoke Blue Bottle eu keytar veniam ethical High Life pour-over.</p>
								<p>Art party photo booth deserunt exercitation plaid squid. Minim Austin 3 wolf moon scenester aesthetic, umami odio pariatur bitters. Pop-up occaecat taxidermy street art, tattooed beard literally duis photo booth Thundercats shabby chic. Pop-up occaecat taxidermy street art, tattooed beard literally duis photo booth Thundercats shabby Velit non seitan, tilde art party minim Thundercats viral.  Farm-to-table selfies labore, leggings cupidatat sunt taxidermy umami fanny pack typewriter hoodie art party voluptate cardigan banjo. Listicle paleo, drinking vinegar sint direct trade vegan 3 wolf moon.</p>
								<h3>Farm-to-table selfies labore leggings:</h3>
								<ul>
								<li>Plaid fashion axe semiotics skateboard</li>
								<li>Mixtape fap Intelligentsia small batch placeat labore</li>
								<li>Gleams steal into the inner sanctuary grow</li>
								<li>Like these sweet mornings of spring which</li>
								</ul>
								<p>High Life tempor retro Truffaut. Tofu mixtape twee, assumenda quinoa flexitarian aesthetic artisan vinyl pug. Chambray et Carles Thundercats cardigan actually, magna bicycle rights. Plaid fashion axe semiotics skateboard, try-hard food truck aesthetic biodiesel exercitation. Accusamus VHS Wes Anderson Banksy food truck vero.</p>

							</div><!-- Entery content end -->

					

							<div class="share-items clearfix">
	   							<ul class="post-social-icons unstyled">
	   								<li class="facebook">
	   									<a href="#">
	   									<i class="fa fa-facebook"></i> <span class="ts-social-title">Facebook</span></a>
	   								</li>
	   								<li class="twitter">
	   									<a href="#">
	   									<i class="fa fa-twitter"></i> <span class="ts-social-title">Twitter</span></a>
	   								</li>
	   								<li class="gplus">
	   									<a href="#">
	   									<i class="fa fa-google-plus"></i> <span class="ts-social-title">Google +</span></a>
	   								</li>
	   								<li class="pinterest">
	   									<a href="#">
	   									<i class="fa fa-pinterest"></i> <span class="ts-social-title">Pinterest</span></a>
	   								</li>
	   							</ul>
	   						</div><!-- Share items end -->
						</div><!-- post-content end -->
					</div><!-- Single post end -->
				<?php 	endwhile; endif;	?>








					<nav class="post-navigation clearfix">
	                  <div class="post-previous">
	                      <a href="#">
	                          <span><i class="fa fa-angle-left"></i>Previous Post</span>
	                          <h3>
	                              Deleting fears from the brain means you might never need to face them
	                          </h3>
	                      </a>
	                  </div>
	                  <div class="post-next">
	                      <a href="#">
	                          	<span>Next Post <i class="fa fa-angle-right"></i></span>
	                          <h3>
	                              Smart packs parking sensor tech and beeps when collisions
	                          </h3>
	                      </a>
	                  </div>       
	               </nav><!-- Post navigation end -->

					

					<div class="related-posts block">
						<h3 class="block-title"><span>Related Posts</span></h3>

						<div id="latest-news-slide" class="owl-carousel owl-theme latest-news-slide">
							<div class="item">
								<div class="post-block-style clearfix">
									<div class="post-thumb">
										<a href="#"><img class="img-fluid" src="/wp-content/themes/bangladesh24/images/news/lifestyle/travel5.jpg" alt="" /></a>
									</div>
									<a class="post-cat" href="#">Health</a>
									<div class="post-content">
							 			<h2 class="post-title title-medium">
							 				<a href="#">Hynopedia helps female travelers find health care in Maldivs</a>
							 			</h2>
							 			<div class="post-meta">
							 				<span class="post-author"><a href="#">John Doe</a></span>
							 				<span class="post-date">Feb 19, 2017</span>
							 			</div>
						 			</div><!-- Post content end -->
								</div><!-- Post Block style end -->

								<div class="gap-30"></div>
								<div class="post-block-style clearfix">
									<div class="post-thumb">
										<a href="#"><img class="img-fluid" src="/wp-content/themes/bangladesh24/images/news/lifestyle/travel5.jpg" alt="" /></a>
									</div>
									<a class="post-cat" href="#">Health</a>
									<div class="post-content">
							 			<h2 class="post-title title-medium">
							 				<a href="#">Hynopedia helps female travelers find health care in Maldivs</a>
							 			</h2>
							 			<div class="post-meta">
							 				<span class="post-author"><a href="#">John Doe</a></span>
							 				<span class="post-date">Feb 19, 2017</span>
							 			</div>
						 			</div><!-- Post content end -->
								</div><!-- Post Block style end -->
							</div><!-- Item 1 end -->
							<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
							<div class="item">
								<div class="post-block-style clearfix">
									<div class="post-thumb">
										<a href="#"><img class="img-fluid" src="/wp-content/themes/bangladesh24/images/news/lifestyle/travel5.jpg" alt="" /></a>
									</div>
									<a class="post-cat" href="#">Health</a>
									<div class="post-content">
							 			<h2 class="post-title title-medium">
							 				<a href="#">Hynopedia helps female travelers find health care in Maldivs</a>
							 			</h2>
							 			<div class="post-meta">
							 				<span class="post-author"><a href="#">John Doe</a></span>
							 				<span class="post-date">Feb 19, 2017</span>
							 			</div>
						 			</div><!-- Post content end -->
								</div><!-- Post Block style end -->

								<div class="gap-30"></div>
								<div class="post-block-style clearfix">
									<div class="post-thumb">
										<a href="#"><img class="img-fluid" src="/wp-content/themes/bangladesh24/images/news/lifestyle/travel5.jpg" alt="" /></a>
									</div>
									<a class="post-cat" href="#">Health</a>
									<div class="post-content">
							 			<h2 class="post-title title-medium">
							 				<a href="#">Hynopedia helps female travelers find health care in Maldivs</a>
							 			</h2>
							 			<div class="post-meta">
							 				<span class="post-author"><a href="#">John Doe</a></span>
							 				<span class="post-date">Feb 19, 2017</span>
							 			</div>
						 			</div><!-- Post content end -->
								</div><!-- Post Block style end -->
							</div><!-- Item 1 end -->
							<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
							<div class="item">
								<div class="post-block-style clearfix">
									<div class="post-thumb">
										<a href="#"><img class="img-fluid" src="/wp-content/themes/bangladesh24/images/news/lifestyle/travel5.jpg" alt="" /></a>
									</div>
									<a class="post-cat" href="#">Health</a>
									<div class="post-content">
							 			<h2 class="post-title title-medium">
							 				<a href="#">Hynopedia helps female travelers find health care in Maldivs</a>
							 			</h2>
							 			<div class="post-meta">
							 				<span class="post-author"><a href="#">John Doe</a></span>
							 				<span class="post-date">Feb 19, 2017</span>
							 			</div>
						 			</div><!-- Post content end -->
								</div><!-- Post Block style end -->

								<div class="gap-30"></div>
								<div class="post-block-style clearfix">
									<div class="post-thumb">
										<a href="#"><img class="img-fluid" src="/wp-content/themes/bangladesh24/images/news/lifestyle/travel5.jpg" alt="" /></a>
									</div>
									<a class="post-cat" href="#">Health</a>
									<div class="post-content">
							 			<h2 class="post-title title-medium">
							 				<a href="#">Hynopedia helps female travelers find health care in Maldivs</a>
							 			</h2>
							 			<div class="post-meta">
							 				<span class="post-author"><a href="#">John Doe</a></span>
							 				<span class="post-date">Feb 19, 2017</span>
							 			</div>
						 			</div><!-- Post content end -->
								</div><!-- Post Block style end -->
							</div><!-- Item 1 end -->
							<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
							<div class="item">
								<div class="post-block-style clearfix">
									<div class="post-thumb">
										<a href="#"><img class="img-fluid" src="/wp-content/themes/bangladesh24/images/news/lifestyle/travel5.jpg" alt="" /></a>
									</div>
									<a class="post-cat" href="#">Health</a>
									<div class="post-content">
							 			<h2 class="post-title title-medium">
							 				<a href="#">Hynopedia helps female travelers find health care in Maldivs</a>
							 			</h2>
							 			<div class="post-meta">
							 				<span class="post-author"><a href="#">John Doe</a></span>
							 				<span class="post-date">Feb 19, 2017</span>
							 			</div>
						 			</div><!-- Post content end -->
								</div><!-- Post Block style end -->

								<div class="gap-30"></div>
								<div class="post-block-style clearfix">
									<div class="post-thumb">
										<a href="#"><img class="img-fluid" src="/wp-content/themes/bangladesh24/images/news/lifestyle/travel5.jpg" alt="" /></a>
									</div>
									<a class="post-cat" href="#">Health</a>
									<div class="post-content">
							 			<h2 class="post-title title-medium">
							 				<a href="#">Hynopedia helps female travelers find health care in Maldivs</a>
							 			</h2>
							 			<div class="post-meta">
							 				<span class="post-author"><a href="#">John Doe</a></span>
							 				<span class="post-date">Feb 19, 2017</span>
							 			</div>
						 			</div><!-- Post content end -->
								</div><!-- Post Block style end -->
							</div><!-- Item 1 end -->
							<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
							<div class="item">
								<div class="post-block-style clearfix">
									<div class="post-thumb">
										<a href="#"><img class="img-fluid" src="/wp-content/themes/bangladesh24/images/news/lifestyle/travel5.jpg" alt="" /></a>
									</div>
									<a class="post-cat" href="#">Health</a>
									<div class="post-content">
							 			<h2 class="post-title title-medium">
							 				<a href="#">Hynopedia helps female travelers find health care in Maldivs</a>
							 			</h2>
							 			<div class="post-meta">
							 				<span class="post-author"><a href="#">John Doe</a></span>
							 				<span class="post-date">Feb 19, 2017</span>
							 			</div>
						 			</div><!-- Post content end -->
								</div><!-- Post Block style end -->

								<div class="gap-30"></div>
								<div class="post-block-style clearfix">
									<div class="post-thumb">
										<a href="#"><img class="img-fluid" src="/wp-content/themes/bangladesh24/images/news/lifestyle/travel5.jpg" alt="" /></a>
									</div>
									<a class="post-cat" href="#">Health</a>
									<div class="post-content">
							 			<h2 class="post-title title-medium">
							 				<a href="#">Hynopedia helps female travelers find health care in Maldivs</a>
							 			</h2>
							 			<div class="post-meta">
							 				<span class="post-author"><a href="#">John Doe</a></span>
							 				<span class="post-date">Feb 19, 2017</span>
							 			</div>
						 			</div><!-- Post content end -->
								</div><!-- Post Block style end -->
							</div><!-- Item 1 end -->
							<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
							
							
						</div><!-- Carousel end -->
					</div><!-- Related posts end -->





					

				</div><!-- Content Col end -->

				<div class="col-lg-4 col-md-12">
					<div class="sidebar sidebar-right">
						<div class="widget">
							<h3 class="block-title"><span>Follow Us</span></h3>

							<ul class="social-icon">
								<li><a href="#" target="_blank"><i class="fa fa-rss"></i></a></li>
								<li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#" target="_blank"><i class="fa fa-vimeo-square"></i></a></li>
								<li><a href="#" target="_blank"><i class="fa fa-youtube"></i></a></li>
							</ul>
						</div><!-- Widget Social end -->

						<div class="widget color-default">
							<h3 class="block-title"><span>Popular News</span></h3>

							<div class="post-overaly-style clearfix">
								<div class="post-thumb">
									<a href="#">
										<img class="img-fluid" src="/wp-content/themes/bangladesh24/images/news/lifestyle/health4.jpg" alt="" />
									</a>
								</div>
								
								<div class="post-content">
						 			<a class="post-cat" href="#">Health</a>
						 			<h2 class="post-title title-small">
						 				<a href="#">Smart packs parking sensor tech and beeps when col…</a>
						 			</h2>
						 			<div class="post-meta">
						 				<span class="post-date">Feb 06, 2017</span>
						 			</div>
					 			</div><!-- Post content end -->
							</div><!-- Post Overaly Article end -->


							<div class="list-post-block">
								<ul class="list-post">
									<li class="clearfix">
										<div class="post-block-style post-float clearfix">
											<div class="post-thumb">
												<a href="#">
													<img class="img-fluid" src="/wp-content/themes/bangladesh24/images/news/tech/gadget3.jpg" alt="" />
												</a>
												<a class="post-cat" href="#">Gadgets</a>
											</div><!-- Post thumb end -->

											<div class="post-content">
									 			<h2 class="post-title title-small">
									 				<a href="#">Panasonic's new Sumix CH7 an ultra portable filmmaker's drea…</a>
									 			</h2>
									 			<div class="post-meta">
									 				<span class="post-date">Mar 13, 2017</span>
									 			</div>
								 			</div><!-- Post content end -->
										</div><!-- Post block style end -->
									</li><!-- Li 1 end -->

									<li class="clearfix">
										<div class="post-block-style post-float clearfix">
											<div class="post-thumb">
												<a href="#">
													<img class="img-fluid" src="/wp-content/themes/bangladesh24/images/news/lifestyle/travel5.jpg" alt="" />
												</a>
												<a class="post-cat" href="#">Travel</a>
											</div><!-- Post thumb end -->

											<div class="post-content">
									 			<h2 class="post-title title-small">
									 				<a href="#">Hynopedia helps female travelers find health care...</a>
									 			</h2>
									 			<div class="post-meta">
									 				<span class="post-date">Jan 11, 2017</span>
									 			</div>
								 			</div><!-- Post content end -->
										</div><!-- Post block style end -->
									</li><!-- Li 2 end -->

									<li class="clearfix">
										<div class="post-block-style post-float clearfix">
											<div class="post-thumb">
												<a href="#">
													<img class="img-fluid" src="/wp-content/themes/bangladesh24/images/news/tech/robot5.jpg" alt="" />
												</a>
												<a class="post-cat" href="#">Robotics</a>
											</div><!-- Post thumb end -->

											<div class="post-content">
									 			<h2 class="post-title title-small">
									 				<a href="#">Robots in hospitals can be quite handy to navigate around...</a>
									 			</h2>
									 			<div class="post-meta">
									 				<span class="post-date">Feb 19, 2017</span>
									 			</div>
								 			</div><!-- Post content end -->
										</div><!-- Post block style end -->
									</li><!-- Li 3 end -->

									<li class="clearfix">
										<div class="post-block-style post-float clearfix">
											<div class="post-thumb">
												<a href="#">
													<img class="img-fluid" src="/wp-content/themes/bangladesh24/images/news/lifestyle/food1.jpg" alt="" />
												</a>
												<a class="post-cat" href="#">Food</a>
											</div><!-- Post thumb end -->

											<div class="post-content">
									 			<h2 class="post-title title-small">
									 				<a href="#">Tacos ditched the naked chicken chalupa, so here's how…</a>
									 			</h2>
									 			<div class="post-meta">
									 				<span class="post-date">Feb 27, 2017</span>
									 			</div>
								 			</div><!-- Post content end -->
										</div><!-- Post block style end -->
									</li><!-- Li 4 end -->

								</ul><!-- List post end -->
							</div><!-- List post block end -->

						</div><!-- Popular news widget end -->

						<div class="widget text-center">
							<img class="banner img-fluid" src="/wp-content/themes/bangladesh24/images/banner-ads/ad-sidebar.png" alt="" />
						</div><!-- Sidebar Ad end -->

						<div class="widget widget-tags">
							<h3 class="block-title"><span>Tags</span></h3>
							<ul class="unstyled clearfix">
			              	<li><a href="#">Apps</a></li>
			              	<li><a href="#">Architechture</a></li>
			              	<li><a href="#">Food</a></li>
			              	<li><a href="#">Gadgets</a></li>
			              	<li><a href="#">Games</a></li>
			              	<li><a href="#">Health</a></li>
			              	<li><a href="#">Lifestyles</a></li>
			              	<li><a href="#">Robotics</a></li>
			              	<li><a href="#">Software</a></li>
			              	<li><a href="#">Tech</a></li>
			              	<li><a href="#">Travel</a></li>
			              	<li><a href="#">Video</a></li>
			            </ul>
						</div><!-- Tags end -->

						<div class="widget m-bottom-0">
							<h3 class="block-title"><span>Newsletter</span></h3>
							<div class="ts-newsletter">
								<div class="newsletter-introtext">
									<h4>Get Updates</h4>
									<p>Subscribe our newsletter to get the best stories into your inbox!</p>
								</div>

								<div class="newsletter-form">
									<form action="#" method="post">
										<div class="form-group">
											<input type="email" name="email" id="newsletter-form-email" class="form-control form-control-lg" placeholder="E-mail" autocomplete="off">
											<button class="btn btn-primary">Subscribe</button>
										</div>
									</form>
								</div>
							</div><!-- Newsletter end -->
						</div><!-- Newsletter widget end -->

					</div><!-- Sidebar right end -->
				</div><!-- Sidebar Col end -->

			</div><!-- Row end -->
		</div><!-- Container end -->
	</section><!-- First block end -->


<?php get_footer(); ?>