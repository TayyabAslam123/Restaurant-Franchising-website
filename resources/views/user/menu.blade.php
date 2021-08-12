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
      <section class="about-page menu">
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
         <div class="row">
            <ul class="nav nav-tabs menu_tab mb-4" id="myTab" role="tablist">
               <li class="nav-item">
                  <a class="nav-link active" id="breakfast-tab" data-toggle="tab" href="#breakfast" role="tab">Breakfast</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" id="lunch-tab" data-toggle="tab" href="#lunch" role="tab">Lunch</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" id="dinner-tab" data-toggle="tab" href="#dinner" role="tab">Dinner</a>
               </li>
            </ul>
         </div>
         <div class="row">
            <div class="tab-content col-lg-12" id="myTabContent">
               <div class="tab-pane fade show active" id="breakfast" role="tabpanel" aria-labelledby="breakfast-tab">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="single_menu">
                           <img src="https://i.imgur.com/kbpceNv.jpg" alt="burger">
                           <div class="menu_content">
                              <h4>Chicken Burger  <span>$24</span></h4>
                              <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                           </div>
                        </div>
                        <div class="single_menu">
                           <img src="https://i.imgur.com/lYKUORL.jpg" alt="black coffee">
                           <div class="menu_content">
                              <h4>Black coffee <span>$20</span></h4>
                              <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                           </div>
                        </div>
                        <div class="single_menu">
                           <img src="https://i.imgur.com/AXAHrf6.jpg" alt="fried rice">
                           <div class="menu_content">
                              <h4>Fried Rice  <span>$45</span></h4>
                              <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                           </div>
                        </div>
                        <div class="single_menu">
                           <img src="https://i.imgur.com/YkDi8Nb.jpg" alt="meat">
                           <div class="menu_content">
                              <h4>meat  <span>$24</span></h4>
                              <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="single_menu">
                           <img src="https://i.imgur.com/TAq7lDR.jpg" alt="burger">
                           <div class="menu_content">
                              <h4>Chicken Burger  <span>$24</span></h4>
                              <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                           </div>
                        </div>
                        <div class="single_menu">
                           <img src="https://i.imgur.com/lYKUORL.jpg" alt="black coffee">
                           <div class="menu_content">
                              <h4>Black coffee <span>$20</span></h4>
                              <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                           </div>
                        </div>
                        <div class="single_menu">
                           <img src="https://i.imgur.com/AXAHrf6.jpg" alt="fried rice">
                           <div class="menu_content">
                              <h4>Fried Rice  <span>$45</span></h4>
                              <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                           </div>
                        </div>
                        <div class="single_menu">
                           <img src="https://i.imgur.com/YkDi8Nb.jpg" alt="meat">
                           <div class="menu_content">
                              <h4>meat  <span>$24</span></h4>
                              <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane fade" id="lunch" role="tabpanel" aria-labelledby="lunch-tab">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="single_menu">
                           <img src="https://i.imgur.com/Aowufa1.jpg" alt="pizza">
                           <div class="menu_content">
                              <h4>12" Pizza  <span>$35</span></h4>
                              <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                           </div>
                        </div>
                        <div class="single_menu">
                           <img src="https://i.imgur.com/DJlmZDJ.jpg" alt="salad">
                           <div class="menu_content">
                              <h4>Salad <span>$20</span></h4>
                              <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                           </div>
                        </div>
                        <div class="single_menu">
                           <img src="https://i.imgur.com/knnQm7e.jpg" alt="green tea">
                           <div class="menu_content">
                              <h4>green tea <span>$15</span></h4>
                              <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                           </div>
                        </div>
                        <div class="single_menu">
                           <img src="https://i.imgur.com/YkDi8Nb.jpg" alt="meat">
                           <div class="menu_content">
                              <h4>meat  <span>$24</span></h4>
                              <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="single_menu">
                           <img src="https://i.imgur.com/kbpceNv.jpg" alt="burger">
                           <div class="menu_content">
                              <h4>Chicken Burger  <span>$24</span></h4>
                              <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                           </div>
                        </div>
                        <div class="single_menu">
                           <img src="https://i.imgur.com/lYKUORL.jpg" alt="black coffee">
                           <div class="menu_content">
                              <h4>Black coffee <span>$20</span></h4>
                              <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                           </div>
                        </div>
                        <div class="single_menu">
                           <img src="https://i.imgur.com/AXAHrf6.jpg" alt="fried rice">
                           <div class="menu_content">
                              <h4>Fried Rice  <span>$45</span></h4>
                              <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                           </div>
                        </div>
                        <div class="single_menu">
                           <img src="https://i.imgur.com/YkDi8Nb.jpg" alt="meat">
                           <div class="menu_content">
                              <h4>meat  <span>$24</span></h4>
                              <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane fade" id="dinner" role="tabpanel" aria-labelledby="dinner-tab">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="single_menu">
                           <img src="https://i.imgur.com/kbpceNv.jpg" alt="burger">
                           <div class="menu_content">
                              <h4>Chicken Burger  <span>$24</span></h4>
                              <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                           </div>
                        </div>
                        <div class="single_menu">
                           <img src="https://i.imgur.com/lYKUORL.jpg" alt="black coffee">
                           <div class="menu_content">
                              <h4>Black coffee <span>$20</span></h4>
                              <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                           </div>
                        </div>
                        <div class="single_menu">
                           <img src="https://i.imgur.com/AXAHrf6.jpg" alt="fried rice">
                           <div class="menu_content">
                              <h4>Fried Rice  <span>$45</span></h4>
                              <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                           </div>
                        </div>
                        <div class="single_menu">
                           <img src="https://i.imgur.com/YkDi8Nb.jpg" alt="meat">
                           <div class="menu_content">
                              <h4>meat  <span>$24</span></h4>
                              <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="single_menu">
                           <img src="https://i.imgur.com/kbpceNv.jpg" alt="burger">
                           <div class="menu_content">
                              <h4>Chicken Burger  <span>$24</span></h4>
                              <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                           </div>
                        </div>
                        <div class="single_menu">
                           <img src="https://i.imgur.com/lYKUORL.jpg" alt="black coffee">
                           <div class="menu_content">
                              <h4>Black coffee <span>$20</span></h4>
                              <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                           </div>
                        </div>
                        <div class="single_menu">
                           <img src="https://i.imgur.com/AXAHrf6.jpg" alt="fried rice">
                           <div class="menu_content">
                              <h4>Fried Rice  <span>$45</span></h4>
                              <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                           </div>
                        </div>
                        <div class="single_menu">
                           <img src="https://i.imgur.com/YkDi8Nb.jpg" alt="meat">
                           <div class="menu_content">
                              <h4>meat  <span>$24</span></h4>
                              <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a href="#" class=" menu_btn btn btn-danger">view more</a>
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