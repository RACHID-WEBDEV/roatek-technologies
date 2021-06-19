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
                            <h1 class="page_title">Sign In Page</h1>
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


				<!-- Login_section - start
				================================================== -->
				<section id="register_section" class="register_section sec_ptb_120 bg_gray half_bg_white clearfix">
					<div class="container">
						<div class="row align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">

							<div class="col-lg-6 col-md-7 order-last">
								<div class="signin_image" data-aos="fade-up" data-aos-delay="300">
									<img src="{{asset('/assets/assets/images/register/img_1.png')}}" alt="image_not_found">
								</div>
							</div>

							<div class="col-lg-6 col-md-7 col-sm-8">
								<div class="section_title increase_size mb-80" data-aos="fade-up" data-aos-delay="400">
									<p class="mb-0">
										Welcome!
                                    </p>
                                    <h2 class="title_text mb-30">Sign in</h2>

								</div>

								<div class="reg_form signin_form" data-aos="fade-up" data-aos-delay="500">

                                    <x-jet-validation-errors class="mb-4" />

                                        @if (session('status'))
                                            <div class="mb-4 font-medium text-sm text-green-600">
                                                {{ session('status') }}
                                            </div>
                                        @endif

                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf

										<div class="form_item">
											<h4 class="input_title">Email</h4>
											<input type="email" name="email" :value="old('email')" required autofocusname="username" placeholder="Email">
										</div>

										<div class="form_item">
											<h4 class="input_title">Password</h4>
											<input  type="password" name="password" required autocomplete="current-password"  placeholder="**********">
										</div>

										<div class="row mb-50">
											<div class="col-6">
												<div class="check_box">
													<input id="remember_btn" type="checkbox">
													<label for="remember_btn">Keep me signed in</label>
												</div>
											</div>

											<div class="col-6">
                                                @if (Route::has('password.request'))
                                                {{-- <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                                    {{ __('Forgot your password?') }}
                                                </a> --}}
                                                <a href="{{ route('password.request') }}" class="forget_btn">Forgot Password?</a>
                                            @endif  
												
											</div>
										</div>

										<button type="submit" class="btn bg_default_blue mb-30">Sign In</button>

										<p class="mb-0 text-center">
											New User? <a href="{{ route('register') }}"><u>Sign up here</u></a>
										</p>

									</form>
								</div>
							</div>

						</div>
					</div>
				</section>
				<!-- Login_section - end
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

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Login') }}
                </x-jet-button>

               
            </div>
            <div class="flex items-center justify-end mt-4">
                 <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">
                    {{ __('Haven"t registered?') }}
                </a>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}
