<!DOCTYPE html>
<html lang="zxx">
   <head>
       <link rel="icon" href="img/favi.png" type="image/gif" sizes="16x16">
      <meta charset="UTF-8">
      <meta name="description" content="FC-Frichicks">
      <meta name="keywords" content="FC,Frichicks,fastfood,Pizza,Burger">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>FC-FriChicks</title>
      <!-- Google Font -->
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
         rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Aldrich&display=swap" rel="stylesheet">
      <!-- Css Styles -->
      <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">
      <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" type="text/css">
      <link rel="stylesheet" href="{{asset('css/elegant-icons.css')}}" type="text/css">
      <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}" type="text/css">
      <link rel="stylesheet" href="{{asset('css/slicknav.min.css')}}" type="text/css">
      <link rel="stylesheet" href="{{asset('css/slick.css')}}" type="text/css">
      <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
   <!--sweet alerts-->
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

   </head>
   <body>
      <!-- Page Preloder -->
      <div id="preloder">
         <div class="loader"></div>
      </div>
      <!-- Offcanvas Menu Begin -->
      <div class="offcanvas-menu-overlay"></div>
      <div class="offcanvas-menu-wrapper">
         <div class="offcanvas__logo">
            <a href="{{url('/')}}"><img src="{{asset('img/logo.png')}}" alt=""></a>
         </div>
         <div id="mobile-menu-wrap"></div>
         <!-- <div class="offcanvas__widget">
            <span>Call us for any questions</span>
            <h4>+01 123 456 789</h4>
            </div> -->
      </div>
      <!-- Offcanvas Menu End -->
     <!-- Header Section Begin -->
     <header class="header">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-4">
                  <div class="header__logo">
                     <a href="https://fri-chicks.com/"><img src="img/logo.png" alt=""></a>
                  </div>
               </div>
               <div class="col-lg-8">
               <nav class="header__menu mobile-menu">
                     <ul>
                        <li class="{{Request::path()=='/'?'active':''}}"><a href="{{url('/')}}">Home</a></li>
                        <li class="{{Request::path()=='about'?'active':''}}"><a href="{{url('/about')}}">About</a></li>
                        <li class="{{Request::path()=='get-frenchise'?'active':''}}"><a href="{{url('/get-frenchise')}}">Get Franchise</a></li>
                        <li class="{{Request::path()=='gallery'?'active':''}}"><a href="{{url('/gallery')}}">Gallery</a></li>
                        <li class="{{Request::path()=='menu'?'active':''}}"><a href="{{url('/menu')}}">Menu</a></li>
                        <li class="{{Request::path()=='contact-us'?'active':''}}"><a href="{{url('/contact-us')}}">Contact Us</a></li>
                        <li>
                           <a href="#">More</a>
                           <ul class="dropdown">
                                <li ><a href="{{url('/our-vendors')}}">Our Vendors</a></li>
                              <li><a href="{{url('/our-clients')}}">Our Brands</a></li>
                              <li><a href="{{url('/profile')}}">Profile</a></li>
                              <li><a href="{{url('/faqs')}}">FAQ's</a></li>
                              <li><a href="{{url('/news')}}">News</a></li>
                              <li><a href="{{url('/careers')}}">Careers</a></li>
                              <li ><a href="{{url('/downloads')}}">Downloads</a></li>
                              <li ><a href="{{url('/login')}}">Login</a></li>
                             

                           </ul>
                        </li>
                        <li class="order-o"><a class="button-o" data-toggle="modal" data-target="#exampleModal" href="./contact.html">Order Now</a></li>
                     </ul>
                  </nav>
               </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
         </div>
      </header>
      <!-- Header Section End -->
      <!-- Model -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title text-center" id="exampleModalLabel">Fill The Form & Get Free Membership Card</h5>
               </div>
               <div class="modal-body faq">
                  <div class="container">
                     <form action="#" id="orderform">
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
                              <label for="city">City</label>
                           </div>
                           <div class="col-md-9">
                              <select id="city" name="city" required>
                                 <option value="lahore">Lahore</option>
                                 <option value="faisalabad">Faisalabad</option>
                                 <option value="islamabad">Islamabad</option>
                              </select>
                           </div>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-warning btn-block">Submit to get discount</button>
                     </form>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

               </div>
            </div>
         </div>
      </div>

      @yield('main')
      <!-- Footer Section Begin -->
      <footer class="footer set-bg" data-setbg="{{asset('img/footer-bg.jpg')}}">
         <div class="container">
            <div class="footer__top">
               <div class="row">
                  <div class="col-lg-8 col-md-6">
                     <div class="footer__top__text">
                        <h2>Ready To Work With Us?</h2>
                     </div>
                  </div>

               </div>
            </div>
            <div class="row text-white" >
               <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="footer__about">
                     <div class="footer__logo">
                        <a href="#"><img src="{{asset('img/logo.png')}}" alt=""></a>
                     </div>
                     <p style="text-align:left;!important">ESTABLISHED IN PAKISTAN 2002,
