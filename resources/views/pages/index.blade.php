@extends('layouts.website')

@section('content')
	<!-- main body - start
			================================================== -->
			<main>


				<!-- banner_section - start
				================================================== -->
				<section id="banner_section" class="banner_section agency_banner deco_wrap d-flex align-items-center clearfix">

					<div class="container w-1520">
						<div class="row align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">

							<div class="col-lg-7 col-md-7 col-sm-8 order-last">
								<div class="banner_image scene">
									<div class="big_image">
										<div class="layer" data-depth="0.1">
											<div data-aos="fade-up" data-aos-delay="500">
												<img src="/assets/assets/images/banner/01_agency/img_12.png" alt="image_not_found" data-parallax='{"y" : 30}'>
											</div>
										</div>
									</div>
									<div class="leaf_1">
										<div class="layer" data-depth="0.2">
											<div data-aos="fade-up" data-aos-delay="600">
												<img src="/assets/assets/images/banner/01_agency/shape_6.png" alt="Leaf_Image" data-parallax='{"y" : 50}'>
											</div>
										</div>
									</div>
									<div class="leaf_2">
										<div class="layer" data-depth="0.2">
											<div data-aos="fade-up" data-aos-delay="700">
												<img src="/assets/assets/images/banner/01_agency/shape_7.png" alt="Leaf_Image" data-parallax='{"y" : 60}'>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-lg-5 col-md-6 col-sm-8">
								<div class="banner_content">
									<h1 class="title_text mb-30 text_effect_wrap clearfix">
										<span class="text_effect text_effect_left">We are Experts in Fast, </span>
										<span class="text_effect text_effect_left">Powerful & Secure Web Development</span>
									</h1>
									<p class="mb-50" data-aos="fade-up" data-aos-delay="200">
										We Create Websites and Softwares that reflects your Business needs,										
										We have the Skills, Experience to help your Business get the Perfect Impression. 
									</p>
									<div class="btns_group ul_li" data-aos="fade-up" data-aos-delay="300">
										<ul class="clearfix">
											<li><a href="https://wa.me/+2347064245842" class="btn btn_border border_blue">Get Started</a></li>
										
										</ul>
									</div>
								</div>
							</div>
							
						</div>
					</div>

					<div class="deco_image bg_1" data-aos="fade-left" data-aos-delay="100">
						<img src="/assets/assets/images/banner/01_agency/shape_1.png" alt="spahe_not_found">
						
					</div>
					<div class="deco_image bg_2" data-aos="fade-left" data-aos-delay="200">
						<img src="/assets/assets/images/banner/01_agency/shape_2.png" alt="spahe_not_found">
						
					</div>

					<div class="clouds_wrap scene_1">
						<div class="deco_image cloud_1">
							<div class="layer" data-depth="0.2">
								<div data-aos="fade-up" data-aos-delay="700">
									<img src="/assets/assets/images/banner/01_agency/shape_3.png" alt="spahe_not_found" data-parallax='{"y" : 80}'>
								</div>
							</div>
						</div>
						<div class="deco_image cloud_2">
							<div class="layer" data-depth="0.2">
								<div data-aos="fade-up" data-aos-delay="600">
									<img src="/assets/assets/images/banner/01_agency/shape_4.png" alt="spahe_not_found" data-parallax='{"y" : 50}'>
								</div>
							</div>
						</div>
						<div class="deco_image cloud_3">
							<div class="layer" data-depth="0.1">
								<div data-aos="fade-up" data-aos-delay="800">
									<img src="/assets/assets/images/banner/01_agency/shape_5.png" alt="spahe_not_found" data-parallax='{"y" : 90}'>
								</div>
							</div>
						</div>
					</div>

				</section>
				<!-- banner_section - end
				================================================== -->


				<!-- service_section - start
				================================================== -->
				<section id="service_section" class="service_section sec_ptb_120 pt-0 deco_wrap clearfix">
					<div class="container w-1520">
						<div class="section_title text-center mb-30 c_slide_in">
							{{-- <h3 class="sub_title mb-15">
								<span class="c_slide_in_wrap1">
									<span class="c_slide_in_wrap2">
										<span class="c_slide_in_wrap3">
											We Make it Simple but Significant
										</span>
									</span>
								</span>
							</h3> --}}
							<h2 class="title_text mb-0">
								<span class="c_slide_in_wrap1">
									<span class="c_slide_in_wrap2">
										<span class="c_slide_in_wrap3">
											{{-- Why Choose Roatek Technologies --}}
											We Make it Simple but Significant
										</span>
									</span>
								</span>
							</h2>
						</div>

						<div class="row">
							<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="service_primary_2" data-aos="fade-up" data-aos-delay="300">
									<div class="item_icon icon_blue">
										<i class="icon-setting"></i>
									</div>
									<h3 class="item_title">Strategic Plans</h3>
									<p>
										Detail discussions to clarify your business objectives, Strategic alternative solutions before Implementation which result beyond expectations.
									</p>
									<a href="/about" class="details_btn">Read More <i class="fal fa-long-arrow-right ml-1"></i></a>
								</div>
							</div>

							<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="service_primary_2" data-aos="fade-up" data-aos-delay="500">
									<div class="item_icon icon_orange">
										<i class="icon-tube"></i>
									</div>
									<h3 class="item_title"> Implementation</h3>
									<p>
										We Transform Your Ideas to Products, Focus on building new & innovative products centered around Mobile and Web Applications.
									</p>
									<a href="/about" class="details_btn">Read More <i class="fal fa-long-arrow-right ml-1"></i></a>
								</div>
							</div>

							<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="service_primary_2" data-aos="fade-up" data-aos-delay="700">
									<div class="item_icon icon_green">
										<i class="icon-ring"></i>
									</div>
									<h3 class="item_title">Collaborative</h3>
									<p>
										We Design with Passion & Precision, When you choose Us you are not just hiring or paying a Developer we'll become part of your team.
									</p>
									<a href="/about" class="details_btn">Read More <i class="fal fa-long-arrow-right ml-1"></i></a>
								</div>
							</div>

							<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="service_primary_2" data-aos="fade-up" data-aos-delay="900">
									<div class="item_icon icon_purple">
										<i class="icon-processor"></i>
									</div>
									<h3 class="item_title">Center Software</h3>
									<p>
										Intelligent use of technology gives us success & creation power in the business world, we can build anything beyond your wildest dreams.									</p>
									<a href="/about" class="details_btn">Read More <i class="fal fa-long-arrow-right ml-1"></i></a>
								</div>
							</div>
						</div>
					</div>

					<div class="deco_image dot_image_1" data-aos="fade-up" data-aos-delay="300">
						<img src="/assets/assets/images/shapes/shape_25.png" alt="image_not_found" data-parallax='{"y" : 90}'>
					</div>
				</section>
				<!-- service_section - end
				================================================== -->


				<div class="container" data-aos="fade-up" data-aos-delay="300">
					<hr class="m-0">
				</div>


				<!-- introduction_section - start
				================================================== -->
				<section id="introduction_section" class="introduction_section sec_ptb_120 clearfix">
					<div class="container">

						<div class="section_title text-center mb-80 c_slide_in">
							<h3 class="sub_title mb-15">
								<span class="c_slide_in_wrap1">
									<span class="c_slide_in_wrap2">
										<span class="c_slide_in_wrap3">
											WE ARE A DIGITAL AGENCY 
										</span>
									</span>
								</span>
							</h3>
							<h2 class="title_text mb-0">
								<span class="c_slide_in_wrap1">
									<span class="c_slide_in_wrap2">
										<span class="c_slide_in_wrap3">
											Focused on Web and Softwares
										</span>
									</span>
								</span>
							</h2>
						</div>

						<div class="video_wrap deco_wrap">
							<div class="row justify-content-center">
								<div class="col-lg-9 col-md-9">
									<div  data-aos="fade-up" data-aos-delay="300">
										<img src="/assets/assets/images/services/img_88.png" alt="image_not_found">
										<!-- class="banner_image" <a class="popup_video" href="https://www.youtube.com/watch?v=JOq6Q-YAg4s"><i class="icon-play"></i></a> -->
									</div>
								</div>
							</div>

							<div class="deco_image shadow_image" data-aos="fade-up" data-aos-delay="400">
								<img src="/assets/assets/images/shapes/shape_15.png" alt="image_not_found">
							</div>

							<div class="deco_image dot_image" data-aos="fade-up" data-aos-delay="500">
								<img src="/assets/assets/images/shapes/shape_16.png" alt="image_not_found">
							</div>
							<div class="deco_image leaf_image" data-aos="fade-down" data-aos-delay="600">
								<img src="/assets/assets/images/shapes/img_3.png" alt="image_not_found">
							</div>
							<div class="deco_image man_1" data-aos="fade-left" data-aos-delay="700">
								<img src="/assets/assets/images/shapes/img_42.png" alt="image_not_found">
							</div>
							<div class="deco_image man_2" data-aos="fade-right" data-aos-delay="800">
								<img src="/assets/assets/images/shapes/img_50.png" alt="image_not_found">
							</div>
						</div>
						
					</div>
				</section>
				<!-- introduction_section - end
				================================================== -->
					<!-- service_section - start
				================================================== -->
				<section class="service_section sec_ptb_120 clearfix">
					<div class="container">

						<div class="section_title text-center mb-80 c_slide_in">
							{{-- <h3 class="sub_title mb-15 c_slide_in_wrap1">
								<span class="c_slide_in_wrap2">
									<span class="c_slide_in_wrap3">
										Our Services
									</span>
								</span>
							</h3> --}}
							<h2 class="title_text mb-0 c_slide_in_wrap1">
								<span class="c_slide_in_wrap2">
									<span class="c_slide_in_wrap3">
										Services We Offer
									</span>
								</span>
							</h2>
						</div>

						<div class="tabs_nav ul_li" data-aos="fade-up" data-aos-delay="300">
							<ul class="nav" role="tablist">
								<li>
									<a class="active" href="/services/web_development">
										<span class="icon bg_gradient_blue"><i class="icon-computer"></i></span>
										<strong>Website Development</strong>
									</a>
								</li>
								<li>
									<a href="/services/software_development">
										<span class="icon bg_gradient_red"><i class="fas fa-laptop" style="font-size:24px"></i></span>
										<strong>Software Development</strong>
									</a>
								</li>
								<li>
									<a href="/services/branding">
										<span class="icon bg_gradient_green"><i class="fas fa-swatchbook" style="font-size:28px"></i></span>
										<strong>Corporate Branding</strong>
									</a>
								</li>
								<li>
									<a href="/services/e_commerce">
										<span class="icon bg_gradient_purple"><i class="icon-graph"></i></span>
										<strong>E-commerce Services </strong>
									</a>
								</li>
								<li>
									
									<a href="/services/seo">
										<span class="icon bg_gradient_orange"><i class="icon-marketing"></i></span>
										<strong>SEO Optimization</strong>
									</a>
								</li>
							</ul>
						</div>

						{{-- <div class="tab-content" data-aos="fade-up" data-aos-delay="500">
							<div id="website_tab" class="tab-pane active">
								<div class="service_image_2">
									<div class="image_1">
										<img src="assets/images/services/img_6.png" alt="image_not_found">
									</div>
									<div class="image_2">
										<img src="assets/images/services/img_7.png" alt="image_not_found">
									</div>
								</div>
							</div>

							<div id="mobile_tab" class="tab-pane fade">
								<div class="service_image_2">
									<div class="image_1">
										<img src="assets/images/services/img_6.png" alt="image_not_found">
									</div>
									<div class="image_2">
										<img src="assets/images/services/img_7.png" alt="image_not_found">
									</div>
								</div>
							</div>

							<div id="uiux_tab" class="tab-pane fade">
								<div class="service_image_2">
									<div class="image_1">
										<img src="assets/images/services/img_6.png" alt="image_not_found">
									</div>
									<div class="image_2">
										<img src="assets/images/services/img_7.png" alt="image_not_found">
									</div>
								</div>
							</div>

							<div id="marketing_tab" class="tab-pane fade">
								<div class="service_image_2">
									<div class="image_1">
										<img src="assets/images/services/img_6.png" alt="image_not_found">
									</div>
									<div class="image_2">
										<img src="assets/images/services/img_7.png" alt="image_not_found">
									</div>
								</div>
							</div>

							<div id="cloud_tab" class="tab-pane fade">
								<div class="service_image_2">
									<div class="image_1">
										<img src="assets/images/services/img_6.png" alt="image_not_found">
									</div>
									<div class="image_2">
										<img src="assets/images/services/img_7.png" alt="image_not_found">
									</div>
								</div>
							</div>
						</div> --}}
						
					</div>
				</section>
				<!-- service_section - end
				================================================== -->


				<!-- feature_section - start
				================================================== -->
				<section class="feature_section sec_ptb_120 deco_wrap clearfix">
					<div class="container">

						<div class="feature_item">
							<div class="row align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">
								<div class="col-lg-6 col-md-7 col-sm-8">
									<div class="feature_image" data-aos="fade-up" data-aos-delay="300">
										<img src="/assets/assets/images/features/img_91.png" alt="image_not_found">
									</div>
								</div>

								<div class="col-lg-5 col-md-6 col-sm-8">
									<div class="section_title ml--30">
										<span class="icon icon_yellow mb-30">
											<i class="icon-avatar"></i>
										</span>
										<h2 class="title_text mb-30 c_slide_in">
											<span class="c_slide_in_wrap1">
												<span class="c_slide_in_wrap2">
													<span class="c_slide_in_wrap3">
														Perfect for small, medium  
													</span>
												</span>
											</span> 
											<span class="c_slide_in_wrap1">
												<span class="c_slide_in_wrap2">
													<span class="c_slide_in_wrap3">
														& large business agency
													</span>
												</span>
											</span>
										</h2>
										
									</div>
								</div>
							</div>
						</div>

						<div class="feature_item">
							<div class="row align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">
								<div class="col-lg-6 col-md-7 col-sm-8 order-last">
									<div class="feature_image float-left" data-aos="fade-up" data-aos-delay="300">
										<img src="/assets/assets/images/features/img_10.png" alt="image_not_found">
									</div>
								</div>

								<div class="col-lg-5 col-md-6 col-sm-8">
									<div class="section_title mr--30">
										<span class="icon icon_pink mb-30">
											<i class="icon-lock"></i>
										</span>
										<h2 class="title_text mb-30 c_slide_in">
											<span class="c_slide_in_wrap1">
												<span class="c_slide_in_wrap2">
													<span class="c_slide_in_wrap3">
														With efficiency to unlock
													</span>
												</span>
											</span>
											<span class="c_slide_in_wrap1">
												<span class="c_slide_in_wrap2">
													<span class="c_slide_in_wrap3">
														more opportunities
													</span>
												</span>
											</span>
										</h2>
										
									</div>
								</div>
							</div>
						</div>

					</div>

					<div class="deco_image shape_1" data-aos="fade-up" data-aos-delay="100">
						<img src="/assets/assets/images/shapes/shape_26.png" alt="image_not_found">
					</div>

					<div class="deco_image dot_image_1" data-aos="fade-up" data-aos-delay="300">
						<img src="/assets/assets/images/shapes/shape_25.png" alt="image_not_found" data-parallax='{"y" : 90}'>
					</div>
				</section>
				<!-- feature_section - end
				================================================== -->


				<!-- feature_section - start
				================================================== -->
				<section class="feature_section sec_ptb_120 bg_flow deco_wrap d-flex align-items-center clearfix" data-background="/assets/assets/images/backgrounds/bg_5.png">
					<div class="container">
						<div class="feature_item">
							<div class="row align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">

								<div class="col-lg-6 col-md-7 col-sm-8">
									<div class="feature_image">
										<img src="/assets/assets/images/banner/08_project_management/img_1.png" alt="image_not_found" data-aos="fade-up" data-aos-delay="300">
										<div class="phone_image" data-aos="fade-up" data-aos-delay="400">
											<img src="/assets/assets/images/features/img_2.png" alt="image_not_found">
										</div>
										<div class="watch_image" data-aos="fade-up" data-aos-delay="500">
											<img src="/assets/assets/images/features/img_3.png" alt="image_not_found">
										</div>
									</div>
								</div>

								<div class="col-lg-5 col-md-6 col-sm-7">
									<div class="section_title ml--30 text-white">
										<span class="icon mb-30">
											<i class="ti-package"></i>
										</span>
										<h2 class="title_text mb-30 c_slide_in">
											<span class="c_slide_in_wrap1">
												<span class="c_slide_in_wrap2">
													<span class="c_slide_in_wrap3">
														We love to build awesome
													</span>
												</span>
											</span>
											<span class="c_slide_in_wrap1">
												<span class="c_slide_in_wrap2">
													<span class="c_slide_in_wrap3">
														 Websites and Softwares
													</span>
												</span>
											</span>
										</h2>
										<p class="mb-30" data-aos="fade-up" data-aos-delay="100">
											We are not just a solution provider for your webshop, but a partner that continuously strives to ensure that every need of your digital business is catered and ready for success.										</p>
										<div data-aos="fade-up" data-aos-delay="200">
											<a href="mailto:info@roatek.com.ng" class="btn btn_border border_white">Get Started</a>
										</div>
									</div>
								</div>
								
							</div>
						</div>
					</div>

					<div class="deco_image shape_2" data-parallax='{"y" : 70}'>
						<img src="/assets/assets/images/shapes/shape_27.png" alt="image_not_found" data-aos="fade-up" data-aos-delay="100">
					</div>
				</section>
				<!-- feature_section - end
				================================================== -->


				<!-- testimonial_section - start
				================================================== -->
				<section id="testimonial_section" class="testimonial_section sec_ptb_120 clearfix">
					<div class="container">
						<div class="row align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">

							<div class="col-lg-6 col-md-12">
								<div id="testimonial_carousel_1" class="testimonial_carousel_1 owl-carousel owl-theme" data-aos="fade-up" data-aos-delay="100">
						

									<div class="item text-center text-white">
										<div class="thumbnail_wrap">
											<div class="thumbnail_image">
												<img src="/assets/assets/images/meta/razaq.png" alt="image_not_found">
											</div>
										</div>

										<p>
											" When our own skills did not manage to get where we wanted, Roatek Technologies took care of the rest. The expertize, 
											customer service and "follow up" we experienced from Roateck Technologies were simply and Extremely flawless".
										</p>
										
										<h3 class="hero_name"> Rasaq Toheeb </h3>
										<span class="hero_title">C.E.O One CyberBox</span>
									</div>
									<div class="item text-center text-white">
										<div class="thumbnail_wrap">
											<div class="thumbnail_image">
												<img src="/assets/assets/images/meta/lukman.jpg" alt="image_not_found">
											</div>
										</div>

										<p>
											"We are very happy with Roatek Technologies; very serious and consistent in their work. they have always been there for us all the time.
											 This is a company I recommend to anyone to perform web development and Software development related works."
										</p>

										<h3 class="hero_name">Akinwande Lukmon</h3>
										<span class="hero_title">CEO Lukenor Couture</span>
									</div>

									<div class="item text-center text-white">
										<div class="thumbnail_wrap">
											<div class="thumbnail_image">
												<img src="/assets/assets/images/meta/yaqub.jpg" alt="image_not_found">
											</div>
										</div>

										<p>
											"We value our relationship with Roatek Technologies.They have proven to be capable and partner in
											numerous development projects, their ability to create good ideas give us the confidence. they’ll 
											 handle any new business opportunities."
										</p>

										<h3 class="hero_name">Raheem Yaqub</h3>
										<span class="hero_title">CEO Boldlinks Academy</span>
									</div>

								</div>
							</div>

							<div class="col-lg-5 col-md-5 col-sm-8" data-aos="fade-up" data-aos-delay="300">
								<div class="section_title increase_size">
									<h3 class="sub_title mb-15">Testimonials</h3>
									<h2 class="title_text mb-30">
										Check what our satisfied clients said.
									</h2>
									<!-- <p class="mb-0">
										Why I say old chap that is, spiffing off his nut color blimey and guvnords geeza bloke knees up bobby sloshed arse 
									</p> -->
								</div>
							</div>

						</div>
					</div>
				</section>
				<!-- testimonial_section - end
				================================================== -->

				<div class="container" data-aos="fade-up" data-aos-delay="300">
					<hr class="m-0">
				</div>


				<!-- partner_section - start
				================================================== -->
				<section id="partner_section" class="partner_section text-center sec_ptb_120 deco_wrap clearfix">
					<div class="container">
						

						<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="300">
						

							<div class="partner_logo col-lg-2">
								<a href="#!">
									<img src="/assets/assets/images/partners/google-developer-for-roatek-technologies.png" alt="google developer">
								</a>
							</div>

							

							<div class="partner_logo col-lg-2">
								<a href="#!">
									<img src="/assets/assets/images/partners/transmission-holding-for-foatek-technologies1.png" alt="transmission">
								</a>
							</div>

							
							<div class="partner_logo col-lg-2">
								<a href="#!">
									<img src="/assets/assets/images/partners/riby-for-foatek-technologies.png" alt="riby">
								</a>
							</div>

							<div class="partner_logo col-lg-2">
								<a href="#!">
									<img src="/assets/assets/images/partners/academy.png" alt="boldlinks academy">
								</a>
							</div>

							<div class="partner_logo col-lg-2">
								<a href="#!">
									<img src="/assets/assets/images/partners/symbi-for-roatek-technologies.png" alt="symbi">
								</a>
							</div>
						</div>
					</div>

						<div class="deco_image shape_1" data-aos="fade-right" data-aos-delay="100">
							<img src="/assets/assets/images/shapes/shape_32.png" alt="image_not_found">
						</div>
				</section>
				<!-- partner_section - end
				================================================== -->


				<!-- newsletter_section - start
				================================================== -->
				<section id="newsletter_section" class="newsletter_section bg_gradient_blue_2 text-white sec_ptb_60 clearfix">
					<div class="container">
						<div class="row align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">

							<div class="col-lg-9 col-md-7 col-sm-9">
								<div class="section_title decrease_size">
									<h2 class="title_text mb-15">Got a Project or Partnership in Mind? </h2>
									
								</div>
							</div>

							{{-- <div class="col-lg-4 col-md-6 col-sm-8">
								<form action="#!" method="post" enctype="multipart/form-data">
									{{ csrf_field() }}
									<div class="form_item mb-0">
										<input class="text-left" type="name" name="name" placeholder="Your Fullname" required>
									</div>
									<div class="form_item mb-0">
										<input class="text-left" type="email" name="email" placeholder="Your Email" required>
									</div>
									<div class="form_item mb-0">
										<input class="text-left" type="number" name="phone" placeholder="Your Phone Number" required>
									</div>
									<div class="form_item mb-0">
										<input class="text-left" type="text" name="comment" placeholder="Write Your Message"required>
									</div>
								</form>
							</div> --}}
							
							<div class="col-lg-3 col-md-12">
								<button type="submit" class="btn btn_border border_white float-right"><a style="color: white" href="mailto:info@roatek.com.ng">Get Started</a></button>
							</div>

						</div>
					</div>
				</section>
				<!-- newsletter_section - end
				================================================== -->


			</main>
			<!-- main body - end
			================================================== -->
         
@endsection