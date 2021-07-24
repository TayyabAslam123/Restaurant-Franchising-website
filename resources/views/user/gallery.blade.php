        @extends('user.master')
@section('main')
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
         </div>
      </header>
      <!-- Header Section End -->
      <!-- Breadcrumb Section Begin -->
      <div class="breadcrumb-option spad set-bg" data-setbg="{{asset('img/breadcrumb-bg.jpg')}}">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 text-center">
                  <div class="breadcrumb__text">
                     <h2>About Us</h2>
                     <div class="breadcrumb__links">
                        <a href="./index.html">Home</a>
                        <span>Gallery</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Breadcrumb Section End -->
      <!-- Gallery Start -->
      <section class="gallery spad pt-5">
         <div class="row">
            <div class="col-lg-12 text-center">
               <div class="section-title">
                  <span>Our</span>
                  <h2>Portfolio</h2>
               </div>
            </div>
         </div>
         <div class="container text-center ">
            <div class="portfolio-menu">
               <ul>
                  <li class="active" data-filter="*">All</li>
                  <li data-filter=".web">Food</li>
                  <li data-filter=".seo">Franchises</li>
                  <li data-filter=".graphics">Warehouse</li>
               </ul>
            </div>
            <div class="portfolio-item">
               <div class="item web">
                  <div style="background-image: url(http://www.esse90.it/wp-content/uploads/2017/07/img-placeholder.png);"></div>
               </div>
               <div class="item web">
                  <div style="background-image: url(https://placeholdit.imgix.net/~text?txtsize=33&txt=350%C3%97150&w=350&h=150);"></div>
               </div>
               <div class="item seo">
                  <div style="background-image: url(http://unitel.com.br/wp-content/uploads/2014/03/img-3.gif);"></div>
               </div>
               <div class="item graphics">
                  <div style="background-image: url(http://www.dracorion.com/wp-content/uploads/2012/03/placeholder4-480x300-crop.jpg);"></div>
               </div>
               <div class="item seo">
                  <div style="background-image: url(http://dummyimage.com/600x250/666666/fff&text=Dynamic+Dummy+Image+Generator);"></div>
               </div>
               <div class="item web">
                  <div style="background-image: url(http://fpoimg.com/600x250/For%20Place%20Only%20Image);"></div>
               </div>
            </div>
         </div>
      </section>
      <!-- Call To Action Section Begin -->
      @endsection