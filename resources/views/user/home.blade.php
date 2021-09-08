@extends('user.master')
@section('main')
<!-- Hero Section Begin -->
      <section class="hero">
        <div class="hero__slider owl-carousel">
           <div class="hero__items set-bg" data-setbg="{{asset('img/hero/rainer.jpg')}}">
              <div class="hero__text">
                 <h2>Quality that you can taste.</h2>
                 <a href="{{url('/contact-us')}}" class="primary-btn">CONTACT US</a>
                 <div class="hero__social">
                    <a href="https://www.facebook.com/FriChicksOfficial/"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.instagram.com/FriChicksOfficial/"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                 </div>
              </div>
           </div>

           <div class="hero__items set-bg" data-setbg="{{asset('img/hero/leung.jpg')}}">
              <div class="hero__text">
                 <h2>Quality that you can taste.</h2>
                 <a href="{{url('/contact-us')}}" class="primary-btn">CONTACT US</a>
                 <div class="hero__social">
                   <a href="https://www.facebook.com/FriChicksOfficial/"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.instagram.com/FriChicksOfficial/"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                 </div>
              </div>
           </div>
           <div class="hero__items set-bg" data-setbg="{{asset('img/hero/lasse.jpg')}}">
              <div class="hero__text">
                 <h2>Quality that you can taste.</h2>
                 <a href="{{url('/contact-us')}}" class="primary-btn">CONTACT US</a>
                 <div class="hero__social">
                   <a href="https://www.facebook.com/FriChicksOfficial/"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.instagram.com/FriChicksOfficial/"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                 </div>
              </div>
           </div>
           <div class="hero__items set-bg" data-setbg="{{asset('img/hero/lasse@0.3x.jpg')}}">
              <div class="hero__text">
                 <h2>Quality that you can taste.</h2>
                 <a href="{{url('/contact-us')}}" class="primary-btn">CONTACT US</a>
                 <div class="hero__social">
                    <a href="https://www.facebook.com/FriChicksOfficial/"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.instagram.com/FriChicksOfficial/"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                 </div>
              </div>
           </div>
           

        </div>
        <div class="slide-num" id="snh-1"></div>
        <div class="slider__progress"><span></span></div>
     </section>
     <!-- Hero Section End -->
     
     <!-- About Section Begin -->
     <section class="about spad">
         <div class="container">
            <div class="row">
               <div class="col-lg-6">
                  <div class="about__text">
                     <div class="section-title">
                        <span>who are we</span>
                        <h2>Established in Pakistan 2002,</h2>
                     </div>
                     <div class="about__para__text">
                        <p>(FC) Fri-Chicks is a rapidly growing fast-food chain in the region. (FC) Fri-Chicks is specialized in serving the tastiest crumbed fried chicken using a secret recipe which includes a unique blend of the choicest herbs by spices. It is therefore of little wonder, (FC) Fri-Chicks is synonym to words such as "Real Recipe, Real Taste, Real Fried Chicken." (FC) Fri-Chicks begain its gourney with a yet determined dream to create a brand that brings happiness, satisfaction, and smiles to our valued customers.
                        </p>
                     </div>
                     <a href="{{url('/about')}}" class="primary-btn normal-btn">ABOUT US</a>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="about__pic">
                     <div class="about__pic__inner">
                        <img src="{{asset('img/about-pic.jpg')}}" alt="">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
     <!-- About Section End -->
     <!--our brands-->
       <section class="spad brands">
        <div class="container">
           <div class="row">
              <div class="col-lg-12 text-center">
                 <div class="section-title">
                    <span>Our</span>
                    <h2>Brands</h2>
                 </div>
              </div>
           </div>
           
          <style>
 .container {
	 overflow: hidden;
}
 .container .slider {
	 animation: slidein 30s linear infinite;
	 white-space: nowrap;
}
 .container .slider .logos {
	 width: 100%;
	 display: inline-block;
	 margin: 0px 0;
}
 .container .slider .logos .fab {
	 width: calc(100% / 5);
	 animation: fade-in 0.5s cubic-bezier(0.455, 0.03, 0.515, 0.955) forwards;
}
 @keyframes slidein {
	 from {
		 transform: translate3d(0, 0, 0);
	}
	 to {
		 transform: translate3d(-100%, 0, 0);
	}
}
 @keyframes fade-in {
	 0% {
		 opacity: 0;
	}
	 100% {
		 opacity: 1;
	}
}
 
      </style>
     <div  class:"row">
         <div class:"col-md-12">
              <div class="slider">
        <div class="logos">
          <i class="fab fa-js fa-4x"></i>
           <i class="fa-4x"> <a href="#"><img src="img/logo/BRAND LOOGO-01.png" alt=""></a> </i>
            <i class="fa-4x"> <a href="#"><img src="img/logo/BRAND LOOGO-02.png" alt=""></a> </i>
             <i class="fa-4x"> <a href="#"><img src="img/logo/BRAND LOOGO-04.png" alt=""></a> </i>
              <i class="fa-4x"> <a href="#"><img src="img/logo/BRAND LOOGO-03.png" alt=""></a> </i>
              <i class="fa-4x"> <a href="#"><img src="img/logo/BRAND LOOGO-05.png" alt=""></a> </i>
            <i class="fa-4x"> <a href="#"><img src="img/logo/BRAND LOOGO-06.png" alt=""></a> </i>
             <i class="fa-4x"> <a href="#"><img src="img/logo/BRAND LOOGO-07.png" alt=""></a> </i>
              <i class="fa-4x"> <a href="#"><img src="img/logo/BRAND LOOGO-08.png" alt=""></a> </i>
              <i class="fa-4x"> <a href="#"><img src="img/logo/BRAND LOOGO-09.png" alt=""></a> </i>
            <i class="fa-4x"> <a href="#"><img src="img/logo/BRAND LOOGO-10.png" alt=""></a> </i>
             <i class="fa-4x"> <a href="#"><img src="img/logo/BRAND LOOGO-11.png" alt=""></a> </i>
              <i class="fa-4x"> <a href="#"><img src="img/logo/BRAND LOOGO-12.png" alt=""></a> </i>
        </div>
      
      </div>
         </div>
     </div>
