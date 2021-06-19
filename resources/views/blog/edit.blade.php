<?php
$cats = array();
$all_recs = App\Models\Category::where("cat_description","!=","")->get();
foreach ($all_recs as $rec) {
    $cats[$rec['id']] = $rec['cat_description'];
}
//dd($cats);

?>
@extends('layouts.website')
@section('title')
  Our Blog
@endsection

@section('content')

@if (!empty(Auth::user()))
<main>


  <!-- breadcrumb_section - start
  ================================================== -->
  <section id="breadcrumb_section" class="breadcrumb_section bg_gradient_blue deco_wrap d-flex align-items-center text-white clearfix">
    <div class="container">
      <div class="breadcrumb_content text-center decrease_size" data-aos="fade-up" data-aos-delay="100">
        <p class="mb-30">
          Creative Team,Roatek
        </p>
        <h1 class="page_title mb-30">Edit a Blog Post</h1>
       
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
          <div class="comment_form" data-aos="fade-up" data-aos-delay="100">
            <h3 class="title_text mb-50">Edit Your Post</h3>

            <form action="{{route('blog.update', $post->slug)}}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              @method('PUT') 
                              
              <div class="form_item">
                <h4 class="input_title">Title</h4>
                <input type="text" name="title" class="form-control" value="{{$post->title}}" data-required placeholder="Write your Post Title">

              </div>

            
              <div class="form_item">
                {{-- <input type="email" name="email" placeholder="Your Email"> --}}
                <h4 class="input_title">Image Upload:</h4>
                {{-- <input type="file" name="image" id="" value="fileupload" accept="image/*" onchange="document.getElementById('show_img').src = window.URL.createObjectURL(this.files[0])" ><img  id="show_img" height="200px" width="350px" /> --}}
                <input type="file" name="image" id="" value="{{$post->image}}" accept="image/*" onchange="preview_img(event)" ><img  id="show_img" src="/storage/images/{{$post->image}}" height="200px" width="350px" />

              </div>
                
              {{-- <div class="form_item">
                <h4 class="input_title">Post Body:</h4>
                <textarea name="body" id="body" cols="50" rows="10" value="" class="form-control"  placeholder="Type The Post Body Here" >{{$post->body}}</textarea>

              </div> --}}
              <div class="form_item">
                <h4 class="input_title">Post Body:</h4>
                <textarea class="form-control" id="summary-ckeditor" name="body">{{$post->body}}</textarea>
                {{-- <textarea name="body" id="body" cols="50" rows="10" value="" class="form-control"  placeholder="Type The Post Body Here" ></textarea> --}}
                <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                <script>
                  CKEDITOR.replace( 'body', {
                      filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
                      filebrowserUploadMethod: 'form'
                  });
                  </script>
              </div>

              <div class="form_item">
                <h4 class="input_title"> Categories:</h4>

                <select class="form-control" name="cat_id" id="">
                  <?php
                     foreach ($cats as $key => $value) {
                        echo"<option value='$key'>$value</option>";
                     }

                 ?>
                 </select>
                 
              </div>

              

              <button type="submit" class="btn bg_default_blue">Update Post </button>

            </form>
          </div>
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

            {{-- <div class="widget sidebar_category ul_li_block" data-aos="fade-up" data-aos-delay="100">
              <h3 class="widget_title mb-30">Categories</h3>
              <ul class="clearfix">
                  @if(count($categories)> 0)
                  @foreach($categories as $category) 
                  <li><a href="/blog/category/{{$category->id}}"><span>{{$category->cat_description }}({{$cat_count[$category->id]}})</span></a></li>
            
                  @endforeach
                @endif   

            </ul>
                                 
            </div> --}}

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
  <!-- details_section - end
  ================================================== -->


</main>
    
@else 
<h2>you have not registered, <span style="color:crimson"> you are not authorized to Edit this post</span></h2>;
@endif 

@endsection