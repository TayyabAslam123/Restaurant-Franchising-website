@extends('user.master')
@section('main')

      <!-- Breadcrumb Section Begin -->
      <div class="breadcrumb-option spad set-bg" data-setbg="img/breadcrumb-bg.jpg">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 text-center">
                  <div class="breadcrumb__text">
                     <h2>Our Menu</h2>
                     <div class="breadcrumb__links">
                        <a href="{{url('/menu')}}">Home</a>
                        <span>Our Menu</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Breadcrumb Section End -->
      <!-- About Page Section Begin -->
      <section class="about-page menu pt-0">
         <div class="">
        <section id="our_menu" class="pb-5">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="page_title text-center mb-4">
                  <h1>our menu</h1>
                  <div class="single_line"></div>
               </div>
            </div>
         </div>
         <div class:"row">
             <div class:"col-md-12">
                 <p style="
    text-align: justify;
">
                     Fri-Chicks destination quenches qualitative and tasty food. Boneless chicken stripes, crunchy burgers, burgers, Fish crunchy supreme, kid meals, energetic coleslaw are some of the menu items available to cater to the requirements of people in a different category. Fried for their chicken food hunt is love for a real crispy fried chicken. Healthy grilled special chick-pop, rice, and energetic coleslaw are another tip combination of cultures of all ages.
Fri-Chicks emphasize the International standard of providing diversified, hygienic, and refreshing food for our guests to enjoy in a clean, luxurious & entertaining environment.
</p>
             </div>
         </div>
         <div class="row">
            <ul class="nav nav-tabs menu_tab mb-4" id="myTab" role="tablist">
               <li class="nav-item">
                  <a class="nav-link active" id="breakfast-tab" data-toggle="tab" href="#breakfast" role="tab">Frichicks</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" id="lunch-tab" data-toggle="tab" href="#lunch" role="tab">Express</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" id="dinner-tab" data-toggle="tab" href="#dinner" role="tab">Premium</a>
               </li>
            </ul>
         </div>
         <div class="row">
            <div class="tab-content col-lg-12" id="myTabContent">
               <div class="tab-pane fade show active" id="breakfast" role="tabpanel" aria-labelledby="breakfast-tab">
                  <div class="row">
                     <div class="col-md-12">
                       <a href="{{asset('img/Menu.pdf')}}" download>

                  <h3 class="p-3 text-center">Click Here To View & Download Fri-chicks Menu </h3>
                     </div>
                   
                  </div>
               </div>
               <div class="tab-pane fade" id="lunch" role="tabpanel" aria-labelledby="lunch-tab">
                  <div class="row">
                     <div class="col-md-12">
                       <a href="{{asset('img/FriChicksExpressMenu.pdf')}}" download>

                  <h3 class="p-3 text-center">Click Here To View & Download Fri-chicks Express Menu </h3>
                  </div>
               </div>
               </div>
               <div class="tab-pane fade" id="dinner" role="tabpanel" aria-labelledby="dinner-tab">
                  <div class="row">
                     
                     <div class="col-md-12">
                       <a href="{{asset('img/FriChicksPremiumMenu.pdf')}}" download>

                  <h3 class="p-3 text-center">Click Here To View & Download Fri-chicks Premium Menu </h3>
                  </div>
                    
                 
               </div>
            </div>
         </div>
      </div>
      </div>
   </section>
         </div>
      </section>
      <!-- About Page Section End -->
      <!-- Team Section Begin -->

      <!-- Team Section End -->
      <!-- Call To Action Section Begin -->
      <section class="callto spad set-bg" data-setbg="img/call-bg.jpg">
         <div class="container">
            <div class="row d-flex justify-content-center">
               <div class="col-lg-10 text-center">
                  <div class="callto__text">
                     <span>Why choose us?</span>
                     <h2>Our ability to bring outstanding results to our customers.</h2>
                     <a href="{{url('/contact-us')}}" class="primary-btn">Contact Us</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Call To Action Section End -->
@endsection