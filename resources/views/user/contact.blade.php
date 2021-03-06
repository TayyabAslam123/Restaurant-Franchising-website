 @extends('user.master')
@section('main')
  <!-- Breadcrumb Section Begin -->
      <div class="breadcrumb-option spad set-bg" data-setbg="{{asset('img/breadcrumb-bg.jpg')}}">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 text-center">
                  <div class="breadcrumb__text">
                     <h2>Contact Us</h2>
                     <div class="breadcrumb__links">
                        <a href="./index.html">Home</a>
                        <span>Contact Us</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Breadcrumb Section End -->
      <!-- Contact Section Begin -->
      <section class="contact spad">
         <div class="container">
            <div class="row">
               <div class="col-lg-5">
                  <div class="contact__text">
                     <div class="section-title">
                        <span>Information</span>
                        <h2>Contact Details</h2>
                     </div>
                     <p>OUR ABILITY TO BRING OUTSTANDING RESULTS TO OUR CUSTOMERS.
                     </p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-4 col-md-4 col-sm-6">
                  <div class="contact__widget__item">
                     <div class="contact__widget__item__icon">
                        <img src="{{asset('img/contact/ci-1.png')}}" alt="">
                     </div>
                     <div class="contact__widget__item__text">
                        <h5>Phone Number</h5>
                        <span>Tel:042-36284744</span>
                        <span>UAN:0311-1555177</span>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-6">
                  <div class="contact__widget__item">
                     <div class="contact__widget__item__icon">
                        <img src="{{asset('img/contact/ci-2.png')}}" alt="">
                     </div>
                     <div class="contact__widget__item__text">
                        <h5>Email Address</h5>
                        <span>info@fri-chicks.com</span>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-6">
                  <div class="contact__widget__item last__item">
                     <div class="contact__widget__item__icon">
                        <img src="{{asset('img/contact/ci-3.png')}}" alt="">
                     </div>
                     <div class="contact__widget__item__text">
                        <h5>Office Location</h5>
                        <span>303, Alfalah Building, The Mall,Lahore - 54000 Pakistan</span>
                     </div>
                  </div>
               </div>
            </div>
            <div class="map">
               <!--<iframe-->
               <!--   src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12087.069761554938!2d-74.2175599360452!3d40.767139456514954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c254b5958982c3%3A0xb6ab3931055a2612!2sEast%20Orange%2C%20NJ%2C%20USA!5e0!3m2!1sen!2sbd!4v1581710470843!5m2!1sen!2sbd"-->
               <!--   height="460" style="border:0;" allowfullscreen=""></iframe>-->
                  <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=1110&amp;height=460&amp;hl=en&amp;q=Al-Falah Building, Shahrah-e-Quaid-e-Azam, Garhi Shahu, Lahore, Punjab 54000, Pakistan&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.fnfgo.com/">Friday Night Funkin Mods</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:460px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:460px;}.gmap_iframe {height:460px!important;}</style></div>
            </div>
            <div class="row">
               <div class="col-lg-5">
                  <div class="contact__form__text">
                     <div class="section-title">
                        <span>Connect with us</span>
                        <h2>Get in touch</h2>
                     </div>
                     <p>OUR ABILITY TO BRING OUTSTANDING RESULTS TO OUR CUSTOMERS.
                     </p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-8">
                  <div class="contact__form">
                     <form action="#" id="myform">
                     <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                        <div class="row">
                           <div class="col-lg-6 col-md-6 col-sm-6">
                              <input type="text" placeholder="Name" maxlength="100" name="name">
                           </div>
                           <div class="col-lg-6 col-md-6 col-sm-6">
                              <input type="text" placeholder="Email" maxlength="100" name="email">
                           </div>
                           <div class="col-lg-12">
                              <textarea placeholder="Message" maxlength="1000" name="message"></textarea>
                              <button type="submit" class="site-btn">Send Message</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Contact Section End -->
      @endsection
      @section('scripts')
<script>
	$('#myform').submit(function(e) {
	e.preventDefault();
	  var suc_func = function(msg) {

		  Swal.fire(
		  'THANKS !',
		  'For contacting us',
		  'success'
		 )
	  };
		fetch2("{{url('admin/contact')}}",$('form').serialize(),"POST", "JSON",suc_func, false, false, false);

	});
  </script>
@endsection