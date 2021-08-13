@extends('user.master')
@section('main')
     <!-- Breadcrumb Section Begin -->
		 <div class="breadcrumb-option spad set-bg" data-setbg="img/breadcrumb-bg.jpg">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 text-center">
                  <div class="breadcrumb__text">
                     <h2>Careers</h2>
                     <div class="breadcrumb__links">
                        <a href="{{url('/')}}">Home</a>
                        <span>Careers</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Breadcrumb Section End -->
     <section class="careers spad pt-5">
        <div class="container">
          <div class="row">
               <div class="col-lg-12 text-center">
                  <div class="section-title">
                     <span>Our</span>
                     <h2>Careers</h2>
                  </div>
               </div>
            </div>
         <div class="row">
  <div class="col-md-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <img src="img/team/team-1.jpg">
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <img src="img/team/team-1.jpg">
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
   <div class="col-md-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <img src="img/team/team-1.jpg">
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
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