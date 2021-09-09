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

   @foreach(getcareers() as $var)
  <div class="col-md-4">
    <div class="card">
      <div class="card-body">
        <h2 class="card-title" style="text-align: center;">{{$var->title}}</h2>
        <!-- <img src="img/team/team-1.jpg"> -->
        <p class="card-text">{{$var->description}}</p>
        <button class="btn btn-primary" onclick="mymodal({{$var}})">Apply Now</button>
      </div>
    </div>
  </div>
  @endforeach

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
            <!-- Model -->
            <div class="modal fade" id="career" tabindex="-1" role="dialog" aria-labelledby="careermodal" aria-hidden="true">
               <div class="modal-dialog" role="document">
                  <div class="modal-content">
                     <div class="modal-header">
                        <h3 class="modal-title text-center" id="careermodal" style="text-align: center;">Apply Now</h3>
                     </div>
                     <div class="modal-body faq">
                        <div class="container">
                           <form action="#" id="careerform">
                           <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                              <div class="row">
                                 <div class="col-md-3">
                                    <label for="name">Name</label>
                                 </div>
                                 <div class="col-md-9">
                                    <input type="text" id="name" name="name" placeholder="Your name.." maxlength="100" required>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-md-3">
                                    <label for="email">Email</label>
                                 </div>
                                 <div class="col-md-9">
                                    <input type="email" id="email" name="email" maxlength="100" placeholder="name@gmail.com"required>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-md-3">
                                    <label for="phone" name="phone" max >Phone No</label>
                                 </div>
                                 <div class="col-md-9">
                                    <input type="tel" id="phone" name="phone" placeholder="0321 0123456" maxlength="100"  required>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-md-3">
                                    <label for="city">Resume</label>
                                 </div>
                                 <div class="col-md-9">
                                  <input type="file" name="resume" required>
                                 </div>
                              </div>
                              <input type="hidden" name="career_id" id="career_id">
                              <br>
                              <button type="submit" class="btn btn-warning btn-block">APPLY</button>
                           </form>
                        </div>
                     </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      
                     </div>
                  </div>
               </div>
            </div>
			@endsection

         @section('scripts')
         <script>
         function mymodal(data){
            $('#career_id').val(data.id);
            $('#career').modal('show');

         }     
         </script>
             <script>
               $('#careerform').submit(function(e) {
               e.preventDefault();
                 var suc_func = function(msg) {
                  $("#career").modal('hide');
            
                    Swal.fire(
                    'GREAT !',
                    'Applied Successfully',
                    'success'
                   );
                   
                  ;
                 };
            
                  //fetch2("{{url('admin/applicants')}}",$(this).serialize(),"POST", "JSON",suc_func, false, false, false);
                  fetch_file_d("{{url('admin/applicants')}}", this, "POST", suc_func, false, false, false, false);
               });
              </script>

         @endsection