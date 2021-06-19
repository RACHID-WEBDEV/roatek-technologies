 


  <!-- backtotop - start -->
  <div id="thetop"></div>
  <div id="backtotop">
    <a href="#" id="scroll">
      <i class="fal fa-arrow-up"></i>
      <i class="fal fa-arrow-up"></i>
    </a>
  </div>
  <!-- backtotop - end -->

  <!-- header_section - start
  ================================================== -->
  <header id="header_section" class="header_section sticky_header d-flex align-items-center clearfix">
    <div class="container w-1520">
      <div class="row align-items-center">

        <div class="col-lg-2 col-md-12">
          <div class="brand_logo">
            <a href="/" class="brand_link">
              <img src="/assets/assets/images/logo/roatek21.png" alt="logo_not_found">
              <img src="/assets/assets/images/logo/roatek.png" alt="logo_not_found">
            </a>
            <button type="button" class="menu_btn">
              <i class="fal fa-bars"></i>
            </button>
          </div>
        </div>

        <div class="col-lg-8 col-md-12">
          <nav class="main_menu ul_li_center clearfix">
            <ul class="clearfix">
              <li class="active menu_item_has_child">
                <a href="/">Home</a>
                
              </li>

              <li class="menu_item_has_child">
                <a href="/about">About</a>
                
              </li>

              <li class="menu_item_has_child">
                <a href="/services">Services</a>
              
              </li>

              <li class="menu_item_has_child">
                <a href="/portfolio">Portfolio</a>
                
              </li>

              <li class="menu_item_has_child">
                <a href="/blog">Blog</a>
                
              </li>

              <li class="menu_item_has_child">
                <a href="/contact">Contact</a>
                
              </li>
            </ul>
          </nav>
        </div>

       
        {{-- auth code start here --}}
        
        @if (Route::has('login'))
        @auth
        <div class="col-lg-2 col-md-12">
          <nav class="main_menu ul_li_center clearfix">
            <ul class="clearfix">
              <li class="menu_item_has_child">
               <a href="#">{{Auth::user()->name}}</a>
                {{-- <a href="#!">Shop</a> --}}
                <ul class="submenu">
                <li><a href="{{ route('profile.show') }} ">Manage Profile</a></li>
                <li><a href="blog/create">Create Post</a></li>
                <li><a href="{{ url('blog/personalpost') }}">My Posts</a></li>
                <li><a href="/categories/create">Create Categories</a></li>
                <form method="POST" action="{{ route('logout') }}">
                  @csrf

                  <li>
                    <a class="btn bg_white" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                          this.closest('form').submit();">{{ __('Logout') }}
                     </a>
                  </li>
              </form>

                </ul>
              </li>
            </ul>
          </nav>
        </div> 
        @else 
        <div class="col-lg-2 col-md-12">
          <a href="{{route('login')}}" class="btn bg_white float-right">Sign In</a>
        </div>
        @endif
        @endif

      
      </div>
    </div>
  </header>

  <!-- mobile sidebar menu - start -->
  <div class="sidebar-menu-wrapper">
    <div id="mobile_menu" class="mobile_menu">

      <div class="brand_logo mb-50 clearfix">
        <a href="/" class="brand_link">
          <img src="/assets/assets/images/logo/roatek.png" alt="logo_not_found">
        </a>
        <span class="close_btn"><i class="fal fa-times"></i></span>
      </div>

      <div class="mobile_menu_dropdown menu_list ul_li_block mp_balancing mb-50 clearfix">
        <ul class="clearfix">
          <li >
            <a href="/" >Home</a>
            
              
          </li>

          <li >
            <a href="/about" >About</a>
            
            
              
          </li>

          

          <li><a href="/services">Services</a></li>
          <li><a href="/portfolio">Porfolio</a></li>
          

        

          <li class="dropdown">
            <a href="/blog" >Blog</a>
           
          </li>

          <li><a href="/contact">Contact Us</a></li>
        </ul>
      </div>

      <a href="https://wa.me/+2347064245842" class="btn bg_default_blue">Get Started</a>

    </div>
    <div class="overlay"></div>
  </div>
  <!-- mobile sidebar menu - end -->

  <!-- header_section - end
  ================================================== -->