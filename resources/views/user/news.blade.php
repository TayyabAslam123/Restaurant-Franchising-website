@extends('user.master')
@section('main')

	 <!-- Breadcrumb Section Begin -->
      <div class="breadcrumb-option spad set-bg" data-setbg="img/breadcrumb-bg.jpg">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 text-center">
                  <div class="breadcrumb__text">
                     <h2>News</h2>
                     <div class="breadcrumb__links">
                        <a href="{{url('/')}}">Home</a>
                        <span>News</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Breadcrumb Section End -->
     <section class="blog spad">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="blog__item__list">
                        <div class="blog__item">
                            <ul>
                                <li>December 20, 2019 </li>
                                <li>By John Doe</li>
                                <li>Planning</li>
                            </ul>
                            <h2>Target and Amazon Shopping List for Home Stagers</h2>
                            <img src="img/blog/blog-1.jpg" alt="">
                            <div class="blog__item__text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Risus commodo viverra maecenas accumsan
                                lacus vel facilisis. </p>

                            </div>
                        </div>

                        <div class="blog__item">
                            <ul>
                                <li>December 20, 2019 </li>
                                <li>By John Doe</li>
                                <li>Planning</li>
                            </ul>
                            <h2>6 Ideas for Team Building & Employee Appreciation for Home Stagers</h2>
                            <img src="img/blog/blog-2.jpg" alt="">
                            <div class="blog__item__text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Risus commodo viverra maecenas accumsan
                                lacus vel facilisis. </p>

                            </div>
                        </div>
                        <div class="blog__item">
                            <ul>
                                <li>December 20, 2019 </li>
                                <li>By John Doe</li>
                                <li>Planning</li>
                            </ul>
                            <h2>How to Find the Best Price Structure for Your Home Staging Services</h2>
                            <img src="img/blog/blog-2.jpg" alt="">
                            <div class="blog__item__text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Risus commodo viverra maecenas accumsan
                                lacus vel facilisis. </p>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="blog__pagination">
                                <a href="#">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <a href="#"><i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
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