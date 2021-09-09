  @extends('user.master')
@section('main')
     <!-- Breadcrumb Section Begin -->
     <div class="breadcrumb-option spad set-bg" data-setbg="img/breadcrumb-bg.jpg">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 text-center">
               <div class="breadcrumb__text">
                  <h2>Our Vendors</h2>
                  <div class="breadcrumb__links">
                     <a href="{{url('/')}}">Home</a>
                     <span>Our Vendors</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Breadcrumb Section End -->
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
  <!-- Our Clients start -->
      <section class="spad pt-5">
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
      <!-- Testimonial Section Begin -->
      <section class="testimonial spad set-bg" data-setbg="img/testimonial/testimonial-bg.jpg">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 text-center">
                  <div class="section-title pt-5">
                     <span>Testimonials</span>
                     <h2>What your clients say</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-12">
                  <div class="testimonial__carousel">
                     <div class="testimonial__item">
                        <div class="row d-flex justify-content-center">
                           <div class="col-xl-9 col-lg-10">
                              <p>“1. Fast and accurate at solving mental math problems involving addition,
                                 subtraction, multiplication, division and percentages but without high-level
                                 skills that might be required in jobs requiring complex calculation and
                                 analysis.”
                              </p>
                           </div>
                        </div>
                     </div>
                     <div class="testimonial__item">
                        <div class="row d-flex justify-content-center">
                           <div class="col-xl-9 col-lg-10">
                              <p>“2. Fast and accurate at solving mental math problems involving addition,
                                 subtraction, multiplication, division and percentages but without high-level
                                 skills that might be required in jobs requiring complex calculation and
                                 analysis.”
                              </p>
                           </div>
                        </div>
                     </div>
                     <div class="testimonial__item">
                        <div class="row d-flex justify-content-center">
                           <div class="col-xl-9 col-lg-10">
                              <p>“3. Fast and accurate at solving mental math problems involving addition,
                                 subtraction, multiplication, division and percentages but without high-level
                                 skills that might be required in jobs requiring complex calculation and
                                 analysis.”
                              </p>
                           </div>
                        </div>
                     </div>
                     <div class="testimonial__item">
                        <div class="row d-flex justify-content-center">
                           <div class="col-xl-9 col-lg-10">
                              <p>“4. Fast and accurate at solving mental math problems involving addition,
                                 subtraction, multiplication, division and percentages but without high-level
                                 skills that might be required in jobs requiring complex calculation and
                                 analysis.”
                              </p>
                           </div>
                        </div>
                     </div>
                     <div class="testimonial__item">
                        <div class="row d-flex justify-content-center">
                           <div class="col-lg-9">
                              <p>“5. Fast and accurate at solving mental math problems involving addition,
                                 subtraction, multiplication, division and percentages but without high-level
                                 skills that might be required in jobs requiring complex calculation and
                                 analysis.”
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row d-flex justify-content-center">
               <div class="col-xl-6 col-lg-8 col-md-7 col-sm-10 ">
                  <div class="testimonial__client">
                     <div class="testimonial__client__item add">
                        <div class="testimonial__client__pic">
                           <img src="img/testimonial/ta-1.png" alt="">
                        </div>
                        <div class="testimonial__client__text">
                           <h5>Renee Calhoun</h5>
                           <span>CEO Woolley</span>
                        </div>
                     </div>
                     <div class="testimonial__client__item">
                        <div class="testimonial__client__pic">
                           <img src="img/testimonial/ta-2.png" alt="">
                        </div>
                        <div class="testimonial__client__text">
                           <h5>Renee Calhoun</h5>
                           <span>CEO Woolley</span>
                        </div>
                     </div>
                     <div class="testimonial__client__item">
                        <div class="testimonial__client__pic">
                           <img src="img/testimonial/ta-3.png" alt="">
                        </div>
                        <div class="testimonial__client__text">
                           <h5>Renee Calhoun</h5>
                           <span>CEO Woolley</span>
                        </div>
                     </div>
                     <div class="testimonial__client__item">
                        <div class="testimonial__client__pic">
                           <img src="img/testimonial/ta-4.png" alt="">
                        </div>
                        <div class="testimonial__client__text">
                           <h5>Renee Calhoun</h5>
                           <span>CEO Woolley</span>
                        </div>
                     </div>
                     <div class="testimonial__client__item">
                        <div class="testimonial__client__pic">
                           <img src="img/testimonial/ta-5.png" alt="">
                        </div>
                        <div class="testimonial__client__text">
                           <h5>Renee Calhoun</h5>
                           <span>CEO Woolley</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Testimonial Section End -->
      <!-- Call To Action Section Begin -->
      <!--<section class="callto spad set-bg" data-setbg="img/call-bg.jpg">-->
      <!--   <div class="container">-->
      <!--      <div class="row d-flex justify-content-center">-->
      <!--         <div class="col-lg-10 text-center">-->
      <!--            <div class="callto__text">-->
      <!--               <span>Why choose us?</span>-->
      <!--               <h2>Our ability to bring outstanding results to our customers.</h2>-->
      <!--               <a href="#" class="primary-btn">Contact Us</a>-->
      <!--            </div>-->
      <!--         </div>-->
      <!--      </div>-->
      <!--   </div>-->
      <!--</section>-->
      <!-- Call To Action Section End -->
      @endsection