PAKISTAN'S FASTEST GROWING FASTFOOD BRAND</p>


                  </div>
               </div>
               <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                  <div class="footer__widget">
                     <h6>Useful links</h6>
                     <ul>
                        <li><a href="{{url('/about')}}">About Us</a></li>
                        <li><a href="{{url('/get-frenchise')}}">Get Franchise</a></li>
                        <li><a href="{{url('/gallery')}}">Our Gallery</a></li>
                        <li><a href="{{url('/menu')}}">Menu</a></li>
                        <li><a href="{{url('/contact-us')}}">Contact Us</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-2 col-md-3 col-sm-6">
                  <div class="footer__widget">
                     <h6>Services</h6>
                     <ul>

                        <li><a href="{{url('/profile')}}">Profile</a></li>
                        <li><a href="{{url('/news')}}">News</a></li>
                        <li><a href="{{url('/careers')}}">Careers</a></li>
                        <li><a href="{{url('/downloads')}}">Downloads</a></li>
                        <li><a href="{{url('/faqs')}}">Faqs</a></li>
                        <!--<li><a href="{{url('/admin/dashboard')}}">Login</a></li>-->
                     </ul>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-6">
                  <div class="footer__address">
                     <h6>Corporate Office</h6>
                     <p>303, Alfalah Building,
The Mall,<br /> Lahore - 54000
Pakistan</p>
                     <ul>
                        <li>Info@fri-chicks.com</li>
                        <li>Tel:042-36284744</li>
                        <li>UAN:0311-1555177</li>
                     </ul>
                      <div class="footer__social">
                        <a href="https://www.facebook.com/FriChicksOfficial/"><i class="fa fa-facebook"></i></a> &nbsp;&nbsp;&nbsp;
                        <a href="https://www.twitter.com/FriChicksOfficial/"><i class="fa fa-twitter"></i></a>&nbsp;&nbsp;&nbsp;
                        <a href="https://www.instagram.com/FriChicksOfficial/"><i class="fa fa-instagram"></i></a>&nbsp;&nbsp;&nbsp;
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="row text-white">
                  <div class="col-lg-12 col-md-7">
                     <div class="copyright__text">
                        <p>
                           Copyright © <script>
                              document.write(new Date().getFullYear());
                           </script> All rights reserved | This website is design <i class="fa fa-heart-o"
                              aria-hidden="true"></i> by <a href="https://gigacreatives.com"
                              target="_blank">Giga Creatives</a>
</p>
                     </div>
                  </div>

               </div>
            </div>
         </div>
      </footer>
      <!-- Footer Section End -->
      <!-- Js Plugins -->
      <script src="{{asset('js/application.js')}}"></script>
      <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
      <script src="{{asset('js/bootstrap.min.js')}}"></script>
      <script src="{{asset('js/jquery.slicknav.js')}}"></script>
      <script src="{{asset('js/owl.carousel.min.js')}}"></script>
      <script src="{{asset('js/slick.min.js')}}"></script>
      <script src="{{asset('js/main.js')}}"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>

    <script>
	$('#orderform').submit(function(e) {
	e.preventDefault();
	  var suc_func = function(msg) {
      $("#exampleModal").modal('hide');

		  Swal.fire(
		  'GREAT !',
		  'Submitted Successfully',
		  'success'
		 );
       setTimeout(function(){ window.location.href = "https://order.fri-chicks.com/"}, 2000);
      ;
	  };

		fetch2("{{url('admin/order')}}",$(this).serialize(),"POST", "JSON",suc_func, false, false, false);

	});
  </script>
      @yield('scripts')


   </body>
</html>
