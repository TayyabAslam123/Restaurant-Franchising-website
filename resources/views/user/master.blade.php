<!DOCTYPE html>
<html lang="zxx">
   <head>
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
            <a href="#"><img src="{{asset('img/logo.png')}}" alt=""></a>
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
               <div class="col-lg-3">
                  <div class="header__logo">
                     <a href="./index.html"><img src="{{asset('img/logo.png')}}" alt=""></a>
                  </div>
               </div>
               <div class="col-lg-9">
                  <nav class="header__menu mobile-menu">
                     <ul>
                        <li class="active"><a href="{{url('/')}}">Home</a></li>
                        <li><a href="{{url('/about')}}">About us</a></li>
                        <li><a href="{{url('/get-frenchise')}}">Get Frenchise</a></li>
                        <li><a href="{{url('/gallery')}}">Our Gallery</a></li>
                        <li><a href="{{url('/our-vendors')}}">Our Vendors</a></li>
                        <li><a href="{{url('/contact-us')}}">Contact us</a></li>
                        <li>
                           <a href="#">More</a>
                           <ul class="dropdown">
                              <li><a href="./profile.html">Profile</a></li>
                              <li><a href="./faq.html">FAQ's</a></li>
                              <li><a href="./news.html">News</a></li>
                              <li><a href="./warehouse.html">Warehouse</a></li>
                              <li><a href="./careers.html">Careers</a></li>
                              <li><a href="./downloads.html">Downloads</a></li>
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
                  <h5 class="modal-title text-center" id="exampleModalLabel">Fill The Form & Get 25% Discount</h5>
               </div>
               <div class="modal-body faq">
                  <div class="container">
                     <form action="/action_page.php">
                        <div class="row">
                           <div class="col-md-3">
                              <label for="name">Name</label>
                           </div>
                           <div class="col-md-9">
                              <input type="text" id="name" name="firstname" placeholder="Your name.." required>
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
                           <div class="col-md-3">
                              <label for="city">City</label>
                           </div>
                           <div class="col-md-9">
                              <select id="city" name="city" required>
                                 <option value="australia">Australia</option>
                                 <option value="canada">Canada</option>
                                 <option value="usa">USA</option>
                              </select>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-warning">Submit to get discount</button>
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
                  <div class="col-lg-4 col-md-6">
                     <div class="footer__top__newslatter">
                        <form action="#">
                           <input type="text" placeholder="Enter your email...">
                           <button type="submit"><i class="fa fa-send"></i></button>
                        </form>
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
                     <p>7176 Blue Spring Lane <br />Santa Monica, CA 90403</p>
                     <ul>
                        <li>Info@gmail.com</li>
                        <li>+92 123 456 789</li>
                     </ul>
                     <div class="footer__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                  <div class="footer__widget">
                     <h6>Company</h6>
                     <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Get Franchise</a></li>
                        <li><a href="#">Our Gallery</a></li>
                        <li><a href="#">Clients</a></li>
                        <li><a href="#">Contact Us</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-2 col-md-3 col-sm-6">
                  <div class="footer__widget">
                     <h6>Services</h6>
                     <ul>
                        <li><a href="#">News</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Downloads</a></li>
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">Profile</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-6">
                  <div class="footer__address">
                     <h6>Get In Touch</h6>
                     <p>7176 Blue Spring Lane <br />Santa Monica, CA 90403</p>
                     <ul>
                        <li>Info@gmail.com</li>
                        <li>+92 123 456 789</li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="row text-white">
                  <div class="col-lg-8 col-md-7">
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
                  <div class="col-lg-4 col-md-5">
                     <div class="copyright__widget">
                        <a href="#">Terms of use</a>
                        <a href="#">Privacy Policy</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- Footer Section End -->
      <!-- Js Plugins -->
      <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
      <script src="{{asset('js/bootstrap.min.js')}}"></script>
      <script src="{{asset('js/jquery.slicknav.js')}}"></script>
      <script src="{{asset('js/owl.carousel.min.js')}}"></script>
      <script src="{{asset('js/slick.min.js')}}"></script>
      <script src="{{asset('js/main.js')}}"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>
   </body>
</html>