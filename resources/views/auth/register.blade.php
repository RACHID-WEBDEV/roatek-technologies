@extends('layouts.website')
@section('content')
 <!-- main body - start
			================================================== -->
			<main>


				<!-- breadcrumb_section - start
				================================================== -->
				<section id="breadcrumb_section" class="breadcrumb_section bg_gradient_blue deco_wrap d-flex align-items-center text-white clearfix">
					<div class="container">
						<div class="breadcrumb_content text-center" data-aos="fade-up" data-aos-delay="100">
							<h1 class="page_title">Sign Up Page</h1>
							<h4 style="color: white;">
                                We are a full-service digital agency with global capabilities across web design and development.							</p>
                            </h4>
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


				<!-- register_section - start
				================================================== -->
				{{-- <section id="register_section" class="register_section sec_ptb_120 bg_gray half_bg_white clearfix">
					<div class="container">

						<div class="signup_wrap" data-aos="fade-up" data-aos-delay="300">
							<div class="row">
								<div class="col-lg-5 col-md-5">
									<div class="info_wrap">
                                        <h4 >Already have an account? <a  href="{{ route('login') }}"><u>Sign in here</u></a></h4>
                                       
										<h3>
											Login now and enjoy using our <strong>awesome</strong> Services
										</h3>
										<div class="info_list ul_li_block mb-50">
											<ul class="clearfix">
												<li>Premium Access to all Products</li>
												<li>Free Testing Tools</li>
												<li>Unlimited User Accounts</li>
											</ul>
                                        </div>
                                        
										
									</div>
								</div>

								<div class="col-lg-7 col-md-7">
									<div class="reg_form signup_form">
                                        <h2 class="title_text">Sign up</h2>
                                        
                                        <x-jet-validation-errors class="mb-4" />

                                        <form method="POST" action="{{ route('register') }}">
                                            @csrf
											<div class="form_item">
												<h4 class="input_title">Name</h4>
												<input type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Ronald">
											</div>

											<div class="form_item">
												<h4 class="input_title">Email Address</h4>
												<input  type="email" name="email" :value="old('email')" required placeholder="info@roatek.com.ng">
											</div>

											<div class="form_item">
												<h4 class="input_title">Password</h4>
												<input type="password" name="password" required autocomplete="new-password" placeholder="**********">
                                            </div>
                                            <div class="form_item">
												<h4 class="input_title">Password</h4>
												<input type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
											</div>

											<div class="check_box mb-50">
												<input id="remember_btn" type="checkbox">
												<label for="remember_btn">I agree to terms and conditions of this website</label>
											</div>

											<button type="submit" class="btn bg_default_blue">Sign Up</button>
										</form>
									</div>
								</div>
							</div>
						</div>

					</div>
				</section> --}}
				<!-- register_section - end
				================================================== -->

                <!-- Login_section - start
				================================================== -->
				<section id="register_section" class="register_section sec_ptb_120 bg_gray half_bg_white clearfix">
					<div class="container">
						<div class="row align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">

							<div class="col-lg-6 col-md-7 order-last">
								<div class="signin_image" data-aos="fade-up" data-aos-delay="300">
									<img src="/assets/assets/images/register/img_1.png" alt="image_not_found">
								</div>
							</div>

							<div class="col-lg-6 col-md-7 col-sm-8">
								<div class="section_title increase_size mb-80" data-aos="fade-up" data-aos-delay="400">
									<p class="mb-0">
										Welcome!
                                    </p>
                                    <h2 class="title_text mb-30">Sign Up</h2>

								</div>

								<div class="reg_form signin_form" data-aos="fade-up" data-aos-delay="500">

                                    <x-jet-validation-errors class="mb-4" />

                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="form_item">
                                            <h4 class="input_title">Name</h4>
                                            <input type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Ronald">
                                        </div>

                                        <div class="form_item">
                                            <h4 class="input_title">Email Address</h4>
                                            <input  type="email" name="email" :value="old('email')" required placeholder="info@roatek.com.ng">
                                        </div>

                                        <div class="form_item">
                                            <h4 class="input_title">Password</h4>
                                            <input type="password" name="password" required autocomplete="new-password" placeholder="**********">
                                        </div>
                                        <div class="form_item">
                                            <h4 class="input_title">Password</h4>
                                            <input type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                                        </div>

                                        <div class="check_box mb-50">
                                            <input id="remember_btn" type="checkbox">
                                            <label for="remember_btn">I agree to terms and conditions of this website</label>
                                        </div>

                                        <button type="submit" class="btn bg_default_blue">Sign Up</button>

                                        {{-- <p class="mb-0 text-center">
											New User? <a href="{{ route('register') }}"><u>Sign up here</u></a>
                                        </p> --}}
                                        &nbsp;
                                        <h4 >Already have an account? <a  href="{{ route('login') }}"><u>Sign in here</u></a></h4>

                                    </form>

										
								
								</div>
							</div>

						</div>
					</div>
				</section>
				<!-- register_section - end
				================================================== -->
			</main>
			<!-- main body - end
			================================================== -->
   
@endsection
{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}
