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
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                 </div>
              </div>
           </div>
           <div class="hero__items set-bg" data-setbg="{{asset('img/hero/leung.jpg')}}">
              <div class="hero__text">
                 <h2>Quality that you can taste.</h2>
                 <a href="{{url('/contact-us')}}" class="primary-btn">CONTACT US</a>
                 <div class="hero__social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                 </div>
              </div>
           </div>
           <div class="hero__items set-bg" data-setbg="{{asset('img/hero/emerson.jpg')}}">
              <div class="hero__text">
                 <h2>Quality that you can taste.</h2>
                 <a href="{{url('/contact-us')}}" class="primary-btn">CONTACT US</a>
                 <div class="hero__social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                 </div>
              </div>
           </div>
           <div class="hero__items set-bg" data-setbg="{{asset('img/hero/lasse.jpg')}}">
              <div class="hero__text">
                 <h2>Quality that you can taste.</h2>
                 <a href="{{url('/contact-us')}}" class="primary-btn">CONTACT US</a>
                 <div class="hero__social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
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
                        <!-- <p>Anisotropic elements that randomly sample. Quisque sit amet nisl ante. Fusce lacinia non
                           tellus id gravida. Cras neque dolor, volutpat et hendrerit et.
                        </p> -->
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
                 <div class="col-lg-3">
                    <div class="project__slider__item set-bg" data-setbg="{{asset('img/hero/rainer.jpg')}}">
                       <div class="project__slider__item__hover">
                          <a href="#">
                             <span>Click to Visit</span>
                             <h5>Canal Road Branch</h5>
                          </a>
                       </div>
                    </div>
                 </div>
                 <div class="col-lg-3">
                    <div class="project__slider__item set-bg" data-setbg="{{asset('img/project/newpro.jpg')}}">
                       <div class="project__slider__item__hover">
                          <a href="#">
                             <span>Click to Visit</span>
                             <h5>Emporium Food Court</h5>
                          </a>
                       </div>
                    </div>
                 </div>
                 <div class="col-lg-3">
                    <div class="project__slider__item set-bg" data-setbg="{{asset('img/project/IMG-20180211-WA0031.jpg')}}">
                       <div class="project__slider__item__hover">
                          <a href="#">
                             <span>Click to Visit</span>
                             <h5>Lower Mall</h5>
                          </a>
                       </div>
                    </div>
                 </div>
                 <div class="col-lg-3">
                    <div class="project__slider__item set-bg" data-setbg="{{asset('img/project/newpro.jpg')}}">
                       <div class="project__slider__item__hover">
                          <a href="#">
                             <span>Click to Visit</span>
                             <h5>Karachi Seview</h5>
                          </a>
                       </div>
                    </div>
                 </div>
                 <div class="col-lg-3">
                    <div class="project__slider__item set-bg" data-setbg="{{asset('img/project/IMG-20180211-WA0031.jpg')}}">
                       <div class="project__slider__item__hover">
                          <a href="#">
                             <span>interiors</span>
                             <h5>Lower River Street Astoria</h5>
                          </a>
                       </div>
                    </div>
                 </div>
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
     <!-- Gallery End -->
     <!-- Our Clients start -->
     <section class="spad">
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
                 <div class="logo__carousel owl-carousel">
                    <div class="logo__carousel__item">
                       <a href="#"><img src="{{asset('img/logo/logo-1.png')}}" alt=""></a>
                    </div>
                    <div class="logo__carousel__item">
                       <a href="#"><img src="{{asset('img/logo/logo-2.png')}}" alt=""></a>
                    </div>
                    <div class="logo__carousel__item">
                       <a href="#"><img src="{{asset('img/logo/logo-3.png')}}" alt=""></a>
                    </div>
                    <div class="logo__carousel__item">
                       <a href="#"><img src="{{asset('img/logo/logo-4.png')}}" alt=""></a>
                    </div>
                    <div class="logo__carousel__item">
                       <a href="#"><img src="{{asset('img/logo/logo-5.png')}}" alt=""></a>
                    </div>
                    <div class="logo__carousel__item">
                       <a href="#"><img src="{{asset('img/logo/logo-3.png')}}" alt=""></a>
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
               <div class="col-lg-4 col-md-6 col-sm-6">
                   <div class="latest__item">
                       <div class="latest__item__pic">
                           <img src="{{asset('img/blog/latest-1.jpg')}}" alt="">
                       </div>
                       <div class="latest__item__text">
                           <span>Architecture</span>
                           <h4>Target and Amazon Shopping List for Home Stagers</h4>
                           <a href="#">Read more</a>
                       </div>
                   </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-6">
                   <div class="latest__item">
                       <div class="latest__item__pic">
                           <img src="{{asset('img/blog/latest-2.jpg')}}" alt="">
                       </div>
                       <div class="latest__item__text">
                           <span>Interior</span>
                           <h4>6 Ideas for Team Building and Employee Appreciation for Home Stagers</h4>
                           <a href="#">Read more</a>
                       </div>
                   </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-6">
                   <div class="latest__item">
                       <div class="latest__item__pic">
                           <img src="{{asset('img/blog/latest-3.jpg')}}" alt="">
                       </div>
                       <div class="latest__item__text">
                           <span>Planning</span>
                           <h4>How to Find the Best Price Structure for Your Home Staging Services</h4>
                           <a href="#">Read more</a>
                       </div>
                   </div>
               </div>
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
                    <h2>Our Ability To Deliver Outstanding Results For Our Clients Starts With Our Team Of Smart.
                    </h2>
                    <a href="{{url('/contact-us')}}" class="primary-btn">Contact Us</a>
                 </div>
              </div>
           </div>
        </div>
     </section>
     <!-- Call To Action Section End -->

     @endsection