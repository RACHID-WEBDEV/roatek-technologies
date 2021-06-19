@extends('layouts.website')
@section('content')
 	<!-- main body - start
			================================================== -->
			<main>


		

        {{-- <section id="banner_section" class="banner_section project_management_banner bg_gray d-flex align-items-end text-center clearfix"data-background="/assets/assets/images/banner/08_project_management/bg_1.png" > --}}
         
          <section id="breadcrumb_section" class="breadcrumb_section bg_gradient_blue deco_wrap d-flex align-items-center text-white clearfix">
					<div class="container">
						<div class="breadcrumb_content text-center" data-aos="fade-up" data-aos-delay="100">
							<h1 class="page_title">Contact Us</h1>
							<h4 style="color: white;">
								We Create beautiful projects that reflects your business needs. 							  </h4>
							{{-- <p class="mb-0">
								We are here to Create beautiful projects that reflects your business needs. 
							</p> --}}
						</div>
					</div>

					<div class="deco_image spahe_1" data-aos="fade-down" data-aos-delay="300">
						<img src="/assets/assets/images/shapes/shape_1.png" alt="spahe_not_found">
					</div>
					<div class="deco_image spahe_2" data-aos="fade-up" data-aos-delay="500">
						<img src="/assets/assets/images/shapes/shape_2.png" alt="spahe_not_found">
					</div>
				</section>
				<!-- breadcrumb_section - end
				================================================== -->


				<!-- contact_section - start
				================================================== -->
				<section id="contact_section" class="contact_section sec_ptb_120 clearfix">
					<div class="container">
						<div class="row justify-content-lg-between justify-content-md-center justify-content-sm-center">

							<div class="col-lg-3 col-md-8 col-sm-10">
								<div class="contact_info ul_li_block" data-aos="fade-up" data-aos-delay="300">
									<h3 class="list_title">Office Address</h3>
									<ul class="clearfix">
										<li>32, Alh Taofeek Adekola Cresent Abule-Egba Lagos, Nigeria.</li>
										
									</ul>
								</div>

								<div class="contact_info ul_li_block" data-aos="fade-up" data-aos-delay="400">
									<h3 class="list_title">Contact Info</h3>
									<ul class="clearfix">
										<li> <a href="tel:07064245842"> <span>Phone:</span> (+234) 706 424 5842</li></a>
										<li> <a href="mailto:info@roatek.com.ng"> <span>Email:</span> info@roatek.com.ng</li></a>
									</ul>
								</div>
							</div>

							<div class="col-lg-8 col-md-8 col-sm-10">
								<div class="contact_form" data-aos="fade-up" data-aos-delay="500">
									<form action="{{url('contactadd')}}" method="post" enctype="multipart/form-data">
										{{ csrf_field() }}

										<div class="row">
											<div class="col-lg-6">
												<div class="form_item">
													<input type="text" name="name" placeholder="Your Name" required>
												</div>
											</div>

											<div class="col-lg-6">
												<div class="form_item">
													<input type="email" name="email" placeholder="Your Email" required>
												</div>
											</div>
										</div>

										<div class="form_item">
											<input type="number" name="phone" placeholder="Your Phone Number" required>
										</div>

										<div class="form_item">
											<textarea name="comment" placeholder="Enter Your Message..." required></textarea>
										</div>

										<button type="submit" class="btn bg_default_blue">Send Message</button>

									</form>
								</div>
							</div>
							
						</div>
					</div>
				</section>
				<!-- contact_section - end
				================================================== -->


				<!-- map_section - start
				================================================== -->
				{{-- <div id="map_section" class="map_section clearfix">
					<div id="google-map" class="google-map">
						<div id="googleMaps"></div>
					</div>
				</div> --}}
				<!-- map_section - end
				================================================== -->


			</main>
			<!-- main body - end
			================================================== -->

@endsection