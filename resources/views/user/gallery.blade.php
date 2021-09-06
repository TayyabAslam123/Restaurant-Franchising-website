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
                     <h2>Our Gallery</h2>
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
                  <span>Some of our pics</span>
                  <!-- <h2></h2> -->
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
                  <div style="background-image: url(img/0002.jpg);"></div>
               </div>
               <div class="item web">
                  <div style="background-image: url(img/0003.jpg);"></div>
               </div>
              
                <div class="item seo">
                  <div style="background-image: url(img/IMG-20180201-WA0031.jpg);"></div>
               </div>
                <div class="item web">
                  <div style="background-image: url(img/0001.jpg);"></div>
               </div>
                <div class="item web">
                  <div style="background-image: url(img/0005.jpg);"></div>
               </div>
                <div class="item seo">
                  <div style="background-image: url(img/IMG-20180201-WA0032.jpg);"></div>
               </div>
               <div class="item seo">
                  <div style="background-image: url(img/IMG-20180201-WA0036.jpg);"></div>
               </div>
                <div class="item web">
                  <div style="background-image: url(img/0004.jpg);"></div>
               </div>
               <div class="item seo">
                  <div style="background-image: url(img/IMG-20180405-WA0023.jpg);"></div>
               </div>
               <div class="item seo">
                  <div style="background-image: url(img/IMG-20180201-WA0038.jpg);"></div>
               </div>
               <div class="item seo">
                  <div style="background-image: url(img/IMG-20180201-WA0072.jpg);"></div>
               </div>
               <div class="item seo">
                  <div style="background-image: url(img/IMG-20180210-WA0097.jpg);"></div>
               </div>
               <div class="item seo">
                  <div style="background-image: url(img/IMG-20180405-WA0060.jpg);"></div>
               </div>
               <div class="item seo">
                  <div style="background-image: url(img/IMG-20180411-WA0112.jpg);"></div>
               </div>
               <div class="item web">
                  <div style="background-image: url(img/0007.jpg);"></div>
               </div>
               <div class="item seo">
                  <div style="background-image: url(img/IMG-20180411-WA0115.jpg);"></div>
               </div>
               <div class="item seo">
                  <div style="background-image: url(img/IMG-20180411-WA0117.jpg);"></div>
               </div>
                <div class="item web">
                  <div style="background-image: url(img/0006.jpg);"></div>
               </div>
               <!-- <div class="item graphics">-->
               <!--   <div style="background-image: url(http://www.dracorion.com/wp-content/uploads/2012/03/placeholder4-480x300-crop.jpg);"></div>-->
               <!--</div>-->
               
               <div class="item web">
                  <div style="background-image: url(img/0008.jpg);"></div>
               </div>
            </div>
         </div>
      </section>
      <!-- Call To Action Section Begin -->
      @endsection