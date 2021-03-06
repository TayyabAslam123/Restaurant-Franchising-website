      @extends('user.master')
@section('main')

         <!-- Breadcrumb Section Begin -->
         <div class="breadcrumb-option spad set-bg" data-setbg="img/breadcrumb-bg.jpg">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 text-center">
                  <div class="breadcrumb__text">
                     <h2>Get Franchise</h2>
                     <div class="breadcrumb__links">
                        <a href="{{url('/')}}">Home</a>
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
                  <form action="#" method="POST" role="form" id="myform">
                  <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
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
                           <input type="text" class="form-control wizard-required" id="fname" name="name" >
                           <label for="fname" class="wizard-form-text-label">Full Name*</label>
                           <div class="wizard-form-error"></div>
                        </div>
                        <div class="form-group">
                           <input type="file" class="form-control wizard-required" id="img">
                           <label for="fname" class="wizard-form-text-label"></label>
                           <div class="wizard-form-error"></div>
                        </div>
                        <div class="form-group">
                           <input type="email" class="form-control wizard-required" id="email" name="email">
                           <label for="email" class="wizard-form-text-label">Email Name*</label>
                           <div class="wizard-form-error"></div>
                        </div>
                        <!-- <div class="form-group">
                           Gender
                           <div class="wizard-form-radio">
                              <input name="radio-name" id="radio1" type="radio">
                              <label for="radio1">Male</label>
                           </div>
                           <div class="wizard-form-radio">
                              <input name="radio-name" id="radio2" type="radio">
                              <label for="radio2">Female</label>
                           </div>
                        </div> -->
                        <div class="form-group">
                           <input type="number" class="form-control wizard-required" id="idnumber" name="id">
                           <label for="idnumber" class="wizard-form-text-label">ID Number*</label>
                           <div class="wizard-form-error"></div>
                        </div>
                        <div class="form-group">
                           <input type="tel" class="form-control wizard-required" id="cellnumber" name="phone">
                           <label for="cellnumber" class="wizard-form-text-label">Cell Number*</label>
                           <div class="wizard-form-error"></div>
                        </div>
                        <div class="form-group">
                           <input type="tel" class="form-control wizard-required" id="wnumber" name="whatsapp">
                           <label for="wnumber" class="wizard-form-text-label">Whatsapp Number*</label>
                           <div class="wizard-form-error"></div>
                        </div>
                        <div class="form-group">
                           <input type="text" class="form-control wizard-required" id="address" name="address" maxlength="100">
                           <label for="address" class="wizard-form-text-label">Address*</label>
                           <div class="wizard-form-error"></div>
                        </div>

                        <div class="form-group clearfix">
                           <a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
                        </div>
                     </fieldset>
                     <fieldset class="wizard-fieldset">
                        <h5>Personal Information</h5>
                        <div class="form-group">
                           <input type="text" class="form-control wizard-required" id="dob" name="dob">
                           <label for="dob" class="wizard-form-text-label">Date of Birth*</label>
                           <div class="wizard-form-error"></div>
                        </div>
                        <div class="form-group">
                           <input type="text" class="form-control wizard-required" id="gender" name="gender">
                           <label for="gender" class="wizard-form-text-label">Gender*</label>
                           <div class="wizard-form-error"></div>
                        </div>
                        <div class="form-group">
                           <input type="text" class="form-control wizard-required" id="pob" name="pob">
                           <label for="pob" class="wizard-form-text-label">Place of Birth*</label>
                           <div class="wizard-form-error"></div>
                        </div>
                        <div class="form-group">
                           <input type="number" class="form-control wizard-required" id="age" name="age">
                           <label for="age" class="wizard-form-text-label">Age*</label>
                           <div class="wizard-form-error"></div>
                        </div>
                        <div class="form-group">
                           <input type="text" class="form-control wizard-required" id="mst" name="martial_status">
                           <label for="mst" class="wizard-form-text-label">Marital Status*</label>
                           <div class="wizard-form-error"></div>
                        </div>
                        <div class="form-group">
                           <input type="text" class="form-control wizard-required" id="citizen" name="citizenship">
                           <label for="citizen" class="wizard-form-text-label">Citizen Ship*</label>
                           <div class="wizard-form-error"></div>
                        </div>
                        <div class="form-group clearfix">
                           <a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
                           <a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
                        </div>
                     </fieldset>
                     <fieldset class="wizard-fieldset">
                        <h5>Prefrence Information</h5>
                        <div class="form-group">
                           <input type="text" class="form-control wizard-required" id="appliedf" name="applied_for">
                           <label for="appliedf" class="wizard-form-text-label">Applied Francehise Location/Area*</label>
                           <div class="wizard-form-error"></div>
                        </div>
                        <div class="form-group">
                           <input type="text" class="form-control wizard-required" id="olp" name="other_preference">
                           <label for="olp" class="wizard-form-text-label">Other Location Prefrence*</label>
                           <div class="wizard-form-error"></div>
                        </div>
                        <div class="form-group">
                           <input type="text" class="form-control wizard-required" id="tax" name="tax">
                           <label for="tax" class="wizard-form-text-label">Tax ID/ NTN*</label>
                           <div class="wizard-form-error"></div>
                        </div>
                        <div class="form-group">
                           <input type="text" class="form-control wizard-required" id="business" name="occupation">
                           <label for="business" class="wizard-form-text-label">Occupation/Business*</label>
                           <div class="wizard-form-error"></div>
                        </div>
                        <div class="form-group">
                           <input type="text" class="form-control wizard-required" id="pd" name="physical_disability">
                           <label for="pd" class="wizard-form-text-label">Physical Disablity/ Limitations*</label>
                           <div class="wizard-form-error"></div>
                        </div>
                        <div class="form-group clearfix">
                           <a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
                           <a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
                        </div>
                     </fieldset>
                     <fieldset class="wizard-fieldset">
                     <h5>Franchise Information</h5>
                        <div class="form-group">
                           Are You Doing Any<br> Business?
                           <div class="wizard-form-radio">
                              <input id="byes" name="doing_business" value="yes" type="radio" required>
                              <label for="byes">YES</label>
                           </div>
                           <div class="wizard-form-radio">
                              <input  id="bno" name="doing_business" value="no" type="radio" required>
                              <label for="bno">NO</label>
                           </div>
                        </div>

                        <div class="form-group">
                           Are You Doing Any<br> Food Business?
                           <div class="wizard-form-radio">
                              <input  id="foodyes" name="food_business" value="yes"  type="radio" required>
                              <label for="foodyes">YES</label>
                           </div>
                           <div class="wizard-form-radio">
                              <input  id="foodno" name="food_business" value="no"  type="radio" required>
                              <label for="foodno">NO</label>
                           </div>
                        </div>

                        <div class="form-group">
                           Is this the first <br> time you are applying for a franchise?
                           <div class="wizard-form-radio">
                              <input  id="fyes" name="apply_frenchise" value="yes"  type="radio" required>
                              <label for="fyes">YES</label>
                           </div>
                           <div class="wizard-form-radio">
                              <input  id="fno" name="apply_frenchise" value="no"  type="radio" required>
                              <label for="fno">NO</label>
                           </div>
                        </div>
                        
                        <div class="form-group clearfix">
                           <a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
                           <input type="submit" value="submit" class="form-wizard-submit float-right">
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
            @foreach(getFrenchises() as $var)
            <div class="col-lg-4 col-md-6">
               <div class="team__item set-bg" data-setbg="{{Storage::url('public/franchises/'.$var->image)}}">
                  <div class="team__text">
                     <div class="team__title">
                        <h5>{{$var->title}}</h5>

                     </div>
                     <div class="team__social">
                        <p><i class="fa fa-map"></i>{{$var->address}}</p>

                     </div>
                  </div>
               </div>
            </div>
            @endforeach

         </div>
      </section>
      <!-- Franchise Cards end -->
      <!-- Call To Action Section Begin -->
      <!--<section class="callto spad set-bg" data-setbg="img/call-bg.jpg">-->
      <!--   <div class="container">-->
      <!--      <div class="row d-flex justify-content-center">-->
      <!--         <div class="col-lg-10 text-center">-->
      <!--            <div class="callto__text">-->
      <!--               <span>Why choose us?</span>-->
      <!--               <h2>Our ability to bring outstanding results to our customers.</h2>-->
      <!--               <a href="{{url('/contact-us')}}" class="primary-btn">Contact Us</a>-->
      <!--            </div>-->
      <!--         </div>-->
      <!--      </div>-->
      <!--   </div>-->
      <!--</section>-->
      <!-- Call To Action Section End -->
      @endsection
      @section('scripts')
      <script>
	$('#myform').submit(function(e) {
	e.preventDefault();
	  var suc_func = function(msg) {

		  Swal.fire(
		  'THANKS !',
		  'For Submission',
		  'success'
		 )
	  };
		fetch2("{{url('admin/get-frenchise')}}",$(this).serialize(),"POST", "JSON",suc_func, false, false, false);

	});
  </script>
  @endsection