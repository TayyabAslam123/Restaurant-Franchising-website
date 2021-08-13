
	 @extends('user.master')
@section('main')
	<!-- Breadcrumb Section Begin -->
		<div class="breadcrumb-option spad set-bg" data-setbg="img/breadcrumb-bg.jpg">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 text-center">
                  <div class="breadcrumb__text">
                     <h2>Our Profile</h2>
                     <div class="breadcrumb__links">
                        <a href="{{url('/')}}">Home</a>
                        <span>our profile</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Breadcrumb Section End -->
      <!-- profile start -->

      <section class="about-page spad">
      <div class="container">
         <div class="row text-center">
            <div class="col-lg-12 col-md-12">
               <div class="about__text about__page__text">
                  <div class="section-title">
                     <span>Kindly look at our </span>
                     <h2>Company Profile</h2>
                  </div>
               </div>
            </div>
         </div>
         <div class="row text-center pt-5 pb-3">
            <div class="col-md-12 ">
               <a href="{{asset('img/FrichicksProfile.pdf')}}" download>

                  <h3 class="p-3">Click Here To Download Company Profile </h3>
               </a>
            </div>
         </div>
      </div>
      <!-- profile end -->
			@endsection