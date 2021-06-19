@extends('layouts.website')
@section('content')
	<!-- main body - start
			================================================== -->
			<main>


				<!-- breadcrumb_section - start
				================================================== -->
				<section id="breadcrumb_section" class="breadcrumb_section bg_gradient_blue deco_wrap d-flex align-items-center text-white clearfix">
					<div class="container">
						<div class="breadcrumb_content text-center decrease_size" data-aos="fade-up" data-aos-delay="100">
							<p class="mb-30">
								Post Details
              </p>
              
							<h1 class="page_title mb-30"> {{$post->title}}</h1>
							<div class="breadcrumb_nav ul_li_center">
								<ul class="clearfix">
                  					<li><a href="/blog">Back to Blog</a></li>
									<li>By <a href="#!"> Admin</a></li>
									
								</ul>
							</div>
						</div>
					</div>

					<div class="deco_image spahe_1" data-aos="fade-down" data-aos-delay="300">
						<img src="/assets/assets/images/shapes/shape_1.png" alt="spahe_not_found">
					</div>
					<div class="deco_image spahe_2" data-aos="fade-up" data-aos-delay="400">
						<img src="/assets/assets/images/shapes/shape_2.png" alt="spahe_not_found">
					</div>
				</section>
				<!-- breadcrumb_section - end
				================================================== -->


				<!-- details_section - start
				================================================== -->
				<section class="details_section blog_details sec_ptb_120 clearfix">
					<div class="container">
						<div class="row justify-content-lg-between justify-content-md-center justify-content-sm-center">

							<div class="col-lg-8 col-md-10 col-sm-12">
								<div class="item_image mb-50" data-aos="fade-up" data-aos-delay="300">
									<img src="/storage/images/{{$post->image}}" alt="image_not_found">
								</div>
                				<h3 class="page_title mb-30"> {{$post->title}}</h3>
								<p class="mb-30">
									{!!$post->body!!}	
								</p>
								{{-- <p class="mb-0">
									Only a quid bobby brilliant bugger Jeffrey owt to do with me lurgy blimey, cheers well me old mucker geeza bodge some dodgy chav. Say me old mucker bobby I a he lost his bottle a load of old tosh cup of char cheers bleeding bugger.
								</p> --}}

								{{-- <div class="blog_quote mb-50" data-aos="fade-up" data-aos-delay="100">
									<span class="item_icon">
										<!-- <img src="/assets/assets/images/icons/quote_2.png" alt="icon_not_found"> -->
										<i class="fas fa-quote-left"></i>
									</span>
									<p class="mb-0">
										<a href="#!">
											Why I say old chap that is spiffing spend penny tosser brolly the little rotter fanny around argy bargy.
										</a>
									</p>
								</div>

								<p class="mb-50">
									Why I say old chap that is spiffing pukka, bamboozled wind up bugger buggered zonked hanky panky a blinding shot the little rotter, bubble and squeak vagabond cheeky bugger at public school pardon your bloke the BBC. Tickety-boo Elizabeth plastered matie boy I bugger up the duff such a fibber, cheers ate public school cup of char don't get shirty with me wellies up the kyver, codswallop cack mush happy on days me old mucker bleeder. Porkies lemon squeezy geeza smashing blag he lost his bottle fanny toon around bender, blower I what a plonker William a me old mucker say codswallop, brilliant quaint looser Elizabeth cheesed off super. Only a quid bobby brilliant bugger Jeffrey owt to do with me lurgy blimey, cheers well me old mucker geeza bodge some dodgy chav. Say me old mucker bobby I a he lost his bottle a load of old tosh cup of char cheers bleeding bugger.
								</p> --}}

								<div class="share_cmnt_btns d-flex justify-content-between align-items-center mb-30">
									<div class="col_wrap">
										<div class="share_links ul_li">
											<span class="list_title">SHARE:</span>
											<ul class="clearfix">
												<li><a href="#!"><i class="icon-facebook"></i></a></li>
												<li><a href="#!"><i class="icon-twitter"></i></a></li>
												<li><a href="#!"><i class="icon-vimeo"></i></a></li>
												<li><a href="#!"><i class="icon-linkedin"></i></a></li>
											</ul>
										</div>
									</div>

									<div class="col_wrap">
										<a href="#!" class="comment_btn"><i class="far fa-comment mr-1"></i> 03 Comments</a>
									</div>
								</div>

								{{-- <div class="item_tag ul_li mb-80">
									<span class="list_title">TAGS:</span>
									<ul class="clearfix">
										<li><a href="#!">makro</a></li>
										<li><a href="#!">Web Design</a></li>
										<li><a href="#!">Saas</a></li>
									</ul>
								</div> --}}

								<h3 class="title_text mb-0">Related Posts</h3>
								<div class="row mb-80">
									@if(count($postts)> 0)
									@foreach ($postts as $postt)
									<div class="col-lg-4 col-md-4 col-sm-6">
										<div class="blog_grid" data-aos="fade-up" data-aos-delay="100">
											<div class="post_date">
												<strong>{{ $postt->created_at->format('d') }}</strong>
												<span>{{ $postt->created_at->format('M ') }}</span>
											</div>
											<a href="{{$postt->slug}}" class="item_image">
												<img src="/storage/images/{{$postt->image}}" alt="image_not_found">
											</a>
											<div class="item_content">
												<h3 class="item_title">
													<a href="/blog/{{$postt->slug}}">{{$postt->title}}</a>
												</h3>
												{{-- <p class="mb-0">
													Why I say old chap that is spiffi pukka bamboozl...
												</p> --}}
											</div>
										</div>
									</div>
									
									
									@endforeach

									@endif
									
								</div>

								
								<div class="comment_form" data-aos="fade-up" data-aos-delay="100">
									<h3 class="title_text mb-50">Leave a comment</h3>
									<form action="#!">

										<div class="row">
											<div class="col-lg-6 col-md-6">
												<div class="form_item">
													<input type="text" name="name" placeholder="Your Name">
												</div>
											</div>

											<div class="col-lg-6 col-md-6">
												<div class="form_item">
													<input type="email" name="email" placeholder="Your Email">
												</div>
											</div>
										</div>

										<div class="form_item">
											<input type="text" name="website" placeholder="Your Website (optional)">
										</div>

										<div class="form_item">
											<textarea name="comment" placeholder="Comment"></textarea>
										</div>

										<button type="submit" class="btn bg_default_blue">Post Comment</button>

									</form>
								</div>
							</div>

							<div class="col-lg-4 col-md-10 col-sm-12">
								<aside id="sidebar_section" class="sidebar_section pl-30">

									<div class="widget sidebar_search form_item" data-aos="fade-up" data-aos-delay="300">
										<form action="/search" class="search__form">
															<input type="search" name="search" placeholder="Search...">
										<button type="submit"><i class="ti-search"></i></button>
										</form>
									</div>

									<div class="widget sidebar_blog ul_li_block" data-aos="fade-up" data-aos-delay="400">
										<h3 class="widget_title mb-30">Recent Posts</h3>
										<ul class="clearfix">
											@if(count($postts)> 0)
											@foreach ($postts as $postt)
											<li>
												<div class="blog_small">
													<a href="{{$postt->slug}}" class="item_image">
														<img src="/storage/images/{{$postt->image}}" alt="image_not_found">
													</a>
													<div class="item_content">
														<h4 class="item_title">
															<a href="/blog/{{$postt->slug}}">{{$postt->title}}</a>
														</h4>
														<span class="post_date">{{ $postt->created_at->format('M d Y') }}</span>
													</div>
												</div>
											</li>
											@endforeach
       
											@endif

											
										</ul>
									</div>

									<div class="widget sidebar_category ul_li_block" data-aos="fade-up" data-aos-delay="100">
										<h3 class="widget_title mb-30">Categories</h3>
															{{--dd($cat_count)--}}

										<ul class="clearfix">
											
										@if(count($categories)> 0)
										@foreach($categories as $category)
											<ul >
											<li><a href="/blog/category/{{$category->id}}"> {{$category->cat_description }}</a><span>({{$cat_count[$category->id]}})</span>
											</li>
												
											</ul>
										@endforeach
										@endif   
										</ul>
									</div>

									{{-- <div class="widget sidebar_tag" data-aos="fade-up" data-aos-delay="100">
										<h3 class="widget_title mb-30">Tags</h3>
										<div class="tag_list ul_li">
											<ul class="clearfix">
												<li><a href="#!">makro</a></li>
												<li><a href="#!">Web Design</a></li>
												<li><a href="#!">Saas</a></li>
												<li><a href="#!">Cooling System</a></li>
												<li><a href="#!">Corporate</a></li>
												<li><a href="#!">Software</a></li>
												<li><a href="#!">Landing</a></li>
												<li><a href="#!">Wheels</a></li>
											</ul>
										</div>
									  </div> --}}
							 @if (Route::has('login'))
                                @auth				  
									<div class="widget sidebar_tag" data-aos="fade-up" data-aos-delay="100">
															<h3 class="widget_title mb-30">Manage Post</h3>
										<div class="tag_list ul_li">  
											<ul class="clearfix">
											
												{{-- {{ route('post.edit', $post->slug) }} /blog/{{$post->id}}/edit--}}
													<a href="{{ route('blog.edit', $post->slug) }}"><button  class="btn bg_default_blue">EDIT POST</button></a>
												
												&nbsp; <br>
													<form action="{{route('blog.destroy', $post->id)}}" method="post" enctype="multipart/form-data" >
													{{ csrf_field() }}
													@method('DELETE')
													<button type="submit" class="btn bg_default_blue"> DELETE POST</button>
													</form> 
											
												@endif
												@endif
											</ul>
										</div> 
									</div>
									
								</aside>
							</div>

						</div>
					</div>
				</section>
				<!-- details_section - end
				================================================== -->


			</main>
			<!-- main body - end
			================================================== -->

    
@endsection


