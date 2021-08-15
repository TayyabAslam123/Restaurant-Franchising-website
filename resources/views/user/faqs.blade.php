@extends('user.master')
@section('main')
	<!-- Breadcrumb Section Begin -->
      <div class="breadcrumb-option spad set-bg" data-setbg="img/breadcrumb-bg.jpg">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 text-center">
                  <div class="breadcrumb__text">
                     <h2>Give Your Suggestions and feedback</h2>
                     <div class="breadcrumb__links">
                        <a href="{{url('/')}}">Home</a>
                        <span>FAQ's</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Breadcrumb Section End -->
      <!-- About Page Section Begin -->
      <section class="about-page spad faq">
         <div class="container">
            <div class="row text-center">
               <div class="col-lg-12 col-md-12">
                  <div class="about__text about__page__text">
                     <div class="section-title">
                        <span>Give your Positive</span>
                        <h2>Suggestions</h2>
                     </div>
                     <div class="about__para__text">
                        <p>As you might expect of a company that began as a high-end interiors contractor.</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-12 col-md-12">
                  <div class="container-fluid">
                     <form action="#" method="POST" id="myform1">
                     <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                     <input type="hidden" name="type" value="suggestion">
                        <div class="row">
                           <div class="col-md-3">
                              <label for="name">First Name</label>
                           </div>
                           <div class="col-md-9">
                              <input type="text" id="name" name="username" placeholder="Your name.." required>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-3">
                              <label for="email">Email</label>
                           </div>
                           <div class="col-md-9">
                              <input type="email" id="email" name="useremail" placeholder="name@gmail.com"required>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-3">
                              <label for="phone">Phone No</label>
                           </div>
                           <div class="col-md-9">
                              <input type="tel" id="phone" name="userphone" placeholder="0321 0123456"required>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-3">
                              <label for="city">City</label>
                           </div>
                           <div class="col-md-9">
                              <select id="city" name="usercity" required>
                                 <option value="australia">Australia</option>
                                 <option value="canada">Canada</option>
                                 <option value="usa">USA</option>
                              </select>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-3">
                              <label for="feedback">Feedback<br>Suggestions</label>
                           </div>
                           <div class="col-md-9">
                              <textarea id="subject"  name="feedback" placeholder="Write something.." rows="6" cols="30"></textarea>
                           </div>
                        </div>
                        <div class="row">
                           <input class="bg-warning text-danger font-weight-bold" type="submit" value="Submit">
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
         <hr>
         <div class="container">
            <div class="row text-center">
               <div class="col-lg-12 col-md-12">
                  <div class="about__text about__page__text">
                     <div class="section-title">
                        <span>Give us your crucial</span>
                        <h2>Feedback</h2>
                     </div>
                     <div class="about__para__text">
                        <p>As you might expect of a company that began as a high-end interiors contractor.</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-12 col-md-12">
                  <div class="container-fluid">
                  <form action="#" method="POST" id="myform2">
                     <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                     <input type="hidden" name="type" value="feedback">
                        <div class="row">
                           <div class="col-md-3">
                              <label for="name">Name</label>
                           </div>
                           <div class="col-md-9">
                              <input type="text" id="name" name="name" placeholder="Your name.." required>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-3">
                              <label for="email">Email</label>
                           </div>
                           <div class="col-md-9">
                              <input type="email" id="email" name="email" placeholder="name@gmail.com"required>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-3">
                              <label for="phone">Phone No</label>
                           </div>
                           <div class="col-md-9">
                              <input type="tel" id="phone" name="phone" placeholder="0321 0123456"required>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-4">
                              Are you Satisfied With Our Service
                           </div>
                           <div class="col-md-4">
                              <input type="radio" id="yes" name="service" value="satisfied">
                              <label for="yes">Yes</label>
                           </div>
                           <div class="col-md-4">
                              <input type="radio" id="no" name="service" value="not satisfied">
                              <label for="no">No</label>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-4">
                              Are You Satisfied With Our Taste
                           </div>
                           <div class="col-md-4">
                              <input type="radio" id="yes1" name="taste" value="satisfied">
                              <label for="yes1">Yes</label>
                           </div>
                           <div class="col-md-4">
                              <input type="radio" id="no1" name="taste" value="not satisfied">
                              <label for="no1">No</label>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-4">
                              Are You Satisfied With Our Presentation
                           </div>
                           <div class="col-md-4">
                              <input type="radio" id="yes2" name="presentation" value="satisfied">
                              <label for="yes2">Yes</label>
                           </div>
                           <div class="col-md-4">
                              <input type="radio" id="no2" name="presentation" value="not satisfied">
                              <label for="no2">No</label>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-4">
                              Are You Satisfied With Our Quality
                           </div>
                           <div class="col-md-4">
                              <input type="radio" id="yes3" name="quality" value="satisfied">
                              <label for="yes3">Yes</label>
                           </div>
                           <div class="col-md-4">
                              <input type="radio" id="no3" name="quality" value="not satisfied">
                              <label for="no3">No</label>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-4">
                              Are You Satisfied With Our Management
                           </div>
                           <div class="col-md-4">
                              <input type="radio" id="yes4" name="managment" value="satisfied">
                              <label for="yes4">Yes</label>
                           </div>
                           <div class="col-md-4">
                              <input type="radio" id="no4" name="managment" value="not satisfied">
                              <label for="no4">No</label>
                           </div>
                        </div>
                        <div class="row">
                           <input class="bg-warning text-danger font-weight-bold" type="submit" value="Submit">
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- About Page Section End -->
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

         @section('scripts')
<script>
	$('#myform1').submit(function(e) {
	e.preventDefault();
	  var suc_func = function(msg) {

		  Swal.fire(
		  'THANKS !',
		  'For your suggestions',
		  'success'
		 )
	  };
		fetch2("{{url('admin/faq')}}",$(this).serialize(),"POST", "JSON",suc_func, false, false, false);

	});
  </script>
  <script>
	$('#myform2').submit(function(e) {
	e.preventDefault();
	  var suc_func = function(msg) {

		  Swal.fire(
		  'THANKS !',
		  'For your feedback',
		  'success'
		 )
	  };
		fetch2("{{url('admin/faq')}}",$(this).serialize(),"POST", "JSON",suc_func, false, false, false);

	});
  </script>
@endsection