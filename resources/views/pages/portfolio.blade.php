@extends('layouts.website2')
@section('content')
    <!-- main body - start
			================================================== -->
			<main>


				<!-- banner_section - start
				================================================== -->
				<section id="banner_section" class="banner_section software_banner deco_wrap d-flex align-items-center text-white clearfix">
					<div class="container">
						<div class="row align-items-center justify-content-lg-between">
                            <div class="col-lg-7">
								<div class="banner_content c_slide_in">
									<h1 class="title_text mb-30 text_effect_wrap text_effect_wrap">
										<span class="text_effect text_effect_left">
											We Have Develop 
										</span>
										<span class="text_effect text_effect_left">
											Creative Solutions 
										</span>
									</h1>
									
									<div class="btns_group ul_li" data-aos="fade-up" data-aos-delay="300">
										<ul class="d-flex align-items-center clearfix">
											<li><a href="/service" class="btn_text">Find out more <i class="fal fa-long-arrow-right ml-1"></i></a></li>
										</ul>
									</div>
								</div>
                            </div>
                          <br> <br>
							<div class="col-lg-5 order-last">
								<div class="banner_image scene">
									<div class="big_image">
										<div class="layer" data-depth="0.2">
											<div data-aos="fade-up" data-aos-delay="300">
												<img src="/assets/assets/images/banner/10_software/img_11.png" alt="image_not_found">
											</div>
										</div>
									</div>
									
									<div class="child_image_2">
										<div class="layer" data-depth="0.4">
											<div data-aos="fade-up" data-aos-delay="700">
												<img src="/assets/assets/images/banner/10_software/img_3.png" alt="image_not_found">
											</div>
										</div>
									</div>
								</div>
							</div>

							

						</div>
					</div>

					<div class="deco_image bg_shape_1" data-background="/assets/assets/images/banner/10_software/bg_1.png"></div>
					<div class="deco_image bg_shape_2" data-background="/assets/assets/images/banner/10_software/bg_2.png"></div>
					<div class="deco_image bg_shape_3" data-background="/assets/assets/images/banner/10_software/bg_3.png" data-aos="zoom-out" data-aos-delay="100"></div>

					<div class="deco_image shape_1" data-aos="fade-left" data-aos-delay="500">
						<img src="/assets/assets/images/banner/10_software/shape_1.png" alt="shape_not_found">
					</div>
					<div class="deco_image shape_2" data-aos="fade-right" data-aos-delay="700">
						<img src="/assets/assets/images/banner/10_software/shape_2.png" alt="shape_not_found">
					</div>

					<div class="deco_image cloud_1" data-aos="fade-up" data-aos-delay="500">
						<img src="/assets/assets/images/banner/10_software/cloud_1.png" alt="shape_not_found">
					</div>
					<div class="deco_image cloud_2" data-aos="fade-up" data-aos-delay="700">
						<img src="/assets/assets/images/banner/10_software/cloud_1.png" alt="shape_not_found">
					</div>
				</section>
				<!-- banner_section - end
				================================================== -->
              
                <div class="section_title text-center mb-30 c_slide_in">
                   
                    <h2 class="title_text mb-0 c_slide_in_wrap1">
                        <span class="c_slide_in_wrap2">
                            <span class="c_slide_in_wrap3">
                                Our Portfolio
                            </span>
                        </span>
                    </h2>
                </div>

			
                    <!-- portfolio_section - start
				================================================== -->
				<section id="portfolio_section" class="portfolio_section sec_ptb_120 clearfix">
					<div class="container">

						<div class="button-group filter-btns-group ul_li_center mb-50" data-aos="fade-up" data-aos-delay="200">
							<ul class="clearfix">
								<li><button class="active" data-filter="*">All Projects</button></li>
								<li><button data-filter=".design">Design</button></li>
								<li><button data-filter=".marketing">Web App</button></li>
								<li><button data-filter=".development">Development</button></li>
								<li><button data-filter=".branding">Branding</button></li>
							</ul>
						</div>

						<div class="zoom-gallery element_grid masonry_portfolio column_2">
							<div class="element-item design branding " data-category="design">
								<div class="casestudy_fullimage" data-aos="fade-up" data-aos-delay="300">
									<a href="/assets/assets/images/portfolio/masonry/2_columns/img_1.jpg" class="details_btn popup_image"><i class="ti-plus"></i></a>
									<a href="#!" class="item_image">
										<img src="/assets/assets/images/portfolio/masonry/2_columns/img_1.jpg" alt="image_not_found">
									</a>
									<div class="item_content">
										<h3 class="item_title mb-0"><a href="#!">ETS Global</a></h3>
										<div class="item_category">
											<a href="#!">Design</a>
										</div>
									</div>
								</div>
							</div>

							<div class="element-item marketing design " data-category="marketing">
								<div class="casestudy_fullimage" data-aos="fade-up" data-aos-delay="500">
									<a href="/assets/assets/images/portfolio/masonry/2_columns/img_2.jpg" class="details_btn popup_image"><i class="ti-plus"></i></a>
									<a href="#!" class="item_image">
										<img src="/assets/assets/images/portfolio/masonry/2_columns/img_2.jpg" alt="image_not_found">
									</a>
									<div class="item_content">
										<h3 class="item_title mb-0"><a href="#!">Agro ng</a></h3>
										<div class="item_category">
											<a href="#!">Development</a>
										</div>
									</div>
								</div>
							</div>

							<div class="element-item development marketing " data-category="development">
								<div class="casestudy_fullimage" data-aos="fade-up" data-aos-delay="300">
									<a href="/assets/assets/images/portfolio/masonry/2_columns/img_3.png" class="details_btn popup_image"><i class="ti-plus"></i></a>
									<a href="#!" class="item_image">
										<img src="/assets/assets/images/portfolio/masonry/2_columns/img_3.png" alt="image_not_found">
									</a>
									<div class="item_content">
										<h3 class="item_title mb-0"><a href="#!">LMC</a></h3>
										<div class="item_category">
											<a href="#!">Web Design</a>
										</div>
									</div>
								</div>
							</div>

							<div class="element-item branding development " data-category="branding">
								<div class="casestudy_fullimage" data-aos="fade-up" data-aos-delay="500">
									<a href="/assets/assets/images/portfolio/masonry/2_columns/img_4.jpg" class="details_btn popup_image"><i class="ti-plus"></i></a>
									<a href="#!" class="item_image">
										<img src="/assets/assets/images/portfolio/masonry/2_columns/img_4.jpg" alt="image_not_found">
									</a>
									<div class="item_content">
										<h3 class="item_title mb-0"><a href="#!"> CiTyMotors</a></h3>
										<div class="item_category">
											<a href="#!">Web App</a>
										</div>
									</div>
								</div>
							</div>

							<div class="element-item design branding " data-category="design">
								<div class="casestudy_fullimage" data-aos="fade-up" data-aos-delay="300">
									<a href="/assets/assets/images/portfolio/masonry/2_columns/img_5.jpg" class="details_btn popup_image"><i class="ti-plus"></i></a>
									<a href="#!" class="item_image">
										<img src="/assets/assets/images/portfolio/masonry/2_columns/img_5.jpg" alt="image_not_found">
									</a>
									<div class="item_content">
										<h3 class="item_title mb-0"><a href="#!">ETS Global</a></h3>
										<div class="item_category">
											<a href="#!">Development</a>
										</div>
									</div>
								</div>
							</div>

							<div class="element-item marketing design " data-category="marketing">
								<div class="casestudy_fullimage" data-aos="fade-up" data-aos-delay="500">
									<a href="/assets/assets/images/portfolio/masonry/2_columns/img_6.jpg" class="details_btn popup_image"><i class="ti-plus"></i></a>
									<a href="#!" class="item_image">
										<img src="/assets/assets/images/portfolio/masonry/2_columns/img_6.jpg" alt="image_not_found">
									</a>
									<div class="item_content">
										<h3 class="item_title mb-0"><a href="#!">Boldlinks Seminar</a></h3>
										<div class="item_category">
											<a href="#!">Design</a>
										</div>
									</div>
								</div>
							</div>

							<div class="element-item development branding " data-category="development">
								<div class="casestudy_fullimage" data-aos="fade-up" data-aos-delay="300">
									<a href="/assets/assets/images/portfolio/masonry/2_columns/img_7.jpg" class="details_btn popup_image"><i class="ti-plus"></i></a>
									<a href="#!" class="item_image">
										<img src="/assets/assets/images/portfolio/masonry/2_columns/img_7.jpg" alt="image_not_found">
									</a>
									<div class="item_content">
										<h3 class="item_title mb-0"><a href="#!">Boldlinks Tech</a></h3>
										<div class="item_category">
											<a href="#!">Design</a>
										</div>
									</div>
								</div>
							</div>

							<div class="element-item branding development " data-category="branding">
								<div class="casestudy_fullimage" data-aos="fade-up" data-aos-delay="500">
									<a href="/assets/assets/images/portfolio/masonry/2_columns/img_81.png" class="details_btn popup_image"><i class="ti-plus"></i></a>
									<a href="#!" class="item_image">
										<img src="/assets/assets/images/portfolio/masonry/2_columns/img_81.png" alt="image_not_found">
									</a>
									<div class="item_content">
										<h3 class="item_title mb-0"><a href="#!">Boldlinks Academy</a></h3>
										<div class="item_category">
											<a href="#!">Design</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</section>
				<!-- portfolio_section - end
				================================================== -->


				<!-- feature_section - start
				================================================== -->
				<section id="feature_section" class="feature_section sec_ptb_120 deco_wrap clearfix">
					<div class="container">
                        <div class="feature_item">
							<div class="row align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">

								<div class="tab-content position-relative col-lg-4 col-md-7 col-sm-9 order-last">
									<div id="tab_one" class="feature_image_3 active scene">
										<div class="big_image">
											<div class="layer" data-depth="0.2">
												<div data-aos="fade-up" data-aos-delay="100">
													<img src="/assets/assets/images/features/img_7.png" alt="image_not_found" data-parallax='{"y" : 30}'>
												</div>
											</div>
										</div>
										<div class="image_2">
											<div class="layer" data-depth="0.3">
												<div data-aos="fade-up" data-aos-delay="200">
													<img src="/assets/assets/images/features/img_37.png" alt="image_not_found" data-parallax='{"y" : 50}'>
												</div>
											</div>
										</div>
									</div>

									<div id="tab_two" class="feature_image_3 scene_2">
										<div class="big_image">
											<div class="layer" data-depth="0.2">
												<div data-aos="fade-up" data-aos-delay="100">
													<img src="/assets/assets/images/features/img_7.png" alt="image_not_found" data-parallax='{"y" : 30}'>
												</div>
											</div>
										</div>
										<div class="image_1">
											<div class="layer" data-depth="0.3">
												<div data-aos="fade-up" data-aos-delay="200">
													<img src="/assets/assets/images/features/img_38.png" alt="image_not_found" data-parallax='{"y" : 50}'>
												</div>
											</div>
										</div>
									</div>

									<div id="tab_three" class="feature_image_3 scene_3">
										<div class="big_image">
											<div class="layer" data-depth="0.2">
												<div data-aos="fade-up" data-aos-delay="100">
													<img src="/assets/assets/images/features/img_7.png" alt="image_not_found" data-parallax='{"y" : 30}'>
												</div>
											</div>
										</div>
										<div class="image_1">
											<div class="layer" data-depth="0.3">
												<div data-aos="fade-up" data-aos-delay="200">
													<img src="/assets/assets/images/features/img_8.png" alt="image_not_found" data-parallax='{"y" : 50}'>
												</div>
											</div>
										</div>
									</div>

									<div id="tab_four" class="feature_image_3 scene_4">
										<div class="big_image">
											<div class="layer" data-depth="0.2">
												<div data-aos="fade-up" data-aos-delay="100">
													<img src="/assets/assets/images/features/img_39.png" alt="image_not_found" data-parallax='{"y" : 30}'>
												</div>
											</div>
										</div>
										<div class="image_3">
											<div class="layer" data-depth="0.3">
												<div data-aos="fade-up" data-aos-delay="200">
													<img src="/assets/assets/images/features/img_40.png" alt="image_not_found" data-parallax='{"y" : 50}'>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-lg-5 col-md-7 col-sm-9">
									<div class="section_title increase_size mr--30 c_slide_in">
										<h2 class="title_text mb-30 text_effect_wrap c_slide_in_wrap1">
											<span class="c_slide_in_wrap2">
												<span class="c_slide_in_wrap3">
													Your design process is one place to complete
												</span>
											</span>
										</h2>
										

										<div data-aos="fade-up" data-aos-delay="500">
											<a href="https://wa.me/+2347064245842" class="btn bg_default_blue">Start Your Project </a>
										</div>
									</div>
								</div>
								
							</div>
						</div>
						
					</div>
				</section>
				<!-- feature_section - end
				================================================== -->


				<!-- testimonial_section - start
				================================================== -->
				<section id="testimonial_section" class="testimonial_section sec_ptb_120 pt-0 clearfix">
					<div class="bg_area bg_gradient_blue sec_ptb_120 pb-0 clearfix">
						<div class="container">
							<div class="section_title increase_size text-white mb-80">
								<h2 class="title_text mb-0 c_slide_in">
									<span class="c_slide_in_wrap1">
										<span class="c_slide_in_wrap2">
											<span class="c_slide_in_wrap3">Love from our clients</span>
										</span>
									</span>
								</h2>
							</div>

							<div id="testimonial_carousel_2" class="testimonial_carousel_2 owl-carousel arrow_top_right owl-theme" data-aos="fade-up" data-aos-delay="300">
								<div class="item">
									<div class="testimonial_item" data-background="/assets/assets/images/shapes/shape_20.png">
										<div class="admin_wrap mb-30 clearfix">
											<div class="rating_star ul_li_right">
												<ul class="clearfix">
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
												</ul>
											</div>
											<div class="thumbnail_image">
												<img src="/assets/assets/images/meta/razaq.png" alt="image_not_found">
											</div>
											<div class="admin_content">
												<h3 class="admin_name">Rasaq Toheeb</h3>
												<span class="admin_title">C.E.O One CyberBox</span>
											</div>
										</div>
										<p class="mb-0">
											" When our own skills did not manage to get where we wanted, Roatek Technologies took care of the rest. The expertize, 
											customer service and "follow up" we experienced from Roateck Technologies were simply and Extremely flawless".										</p>
									</div>
								</div>

								<div class="item">
									<div class="testimonial_item" data-background="/assets/assets/images/shapes/shape_20.png">
										<div class="admin_wrap mb-30 clearfix">
											<div class="rating_star ul_li_right">
												<ul class="clearfix">
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
												</ul>
											</div>
											<div class="thumbnail_image">
												<img src="/assets/assets/images/meta/yaqub.jpg" alt="image_not_found">
											</div>
											<div class="admin_content">
												<h3 class="admin_name">Raheem Yaqub</h3>
												<span class="admin_title">CEO Boldlinks Academy</span>
											</div>
										</div>
										<p class="mb-0">
											"We value our relationship with Roatek Technologies.They have proven to be capable and partner in
											numerous development projects, their ability create good ideas gives us the confidence they’ll be able to
											 handle any new business opportunity."										</p>
									</div>
								</div>
								<div class="item">
									<div class="testimonial_item" data-background="/assets/assets/images/shapes/shape_20.png">
										<div class="admin_wrap mb-30 clearfix">
											<div class="rating_star ul_li_right">
												<ul class="clearfix">
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
												</ul>
											</div>
											<div class="thumbnail_image">
												<img src="/assets/assets/images/meta/lukman.jpg" alt="image_not_found">
											</div>
											<div class="admin_content">
												<h3 class="admin_name">Akinwande Lukmon</h3>
												<span class="admin_title">CEO Lukenor Couture</span>
											</div>
										</div>
										<p class="mb-0">
											"We are very happy with Roatek Technologies; very serious and consistent in their work. they have always been there for us all the time. This is a company I recommend to anyone to perform web development and Software develoment related works.".
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- testimonial_section - end
				================================================== -->


				<!-- service_section - start
				================================================== -->
				<section class="service_section sec_ptb_120 pb-0 clearfix">
					<div class="container">

						<div class="section_title text-center mb-80 c_slide_in">
							<!-- <h3 class="sub_title mb-15 c_slide_in_wrap1">
								<span class="c_slide_in_wrap2">
									<span class="c_slide_in_wrap3">
										Our Services
									</span>
								</span>
							</h3> -->
							&nbsp;
							<h2 class="title_text mb-0 c_slide_in_wrap1">
								<span class="c_slide_in_wrap2">
									<span class="c_slide_in_wrap3">
										Our Technologies
									</span>
								</span>
							</h2>
						</div>

						<div class="tabs_nav ul_li" data-aos="fade-up" data-aos-delay="300">
							<ul class="nav" role="tablist">
								<li>
									<a class="active" data-toggle="tab" href="#website_tab">
										<span class="icon_image">
											<img src="/assets/assets/images/icons/javascript.png" alt="icon_not_found">
										</span>
										<strong>Java Script</strong>
									</a>
								</li>
								<li>
									<a data-toggle="tab" href="#mobile_tab">
										<span class="icon_image">
											<img src="/assets/assets/images/icons/html5.png" alt="icon_not_found">
										</span>
										<strong>HTML5</strong>
									</a>
								</li>
								<li>
									<a data-toggle="tab" href="#uiux_tab">
										<span class="icon_image">
											<img src="/assets/assets/images/icons/php.png" alt="icon_not_found">
										</span>
										<strong>PHP</strong>
									</a>
								</li>
								<li>
									<a data-toggle="tab" href="#marketing_tab">
										<span class="icon_image">
											<img src="/assets/assets/images/icons/laravel.png" alt="icon_not_found">
										</span>
										<strong>Laravel</strong>
									</a>
								</li>
								<li>
									<a data-toggle="tab" href="#cloud_tab">
										<span class="icon_image">
											<img src="/assets/assets/images/icons/mysql.png" alt="icon_not_found">
										</span>
										<strong>Mysql</strong>
									</a>
								</li>
							</ul>
						</div>

					
						
					</div>
				</section>
				&nbsp;
				<!-- service_section - end
				================================================== -->


				


			</main>
			<!-- main body - end
			================================================== -->


@endsection