@extends('user.master')
@section('main')
            <div class="canvas__open"><i class="fa fa-bars"></i>
            </div>
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
                        <a href="{{url('/')}}">Home</a>
                        <span>About Us</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Breadcrumb Section End -->
      <!-- About Page Section Begin -->
      <section class="about-page spad">
         <div class="container">
            <div class="row">
               <div class="col-lg-4 col-md-4">
                  <div class="about__text about__page__text">
                     <div class="section-title">
                        <span>who are we</span>
                        <h2>About Us</h2>
                     </div>
                     <div class="about__para__text">
                        <p>Fri-Chicks is the first Pakistani rapid growing fast-food chain.</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-8 col-md-8">
                  <div class="about__page__services">
                     <div class="about__page__services__text">
                        <p>Fri-Chicks is specialized in serving the tasteful crumbed fried chicken using a peculiar recipe with organic blend of the herbs and spices. It is therefore of little wonder. Fri-Chicks transforms you to thrill, energy, health, action and joy. Fri-Chicks marinated with state-of-the-art equipment by your mom’s kitchen bringing happiness, satisfaction, and smiles to you.
                        </p>
                     </div>
                     <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                           <div class="services__item">
                              <img src="{{asset('img/services/services-5.png')}}" alt="">
                              <h4>Our Mission</h4>
                              <p>To provide fascinating taste with less burden on your pocket, Fri-Chicks is committed to be your mom’s kitchen. This Mom’s kitchen takes care of your tasty, salty, spicy, nutritional, hygienic, and health food. Everyone must have second Mom’s kitchen. 
                              </p>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                           <div class="services__item">
                              <img src="{{asset('img/services/services-6.png')}}" alt="">
                              <h4>Our Vision</h4>
                              <p>Our nation is lacking various healthy and balanced foods ingredients. So, we are committed to providing enriched balanced food with healthy proteins, vitamins and minerals.
I being the food Passionist, committed to get good market share fought hard to reach this stage. I am thankful to this nation, society, my family and stakeholder who persuaded and helped me to get remarkable local brand market share fast food industry. 
</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- About Page Section End -->
      <!-- Team Section Begin -->
      <section class="spad">
         <div class="container">
            <div class="row">
               <div class="col-lg-9 col-md-8 col-sm-6">
                  <div class="section-title">
                     <span>Our Team</span>
                     <h2>Meet our team</h2>
                  </div>
               </div>
               <!-- <div class="col-lg-3 col-md-4 col-sm-6">
                  <div class="team__btn">
                      <a href="#" class="primary-btn normal-btn">View All</a>
                  </div>
                  </div> -->
            </div>
            <div class="row">
               <div class="col-lg-4 col-md-6">
                  <div class="team__item set-bg" data-setbg="{{asset('img/team/team-1.jpg')}}">
                     <div class="team__text">
                        <div class="team__title">
                           <h5>Hasnain Mehdi</h5>
                           <span>Chief Executive Officer</span>
                        </div>
                        <p>I being the food Passionist, committed to get good market share fought hard to reach this stage. I am thankful to this nation, society, my family and stakeholder who persuaded and helped me to get remarkable local brand market share fast food industry. 
                        </p>
                        <div class="team__social">
                           <a href="#"><i class="fa fa-facebook"></i></a>
                           <a href="#"><i class="fa fa-twitter"></i></a>
                           <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6">
                  <div class="team__item set-bg" data-setbg="{{asset('img/team/team-2.jpg')}}">
                     <div class="team__text">
                        <div class="team__title">
                           <h5>Dana Vaughn</h5>
                           <span>Architect</span>
                        </div>
                        <p>Vestibulum dapibus odio quam, sit amet hendrerit dui ultricies consectetur. Ut viverra
                           porta leo, non tincidunt mauris condimentum eget. Vivamus non turpis elit. Aenean
                           ultricies nisl sit amet.
                        </p>
                        <div class="team__social">
                           <a href="#"><i class="fa fa-facebook"></i></a>
                           <a href="#"><i class="fa fa-twitter"></i></a>
                           <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6">
                  <div class="team__item set-bg" data-setbg="{{asset('img/team/team-3.jpg')}}">
                     <div class="team__text">
                        <div class="team__title">
                           <h5>Jonathan Mcdaniel</h5>
                           <span>Architect</span>
                        </div>
                        <p>Vestibulum dapibus odio quam, sit amet hendrerit dui ultricies consectetur. Ut viverra
                           porta leo, non tincidunt mauris condimentum eget. Vivamus non turpis elit. Aenean
                           ultricies nisl sit amet.
                        </p>
                        <div class="team__social">
                           <a href="#"><i class="fa fa-facebook"></i></a>
                           <a href="#"><i class="fa fa-twitter"></i></a>
                           <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
     
      <!-- Team Section End -->
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