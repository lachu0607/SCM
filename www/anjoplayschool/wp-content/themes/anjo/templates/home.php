<?php 
/**
 * 
 * Template Name: Home
 * 
 * 
 * 
 */
?>
	<?php get_header();?>
	
	<!--start wrapper-->
	<section class="wrapper">
		
		<!-- Place somewhere in the <body> of your page -->
<div class="flexslider">
  <ul class="slides">
    <li data-thumb="slide1-thumb.jpg">
      <img src="slide1.jpg" />
    </li>
    <li data-thumb="slide2-thumb.jpg">
      <img src="slide2.jpg" />
    </li>
    <li data-thumb="slide3-thumb.jpg">
      <img src="slide3.jpg" />
    </li>
    <li data-thumb="slide4-thumb.jpg">
      <img src="slide4.jpg" />
    </li>
  </ul>
</div>
		
		<section class="promo_box wow bounceIn">
			<div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="promo_content">
                            <h3>Anjo Playschool is perfect place for kids. </h3>
                            <p>we want our children to be independent, confident, inquisitive learners and to grow up</p>
                        </div>
                    </div>
                    <!-- <div class="col-sm-3">
                        <div class="pb_action">
                            <a class="btn btn-lg btn-default" href="#fakelink">
                                <i class="fa fa-shopping-cart"></i>
                                Download Now
                            </a>
                        </div>
                    </div> -->
                </div>
			</div>
		</section>
		
		<!--start info service-->
		<section class="info_service">
			<div class="container">
				<div class="row sub_content">
					<div class="rs_box wow fadeInLeft">
						<div class="col-sm-4 col-md-4 col-lg-4">
							<div class="serviceBox_1">
								<div class="icon_service">
									<i class="fa fa-laptop"></i>
									<h3>Lorem ipsum</h3>
								</div>
								<div class="service_1_detail">
									<p>Lorem ipsum dolor sit amet, cons adipiscing elit. Aenean commodo ligula eget dolor. Cum sociis natoque penatibus mag dis parturient.</p>
									<!-- <a class="read" href="#">Read more</a> -->
								</div>
							</div>
						</div>
						
						<div class="col-sm-4 col-md-4 col-lg-4">
							<div class="serviceBox_1">
								<div class="icon_service">
									<i class="fa fa-heart"></i>
									<h3>Lorem ipsum</h3>
								</div>
								<div class="service_1_detail">
									<p>Lorem ipsum dolor sit amet, cons adipiscing elit. Aenean commodo ligula eget dolor. Cum sociis natoque penatibus mag dis parturient.</p>
									<!-- <a class="read" href="#">Read more</a> -->
								</div>
							</div>
						</div>	

						<div class="col-sm-4 col-md-4 col-lg-4">
							<div class="serviceBox_1">
								<div class="icon_service">
									<i class="fa fa-trophy"></i>
									<h3>Lorem ipsum</h3>
								</div>
								<div class="service_1_detail">
									<p>Lorem ipsum dolor sit amet, cons adipiscing elit. Aenean commodo ligula eget dolor. Cum sociis natoque penatibus mag dis parturient.</p>
									<!-- <a class="read" href="#">Read more</a> -->
								</div>
							</div>
						</div>	
					</div>
				</div>
			</div>
		</section>
		<!--end info service-->

        <section class="feature_bottom">
            <div class="container">
                <div class="row sub_content">
                    <div class="col-lg-8 col-md-8 col-sm-8 wow fadeInUp">
                        <div class="dividerHeading">
                            <h4><span>Why Choose Us?</span></h4>
                        </div>
                        <div class="row">
                            <div class="col-lg-6  rec_blog">
                                <div class="blogPic">
                                    <div class="news-thumb">
                                        <div class="swipe" id="slider" style="visibility: visible;">
                                            <ul class="swipe-wrap" style="width: 904px;">
                                                <li><img alt="" src="<?php echo get_template_directory_uri(); ?>/templates/images/blog/blog_1.png"></li>
                                                <li><img alt="" src="<?php echo get_template_directory_uri(); ?>/templates/images/blog/blog_2.png"></li>
                                                <li><img alt="" src="<?php echo get_template_directory_uri(); ?>/templates/images/blog/blog_3.png"></li>
                                                <li><img alt="" src="<?php echo get_template_directory_uri(); ?>/templates/images/blog/blog_4.png"></li>
                                            </ul>
                                            <div class="swipe-navi">
                                                <div onclick="mySwipe.prev()" class="swipe-left"><i class="fa fa-chevron-left"></i></div>
                                                <div onclick="mySwipe.next()" class="swipe-right"><i class="fa fa-chevron-right"></i></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="blogDetail">
                                    <div class="blogTitle">
                                        <a href="#">
                                            <h2>This title in post blogs</h2>
                                        </a>
										<span>
											<i class="fa fa-calendar"></i>
											30 June, 20:43 PM
										</span>
                                    </div>
                                    <div class="blogContent">
                                        <p>Etu eros omnes theophratus mei, cumit usulan dicit omnium eripuit. Qui tever iluma facete gubergren. </p>
                                    </div>
                                    <div class="blogMeta">
                                        <a href="#">
                                            <i class="fa fa-user"></i>
                                            Here Author Name
                                        </a>
                                        <a href="#">
                                            <i class="fa fa-comment"></i>
                                            1980
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6  rec_blog">
                                <div class="blogPic">
                                    <img alt="" src="<?php echo get_template_directory_uri(); ?>/templates/images/blog/blog_6.png">
                                    <div class="blog-hover">
                                        <a href="#">
											<span class="icon">
												<i class="fa fa-link"></i>
											</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="blogDetail">
                                    <div class="blogTitle">
                                        <a href="#">
                                            <h2>This title in post blogs</h2>
                                        </a>
										<span>
											<i class="fa fa-calendar"></i>
											30 June, 20:43 PM
										</span>
                                    </div>
                                    <div class="blogContent">
                                        <p>Etu eros omnes theophratus mei, cumit usulan dicit omnium eripuit. Qui tever iluma facete gubergren. </p>
                                    </div>
                                    <div class="blogMeta">
                                        <a href="#">
                                            <i class="fa fa-user"></i>
                                            Here Author Name
                                        </a>
                                        <a href="#">
                                            <i class="fa fa-comment"></i>
                                            1980
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- TESTIMONIALS -->
                    <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInDown">
                        <div class="dividerHeading">
                            <h4><span>What Mother's Say</span></h4>
                        </div>
                        <div id="testimonial-carousel" class="testimonial carousel slide">
                            <div class="carousel-inner">
                                <div class="active item">
                                    <div class="testimonial-item">
                                        <div class="icon"><i class="fa fa-quote-right"></i></div>
                                        <blockquote>
                                            <p>Donec convallis, metus nec tempus aliquet, nunc metus adipiscing leo, a lobortis nisi dui ut odio. Nullam ultrices, eros accumsan vulputate faucibus, turpis tortor dictum phasellus ac libero. </p>
                                        </blockquote>
                                        <div class="icon-tr"></div>
                                        <div class="testimonial-review">
                                            <img src="<?php echo get_template_directory_uri(); ?>/templates/images/testimonials/1.png" alt="testimoni">
                                            <h1>Jonathan Dower,<small>Company Inc.</small></h1>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="testimonial-item">
                                        <div class="icon"><i class="fa fa-quote-right"></i></div>
                                        <blockquote>
                                            <p>Metus aliquet tincidunt metus, sit amet mattis lectus sodales ac. Suspendisse rhoncus dictum eros, ut egestas eros luctus eget. Nam nibh sem, mattis et feugiat ut, porttitor nec risus.</p>
                                        </blockquote>
                                        <div class="icon-tr"></div>
                                        <div class="testimonial-review">
                                            <img src="<?php echo get_template_directory_uri(); ?>/templates/images/testimonials/2.png" alt="testimoni">
                                            <h1>Jonathan Dower<small>Leopard</small></h1>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="testimonial-item">
                                        <div class="icon"><i class="fa fa-quote-right"></i></div>
                                        <blockquote>
                                            <p>Donec convallis, metus nec tempus aliquet, nunc metus adipiscing leo, a lobortis nisi dui ut odio. Nullam ultrices, eros accumsan vulputate faucibus, turpis tortor dictum. Phasellus ac libero ac tellus pellentesque semper. Sed ac felis. Sed commo, magnase quis lacinia ornare, quam ante aliqua nisi, eu iaculis. </p>
                                        </blockquote>
                                        <div class="icon-tr"></div>
                                        <div class="testimonial-review">
                                            <img src="<?php echo get_template_directory_uri(); ?>/templates/images/testimonials/3.png" alt="testimoni">
                                            <h1>Jonathan Dower<small>Leopard</small></h1>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="testimonial-buttons"><a href="#testimonial-carousel" data-slide="prev"><i class="fa fa-chevron-left"></i></a>&#32;
                                <a href="#testimonial-carousel" data-slide="next"><i class="fa fa-chevron-right"></i></a></div>
                        </div>
                    </div><!-- TESTIMONIALS END -->
                </div>
            </div>
        </section>
        <!--Start recent work starts-->
		<section class="latest_work">
    <div class="container">
        <div class="row sub_content">
            <div class="carousel-intro">
                <div class="col-md-12">
                    <div class="dividerHeading">
                        <h4><span>Our Gallery</span></h4>
                    </div>
                    <div class="carousel-navi">
                        <div id="work-prev" class="arrow-left jcarousel-prev"><i class="fa fa-angle-left"></i></div>
                        <div id="work-next" class="arrow-right jcarousel-next"><i class="fa fa-angle-right"></i></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>

            <div class="jcarousel recent-work-jc">
                <ul class="jcarousel-list">
                    <!-- Recent Work Item -->
                    <li class="col-sm-3 col-md-3 col-lg-3">
                        <div class="recent-item">
                            <figure>
                                <div class="touching medium">
                                    <img src="<?php echo get_template_directory_uri(); ?>/templates/images/portfolio/anjoplayschool_g.png" alt="" />
                                </div>
                                <div class="option">
                                    <a href="<?php echo get_template_directory_uri(); ?>/templates/images/portfolio/anjoplayschool_g.png" class="hover-zoom mfp-image" ><i class="fa fa-search"></i></a>
                                    <a href="portfolio_single.html" class="hover-link"><i class="fa fa-link"></i></a>
                                </div>
                                <figcaption class="item-description">
                                    <h5>Touch and Swipe</h5>
                                    <span>Technology</span>
                                </figcaption>
                            </figure>
                        </div>
                    </li>

                    <!-- Recent Work Item -->
                    <li class="col-sm-3 col-md-3 col-lg-3">
                        <div class="recent-item">
                            <figure>
                                <div class="touching medium">
                                    <img src="<?php echo get_template_directory_uri(); ?>/templates/images/portfolio/anjoplayschool_g1.png" alt="" />
                                </div>
                                <div class="option">
                                    <a href="<?php echo get_template_directory_uri(); ?>/templates/images/portfolio/anjoplayschool_g1.png" class="hover-zoom mfp-image" ><i class="fa fa-search"></i></a>
                                    <a href="portfolio_single.html" class="hover-link"><i class="fa fa-link"></i></a>
                                </div>
                                <figcaption class="item-description">
                                    <h5>Touch and Swipe</h5>
                                    <span>Technology</span>
                                </figcaption>
                            </figure>
                        </div>
                    </li>

                    <!-- Recent Work Item -->
                    <li class="col-sm-3 col-md-3 col-lg-3">
                        <div class="recent-item">
                            <figure>
                                <div class="touching medium">
                                    <img src="<?php echo get_template_directory_uri(); ?>/templates/images/portfolio/anjoplayschool_g2.png" alt="" />
                                </div>
                                <div class="option">
                                    <a href="<?php echo get_template_directory_uri(); ?>/templates/images/portfolio/anjoplayschool_g2.png" class="hover-zoom mfp-image" ><i class="fa fa-search"></i></a>
                                    <a href="portfolio_single.html" class="hover-link"><i class="fa fa-link"></i></a>
                                </div>
                                <figcaption class="item-description">
                                    <h5>Touch and Swipe</h5>
                                    <span>Technology</span>
                                </figcaption>
                            </figure>
                        </div>
                    </li>

                    <!-- Recent Work Item -->
                    <li class="col-sm-3 col-md-3 col-lg-3">
                        <div class="recent-item">
                            <figure>
                                <div class="touching medium">
                                    <img src="<?php echo get_template_directory_uri(); ?>/templates/images/portfolio/anjoplayschool_g3.png" alt="" />
                                </div>
                                <div class="option">
                                    <a href="<?php echo get_template_directory_uri(); ?>/templates/images/portfolio/anjoplayschool_g3.png" class="hover-zoom mfp-image" ><i class="fa fa-search"></i></a>
                                    <a href="portfolio_single.html" class="hover-link"><i class="fa fa-link"></i></a>
                                </div>
                                <figcaption class="item-description">
                                    <h5>Touch and Swipe</h5>
                                    <span>Technology</span>
                                </figcaption>
                            </figure>
                        </div>
                    </li>

                    <!-- Recent Work Item -->
                    <li class="col-sm-3 col-md-3 col-lg-3">
                        <div class="recent-item">
                            <figure>
                                <div class="touching medium">
                                    <img src="<?php echo get_template_directory_uri(); ?>/templates/images/portfolio/anjoplayschool_g4.png" alt="" />
                                </div>
                                <div class="option">
                                    <a href="<?php echo get_template_directory_uri(); ?>/templates/images/portfolio/anjoplayschool_g4.png" class="hover-zoom mfp-image" ><i class="fa fa-search"></i></a>
                                    <a href="portfolio_single.html" class="hover-link"><i class="fa fa-link"></i></a>
                                </div>
                                <figcaption class="item-description">
                                    <h5>Touch and Swipe</h5>
                                    <span>Technology</span>
                                </figcaption>
                            </figure>
                        </div>
                    </li>

                    <!-- Recent Work Item -->
                    <li class="col-sm-3 col-md-3 col-lg-3">
                        <div class="recent-item">
                            <figure>
                                <div class="touching medium">
                                    <img src="<?php echo get_template_directory_uri(); ?>/templates/images/portfolio/anjoplayschool_g5.png" alt="" />
                                </div>
                                <div class="option">
                                    <a href="<?php echo get_template_directory_uri(); ?>/templates/images/portfolio/anjoplayschool_g5.png" class="hover-zoom mfp-image" ><i class="fa fa-search"></i></a>
                                    <a href="portfolio_single.html" class="hover-link"><i class="fa fa-link"></i></a>
                                </div>
                                <figcaption class="item-description">
                                    <h5>Touch and Swipe</h5>
                                    <span>Technology</span>
                                </figcaption>
                            </figure>
                        </div>
                    </li>

                    <!-- Recent Work Item -->
                    <li class="col-sm-3 col-md-3 col-lg-3">
                        <div class="recent-item">
                            <figure>
                                <div class="touching medium">
                                    <img src="<?php echo get_template_directory_uri(); ?>/templates/images/portfolio/anjoplayschool_g7.png" alt="" />
                                </div>
                                <div class="option">
                                    <a href="<?php echo get_template_directory_uri(); ?>/templates/images/portfolio/anjoplayschool_g7.png" class="hover-zoom mfp-image" ><i class="fa fa-search"></i></a>
                                    <a href="portfolio_single.html" class="hover-link"><i class="fa fa-link"></i></a>
                                </div>
                                <figcaption class="item-description">
                                    <h5>Touch and Swipe</h5>
                                    <span>Technology</span>
                                </figcaption>
                            </figure>
                        </div>
                    </li>

                    <!-- Recent Work Item -->
                    <li class="col-sm-3 col-md-3 col-lg-3">
                        <div class="recent-item">
                            <figure>
                                <div class="touching medium">
                                    <img src="<?php echo get_template_directory_uri(); ?>/templates/images/portfolio/anjoplayschool_g6.png" alt="" />
                                </div>
                                <div class="option">
                                    <a href="<?php echo get_template_directory_uri(); ?>/templates/images/portfolio/anjoplayschool_g6.png" class="hover-zoom mfp-image" ><i class="fa fa-search"></i></a>
                                    <a href="portfolio_single.html" class="hover-link"><i class="fa fa-link"></i></a>
                                </div>
                                <figcaption class="item-description">
                                    <h5>Touch and Swipe</h5>
                                    <span>Technology</span>
                                </figcaption>
                            </figure>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--Start recent work-->
	</section>
	<!--end wrapper-->
	<?php get_footer(); ?>
