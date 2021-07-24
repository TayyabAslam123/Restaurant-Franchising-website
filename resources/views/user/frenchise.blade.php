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
                     <h2>Get Franchise</h2>
                     <div class="breadcrumb__links">
                        <a href="./index.html">Home</a>
                        <span>Get Franchise</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Breadcrumb Section End -->
      <section class="wizard-section container spad">
         <div class="row no-gutters">
            <div class="col-lg-12 col-md-12 col-sm-12">
               <div class="form-wizard">
                  <div class="section-title text-center">
                     <span>Get your</span>
                     <h2>Franchise</h2>
                  </div>
                  <form action="" method="post" role="form">
                     <div class="form-wizard-header">
                        <h3>Fill all form field to go next step</h3>
                        <ul class="list-unstyled form-wizard-steps clearfix">
                           <li class="active"><span>1</span></li>
                           <li><span>2</span></li>
                           <li><span>3</span></li>
                           <li><span>4</span></li>
                        </ul>
                     </div>
                     <fieldset class="wizard-fieldset show">
                        <h5>Personal Information</h5>
                        <div class="form-group">
                           <input type="text" class="form-control wizard-required" id="fname">
                           <label for="fname" class="wizard-form-text-label">First Name*</label>
                           <div class="wizard-form-error"></div>
                        </div>
                        <div class="form-group">
                           <input type="text" class="form-control wizard-required" id="lname">
                           <label for="lname" class="wizard-form-text-label">Last Name*</label>
                           <div class="wizard-form-error"></div>
                        </div>
                        <div class="form-group">
                           Gender
                           <div class="wizard-form-radio">
                              <input name="radio-name" id="radio1" type="radio">
                              <label for="radio1">Male</label>
                           </div>
                           <div class="wizard-form-radio">
                              <input name="radio-name" id="radio2" type="radio">
                              <label for="radio2">Female</label>
                           </div>
                        </div>
                        <div class="form-group">
                           <input type="text" class="form-control wizard-required" id="zcode">
                           <label for="zcode" class="wizard-form-text-label">Zip Code*</label>
                           <div class="wizard-form-error"></div>
                        </div>
                        <div class="form-group clearfix">
                           <a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
                        </div>
                     </fieldset>
                     <fieldset class="wizard-fieldset">
                        <h5>Account Information</h5>
                        <div class="form-group">
                           <input type="email" class="form-control wizard-required" id="email">
                           <label for="email" class="wizard-form-text-label">Email*</label>
                           <div class="wizard-form-error"></div>
                        </div>
                        <div class="form-group">
                           <input type="text" class="form-control wizard-required" id="username">
                           <label for="username" class="wizard-form-text-label">User Name*</label>
                           <div class="wizard-form-error"></div>
                        </div>
                        <div class="form-group">
                           <input type="password" class="form-control wizard-required" id="pwd">
                           <label for="pwd" class="wizard-form-text-label">Password*</label>
                           <div class="wizard-form-error"></div>
                           <span class="wizard-password-eye"><i class="far fa-eye"></i></span>
                        </div>
                        <div class="form-group">
                           <input type="password" class="form-control wizard-required" id="cpwd">
                           <label for="cpwd" class="wizard-form-text-label">Confirm Password*</label>
                           <div class="wizard-form-error"></div>
                        </div>
                        <div class="form-group clearfix">
                           <a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
                           <a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
                        </div>
                     </fieldset>
                     <fieldset class="wizard-fieldset">
                        <h5>Bank Information</h5>
                        <div class="form-group">
                           <input type="text" class="form-control wizard-required" id="bname">
                           <label for="bname" class="wizard-form-text-label">Bank Name*</label>
                           <div class="wizard-form-error"></div>
                        </div>
                        <div class="form-group">
                           <input type="text" class="form-control wizard-required" id="brname">
                           <label for="brname" class="wizard-form-text-label">Branch Name*</label>
                           <div class="wizard-form-error"></div>
                        </div>
                        <div class="form-group">
                           <input type="text" class="form-control wizard-required" id="acname">
                           <label for="acname" class="wizard-form-text-label">Account Name*</label>
                           <div class="wizard-form-error"></div>
                        </div>
                        <div class="form-group">
                           <input type="text" class="form-control wizard-required" id="acon">
                           <label for="acon" class="wizard-form-text-label">Account Number*</label>
                           <div class="wizard-form-error"></div>
                        </div>
                        <div class="form-group clearfix">
                           <a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
                           <a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
                        </div>
                     </fieldset>
                     <fieldset class="wizard-fieldset">
                        <h5>Payment Information</h5>
                        <div class="form-group">
                           Payment Type
                           <div class="wizard-form-radio">
                              <input name="radio-name" id="mastercard" type="radio">
                              <label for="mastercard">Master Card</label>
                           </div>
                           <div class="wizard-form-radio">
                              <input name="radio-name" id="visacard" type="radio">
                              <label for="visacard">Visa Card</label>
                           </div>
                        </div>
                        <div class="form-group">
                           <input type="text" class="form-control wizard-required" id="honame">
                           <label for="honame" class="wizard-form-text-label">Holder Name*</label>
                           <div class="wizard-form-error"></div>
                        </div>
                        <div class="row">
                           <div class="col-lg-6 col-md-6 col-sm-6">
                              <div class="form-group">
                                 <input type="text" class="form-control wizard-required" id="cardname">
                                 <label for="cardname" class="wizard-form-text-label">Card Number*</label>
                                 <div class="wizard-form-error"></div>
                              </div>
                           </div>
                           <div class="col-lg-6 col-md-6 col-sm-6">
                              <div class="form-group">
                                 <input type="text" class="form-control wizard-required" id="cvc">
                                 <label for="cvc" class="wizard-form-text-label">CVC*</label>
                                 <div class="wizard-form-error"></div>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-12">Expiry Date</div>
                           <div class="col-lg-4 col-md-4 col-sm-4">
                              <div class="form-group">
                                 <select class="form-control">
                                    <option value="">Date</option>
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                    <option value="">4</option>
                                    <option value="">5</option>
                                    <option value="">6</option>
                                    <option value="">7</option>
                                    <option value="">8</option>
                                    <option value="">9</option>
                                    <option value="">10</option>
                                    <option value="">11</option>
                                    <option value="">12</option>
                                    <option value="">13</option>
                                    <option value="">14</option>
                                    <option value="">15</option>
                                    <option value="">16</option>
                                    <option value="">17</option>
                                    <option value="">18</option>
                                    <option value="">19</option>
                                    <option value="">20</option>
                                    <option value="">21</option>
                                    <option value="">22</option>
                                    <option value="">23</option>
                                    <option value="">24</option>
                                    <option value="">25</option>
                                    <option value="">26</option>
                                    <option value="">27</option>
                                    <option value="">28</option>
                                    <option value="">29</option>
                                    <option value="">30</option>
                                    <option value="">31</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-4 col-sm-4">
                              <div class="form-group">
                                 <select class="form-control">
                                    <option value="">Month</option>
                                    <option value="">jan</option>
                                    <option value="">Feb</option>
                                    <option value="">March</option>
                                    <option value="">April</option>
                                    <option value="">May</option>
                                    <option value="">June</option>
                                    <option value="">Jully</option>
                                    <option value="">August</option>
                                    <option value="">Sept</option>
                                    <option value="">Oct</option>
                                    <option value="">Nov</option>
                                    <option value="">Dec</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-4 col-sm-4">
                              <div class="form-group">
                                 <select class="form-control">
                                    <option value="">Years</option>
                                    <option value="">2019</option>
                                    <option value="">2020</option>
                                    <option value="">2021</option>
                                    <option value="">2022</option>
                                    <option value="">2023</option>
                                    <option value="">2024</option>
                                    <option value="">2025</option>
                                    <option value="">2026</option>
                                    <option value="">2027</option>
                                    <option value="">2028</option>
                                    <option value="">2029</option>
                                    <option value="">2030</option>
                                    <option value="">2031</option>
                                    <option value="">2032</option>
                                    <option value="">2033</option>
                                    <option value="">2034</option>
                                    <option value="">2035</option>
                                    <option value="">2036</option>
                                    <option value="">2037</option>
                                    <option value="">2038</option>
                                    <option value="">2039</option>
                                    <option value="">2040</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                        <div class="form-group clearfix">
                           <a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
                           <a href="javascript:;" class="form-wizard-submit float-right">Submit</a>
                        </div>
                     </fieldset>
                  </form>
               </div>
            </div>
         </div>
      </section>
      <!-- Franchise cards start-->
      <section class="spad container franchise">
         <div class="section-title text-center">
            <span>Our</span>
            <h2>Franchise</h2>
         </div>
         <div class="row">
            <div class="col-lg-4 col-md-6">
               <div class="team__item set-bg" data-setbg="{{asset('img/hero/FriChicksCover.jpg')}}">
                  <div class="team__text">
                     <div class="team__title">
                        <h5>Dolores Webster</h5>
                        <span>CEO & Founder</span>
                     </div>
                     <div class="team__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-6">
               <div class="team__item set-bg" data-setbg="{{asset('img/hero/FriChicksCover.jpg')}}">
                  <div class="team__text">
                     <div class="team__title">
                        <h5>Dana Vaughn</h5>
                        <span>Architect</span>
                     </div>
                     <div class="team__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-6">
               <div class="team__item set-bg" data-setbg="{{asset('img/hero/FriChicksCover.jpg')}}">
                  <div class="team__text">
                     <div class="team__title">
                        <h5>Jonathan Mcdaniel</h5>
                        <span>Architect</span>
                     </div>
                     <div class="team__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-4 col-md-6">
               <div class="team__item set-bg" data-setbg="{{asset('img/hero/FriChicksCover.jpg')}}">
                  <div class="team__text">
                     <div class="team__title">
                        <h5>Dolores Webster</h5>
                        <span>CEO & Founder</span>
                     </div>
                     <div class="team__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-6">
               <div class="team__item set-bg" data-setbg="{{asset('img/hero/FriChicksCover.jpg')}}">
                  <div class="team__text">
                     <div class="team__title">
                        <h5>Dana Vaughn</h5>
                        <span>Architect</span>
                     </div>
                     <div class="team__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-6">
               <div class="team__item set-bg" data-setbg="{{asset('img/hero/FriChicksCover.jpg')}}">
                  <div class="team__text">
                     <div class="team__title">
                        <h5>Jonathan Mcdaniel</h5>
                        <span>Architect</span>
                     </div>
                     <div class="team__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-4 col-md-6">
               <div class="team__item set-bg" data-setbg="{{asset('img/hero/FriChicksCover.jpg')}}">
                  <div class="team__text">
                     <div class="team__title">
                        <h5>Dolores Webster</h5>
                        <span>CEO & Founder</span>
                     </div>
                     <div class="team__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-6">
               <div class="team__item set-bg" data-setbg="{{asset('img/hero/FriChicksCover.jpg')}}">
                  <div class="team__text">
                     <div class="team__title">
                        <h5>Dana Vaughn</h5>
                        <span>Architect</span>
                     </div>
                     <div class="team__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-6">
               <div class="team__item set-bg" data-setbg="{{asset('img/hero/FriChicksCover.jpg')}}">
                  <div class="team__text">
                     <div class="team__title">
                        <h5>Jonathan Mcdaniel</h5>
                        <span>Architect</span>
                     </div>
                     <div class="team__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Franchise Cards end -->
      <!-- Call To Action Section Begin -->
      <section class="callto spad set-bg" data-setbg="{{asset('img/call-bg.jpg')}}">
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