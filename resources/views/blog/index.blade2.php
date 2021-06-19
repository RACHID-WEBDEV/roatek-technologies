@extends('layouts.website')
@section('title')
Our Blog
@endsection
<?php 
//$categories = App\Models\Category::all();
?>
@section('content')
 
<!-- main body - start
			================================================== -->
			<main>


				<!-- breadcrumb_section - start
				================================================== -->
				<section id="breadcrumb_section" class="breadcrumb_section bg_gradient_blue deco_wrap d-flex align-items-center text-white clearfix">
					<div class="container">
						<div class="breadcrumb_content text-center" data-aos="fade-up" data-aos-delay="100">
							@if(isset($cat_title) && $cat_title != "") <h1 class="page_title">{{$cat_title}}</h1> @else <h1 class="page_title">Our Blog</h1> @endif
							
							
							
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


				<!-- blog_section - start
				================================================== -->
				<section id="blog_section" class="blog_section sec_ptb_120 clearfix">
					<div class="container">
						<div class="row justify-content-lg-between justify-content-md-center justify-content-sm-center">

							<div class="mt--60 col-lg-8 col-md-10">
								<div class="row">
                                    @if(count($posts)> 0)
                                    @foreach ($posts as $post)
									<div class="col-lg-6 col-md-6 col-sm-6">
										<div class="blog_grid decrease_size" data-aos="fade-up" data-aos-delay="300">
											<div class="post_date">
												<strong>{{ $post->created_at->format('d') }}</strong>
												<span>{{ $post->created_at->format('M') }}</span>
											</div>		
											<a href="/blog/{{$post->id}}" class="item_image">
												<img src="/storage/images/{{$post->image}}" alt="image_not_found">
											</a>
											<div class="item_content">
												<h3 class="item_title">
													<a href="/blog/{{$post->id}}">{{$post->title}}</a>
												</h3>
												<p class="mb-30">
                                                    {!! \Illuminate\Support\Str::limit($post->body, 120, "...")!!}												</p>
												<div class="row">
													<div class="col-6">
														<a href="/blog/{!!$post->id!!}" class="details_btn">Read More <i class="fal fa-long-arrow-right"></i></a>
													</div>
													<div class="col-6">
														<a href="#!" class="comment_btn float-right"><i class="far fa-comment mr-1"></i> 03 Comments</a>
													</div>
												</div>
											</div>
										</div>
									</div>
                                    @endforeach
									
									@endif
									
									
								</div>
								&nbsp;
								{!! $posts->links() !!}
								{{-- {{$posts->links()}} --}}
								{{-- <div class="pagination_nav ul_li" data-aos="fade-up" data-aos-delay="100">
									<ul class="clearfix">
										<li><a href="#!"><i class="ti-arrow-left"></i></a></li>
										<li class="active"><a href="#!">1</a></li>
										<li><a href="#!">2</a></li>
										<li><a href="#!">3</a></li>
										<li><a href="#!"><i class="ti-arrow-right"></i></a></li>
									</ul>
								</div> --}}
							</div>

							<div class="col-lg-4 col-md-6 col-sm-7">
								<aside id="sidebar_section" class="sidebar_section pl-30">

									<div class="widget sidebar_search form_item" data-aos="fade-up" data-aos-delay="300">
										<form action="/search" method="get">
											<input type="text" name="query" placeholder="Search Posts..."/>
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
													<a href="{{$postt->id}}" class="item_image">
														<img src="/storage/images/{{$postt->image}}" alt="image_not_found">
													</a>
													<div class="item_content">
														<h4 class="item_title">
															<a href="/blog/{{$postt->id}}">{{$postt->title}}</a>
															
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
										<ul class="clearfix">
                                            @if(count($categories)> 0)
                                            @foreach($categories as $category) 
                                            {{--dd($cat_count)--}}
										
											<li><a href="/blog/category/{{$category->id}}"><span>{{$category->cat_description }}({{$cat_count[$category->id]}})</span></a></li>
                  
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
									
								</aside>
							</div>
							
						</div>
					</div>
				</section>
				<!-- blog_section - end
				================================================== -->


			</main>
			<!-- main body - end
			================================================== -->

@endsection