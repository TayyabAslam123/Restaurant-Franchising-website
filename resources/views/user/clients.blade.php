  @extends('user.master')
@section('main')
     <!-- Breadcrumb Section Begin -->
     <div class="breadcrumb-option spad set-bg" data-setbg="img/breadcrumb-bg.jpg">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 text-center">
               <div class="breadcrumb__text">
                  <h2>Our Clients</h2>
                  <div class="breadcrumb__links">
                     <a href="{{url('/')}}">Home</a>
                     <span>Our Clients</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Breadcrumb Section End -->

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
      <section class="callto spad set-bg" data-setbg="img/call-bg.jpg">
         <div class="container">
            <div class="row d-flex justify-content-center">
               <div class="col-lg-10 text-center">
                  <div class="callto__text">
                     <span>Why choose us?</span>
                     <h2>Our ability to bring outstanding results to our customers.</h2>
                     <a href="#" class="primary-btn">Contact Us</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Call To Action Section End -->
      @endsection