<!--          <div class="container h-100">-->
<!--  <div class="row align-items-center h-100">-->
<!--    <div class="container rounded">-->
     
<!--    </div>-->
<!--  </div>-->

<!--</div>-->
      
        </div>
     </section>
     <!--end-->
     <!-- Project Section Begin -->
     <section class="project spad">
        <div class="container-fluid">
           <div class="row">
              <div class="col-lg-12 text-center">
                 <div class="section-title">
                    <span>Get Franchise</span>
                    <h2>Our Franchises</h2>
                 </div>
              </div>
           </div>
           <div class="row">
              <div class="project__slider owl-carousel">

             @foreach(getFrenchises() as $var)
                 <div class="col-lg-3">
                    <div class="project__slider__item set-bg"  data-setbg="{{Storage::url('public/franchises/'.$var->image)}}">
                       <div class="project__slider__item__hover">
                          <a href="#">
                             <span>{{$var->title}}</span>
                             <h6>{{$var->address}}</h6>
                          </a>
                       </div>
                    </div>
                 </div>
              @endforeach




              </div>
           </div>
        </div>
     </section>
     <!-- Project Section End -->
     <!-- Gallery Start -->
     <section class="gallery spad">
        <div class="container text-center ">
           <div class="row">
              <div class="col-lg-12 text-center">
                 <div class="section-title">
                    <span>Our</span>
                    <h2>Portfolio</h2>
                 </div>
              </div>
           </div>
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
     <!-- Gallery End -->
     <!-- Our Clients start -->
     <section class="spad vendors">
        <div class="container">
           <div class="row">
              <div class="col-lg-12 text-center">
                 <div class="section-title">
                    <span>Our</span>
                    <h2>Vendors</h2>
                 </div>
              </div>
           </div>
           <div class="row">
              <div class="col-lg-12">
                   <div class="slider">
        <div class="logos">
          <i class="fab fa-js fa-4x"></i>
           <i class="fa-4x"><a href="#"><img src="img/logo/VENDOR LOG-02.png" alt=""></a></i>
            <i class="fa-4x"> <a href="#"><img src="img/logo/VENDOR LOG-03.png" alt=""></a></i>
             <i class="fa-4x"> <a href="#"><img src="img/logo/VENDOR LOG-01.png" alt=""></a></i>
              <i class="fa-4x"><a href="#"><img src="img/logo/VENDOR LOG-06.png" alt=""></a></i>
              <i class="fa-4x"><a href="#"><img src="img/logo/VENDOR LOG-05.png" alt=""></a> </i>
            <i class="fa-4x"><a href="#"><img src="img/logo/VENDOR LOG-07.png" alt=""></a></i>
             <i class="fa-4x"><a href="#"><img src="img/logo/VENDOR LOG-08.png" alt=""></a> </i>
              <i class="fa-4x"><a href="#"><img src="img/logo/VENDOR LOG-04.png" alt=""></a></i>
        </div>
              </div>
              </div>
           </div>
        </div>
     </section>
     <!-- Our Clients End -->
     <!-- Latest Section Begin -->
   <section class="latest spad">
       <div class="container-fluid">
           <div class="row">
               <div class="col-md-12">
                   <div class="section-title text-center">
                       <span>Latest News</span>
                            <h2>From our blog</h2>
                   </div>
               </div>
               </div>
           </div>
           <div class="row">

           @foreach(shownews() as $item)
               <div class="col-lg-4 col-md-6 col-sm-6">
                   <div class="latest__item">

                       <div class="latest__item__text">

                           <h4>{{$item->title}}</h4>
                           <a href="{{url('/news')}}">Views All News</a>
                       </div>
                   </div>
               </div>
            @endforeach

           </div>
       </div>
   </section>
   <!-- Latest Section End -->
     <!-- Call To Action Section Begin -->
     <section class="callto spad set-bg" data-setbg="{{asset('img/call-bg.jpg')}}">
        <div class="container">
           <div class="row d-flex justify-content-center">
              <div class="col-lg-10 text-center">
                 <div class="callto__text">
                    <span>Why choose us?</span>
                    <h2>COMMITED TO SATISFY OUR BELOVED SALTY CUSTOMERS</h2>
                    <a href="{{url('/contact-us')}}" class="primary-btn">Contact Us</a>
                 </div>
              </div>
           </div>
        </div>
     </section>
     <!-- Call To Action Section End -->

     @endsection