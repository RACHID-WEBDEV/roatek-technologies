<?php
$cats = array();
$all_recs = App\Models\Category::where("cat_description","!=","")->get();
foreach ($all_recs as $rec) {
    $cats[$rec['id']] = $rec['cat_description'];
}
//dd($all_recs);



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
        <h1 class="page_title mb-30">Create a Blog Post</h1>
       
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
            <h3 class="title_text mb-50">Create a New Post</h3>

            <form action="{{route('blog.store')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                              
              <div class="form_item">
                <h4 class="input_title">Title</h4>
                <input type="text" name="title" class="form-control" value="{{ old('title') }}" data-required placeholder="Write your Post Title">

              {{-- </div>
              <div class="form_item">
                <h4 class="input_slug">Slug</h4>
                <input type="text" name="slug" class="form-control" value="{{ old('slug') }}" data-required placeholder="Write your Post slug here">

              </div> --}}

            
              <div class="form_item">
                {{-- <input type="email" name="email" placeholder="Your Email"> --}}
                <h4 class="input_title">Image Upload:</h4>
                <input type="file" name="image" id="" value="fileupload" accept="image/*" onchange="document.getElementById('show_img').src = window.URL.createObjectURL(this.files[0])" ><img  id="show_img" height="200px" width="350px" />

              </div>
                
              <div class="form_item">
                <h4 class="input_title">Post Body:</h4>
                <textarea class="form-control" id="summary-ckeditor" name="body">{{ old('body') }}</textarea>
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

              

              <button type="submit" class="btn bg_default_blue">Create Post </button>

            </form>
          </div>
        </div>

        <div class="col-lg-4 col-md-10 col-sm-12">
          <aside id="sidebar_section" class="sidebar_section pl-30">

            <div class="widget sidebar_search form_item" data-aos="fade-up" data-aos-delay="300">
              <input type="search" name="search" placeholder="Search...">
              <button type="submit"><i class="ti-search"></i></button>
            </div>

            <div class="widget sidebar_blog ul_li_block" data-aos="fade-up" data-aos-delay="400">
              <h3 class="widget_title mb-30">Recent Posts</h3>
              <ul class="clearfix">
                <li>
                  <div class="blog_small">
                    <a href="#!" class="item_image">
                      <img src="/assets/assets/images/sidebar/blogs/img_1.jpg" alt="image_not_found">
                    </a>
                    <div class="item_content">
                      <h4 class="item_title">
                        <a href="#!">Web development</a>
                      </h4>
                      <span class="post_date">July 06, 2020</span>
                    </div>
                  </div>
                </li>

                <li>
                  <div class="blog_small">
                    <a href="#!" class="item_image">
                      <img src="/assets/assets/images/sidebar/blogs/img_2.jpg" alt="image_not_found">
                    </a>
                    <div class="item_content">
                      <h4 class="item_title">
                        <a href="#!">Fast App development</a>
                      </h4>
                      <span class="post_date">July 06, 2020</span>
                    </div>
                  </div>
                </li>

                <li>
                  <div class="blog_small">
                    <a href="#!" class="item_image">
                      <img src="/assets/assets/images/sidebar/blogs/img_3.jpg" alt="image_not_found">
                    </a>
                    <div class="item_content">
                      <h4 class="item_title">
                        <a href="#!">Software development</a>
                      </h4>
                      <span class="post_date">July 06, 2020</span>
                    </div>
                  </div>
                </li>
              </ul>
            </div>

                     
            
          </aside>
        </div>

      </div>
    </div>
  </section>
  <!-- details_section - end
  ================================================== -->


</main>


  {{-- <section class="layout-pt-xl layout-pb-sm">
   
    <div data-anim-wrap class="container">

      
      <div class="row justify-content-center">
        <div class="col-xl-9">
          <div data-anim-child="slide-up delay-1" class="sectionHeading -md">
            <h1 class="sectionHeading__title">
              Create a New Post
            </h1>
            
          </div>
        </div>
      </div>
      
      <div data-anim-child="slide-up delay-1" class="row justify-content-center layout-pt-sm">
        <div class="col-xl-9">
          <div class="contact-form -type-1">
            <form action="{{route('blog.store')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}    
              <div class="col-12">
                <label class="js-input-group">
                    <div class="card-header 100%">
                        <label for="">Title:</label>
                        <input type="text" name="title" class="form-control" value="" data-required placeholder="Write your Post Title">
                    </div>
              </div>

                <div class="col-12">
                <div class="card-header 100%"> 
                    <label for="">Image Upload:</label>
                    <input type="file" name="image" id="" value="fileupload" accept="image/*" onchange="document.getElementById('show_img').src = window.URL.createObjectURL(this.files[0])" ><img  id="show_img" height="200px" width="350px" />
                    <span class="form__error"></span>
                </div>
              </div>

              <div class="col-12">
                <div class="card-body 100%">
                    <br><br>
                       <label for="">Discription:</label>
                   <textarea name="body" id="body" cols="50" rows="10" value="" class="form-control"  placeholder="Type The Post Body Here" ></textarea>
               </div>
              </div>

              <div class="col-12 ajax-form-alert js-ajax-form-alert">
                <div class="ajax-form-alert__content">
                </div>
              </div>

              <div class="col-12">
                <button type="submit" class="button -md -black text-white">
                  Send Message
                </button>
              </div>
              <div class="col-12">
                <div class="card-body 100%">
                    <br><br>
                       <label for="">categories:</label>
                        <select class="form-control" name="cat_id" id="">
                     <?php
                        foreach ($cats as $key => $value) {
                           echo"<option value='$key'>$value</option>";
                        }

                    ?>
                    </select>
                   
               </div>
          </div>
              
            </form>
          </div>
        </div>
      </div>
    
    </div>
    
  </section> --}}
  
 
<br><br><br><br>



  @else 
  <h2>you have not registered, <span style="color:crimson"> you are not authorized to access this page</span></h2>;

  @endif 

@endsection