
<footer class="footer-main">
    <div class="container">
       <div class="footer-top-box">
          <div class="row">
             <div class="col-md-3">
                <div class="footer-nav-item-wrapper">
                   <div class="footer-logo-box">
                      <a class="link" href="#who-we-are">
                         <img src="{{asset('assets/logo/fotoer-site-logo.png')}}">
                      </a>
                      <a class="company" href="javascript:;">
                         <h2 class="title">CORE MULTI SERVICES INC.</h2>
                         <!-- <h3 class="subtitle">CORE MULTI SERVICES INC.</h3> -->
                      </a>
                   </div>
                   <ul class="footer-nav-item-inner">
                      <li class="footer-nav-item">
                         <span class="icon"><i class="fas fa-mobile"></i></span>
                         <a class="link" href="tel:{{@$g_settings->address_one_mobile_1}}">{{@$g_settings->address_one_mobile_1}}</a>
                      </li>
                      <li class="footer-nav-item">
                        <span class="icon"><i class="fas fa-phone"></i></span>
                        <a class="link" href="tel:{{@$g_settings->address_one_mobile_2}}"> {{@$g_settings->address_one_mobile_2}}</a>
                     </li>
                      <li class="footer-nav-item">
                         <span class="icon"><i class="far fa-envelope"></i></span>
                         <a class="link" href="mailto:{{@$g_settings->email}}">{{@$g_settings->email}}</a>
                      </li>
                      <li class="footer-nav-item address">
                         <span class="icon"><i class="fas fa-map-marker-alt"></i></span>
                         <h3 class="title">
                           {{@$g_settings->address_one_address}}
                         </h3>
                      </li>
                   </ul>
                   
                </div>
             </div>
             <div class="col-md-3">
                <div class="footer-nav-item-wrapper">
                   <div class="heading">
                      <h2 class="title">More Info</h2>
                   </div>
                   <ul class="footer-nav-item-inner d-none d-md-block">
                      <li class="footer-nav-item">
                         <a class="link" href="{{route("index")}}?#who-we-are">About</a>
                      </li>

                      <li class="footer-nav-item">
                         <a class="link" href="#">Process</a>
                      </li>
                       <li class="footer-nav-item">
                         <a class="link" href="{{route('review')}}">Review</a>
                      </li>
                      <li class="footer-nav-item">
                         <a class="link" href="{{route('index')}}?#cm-services">Service</a>
                      </li>
                      
                      <li class="footer-nav-item">
                         <a class="link" href="{{route('contact')}}">Contact</a>
                      </li>
                   </ul>
                   
                   <ul class="footer-nav-item-inner d-block d-md-none d-lg-none d-xl-none">
                      <li class="footer-nav-item">
                         <a class="link" href="#who-we-are">About</a>, &nbsp;<a class="link cm-services" href="">Process</a>
                      , &nbsp;<a class="link" href="review.php">Review</a>, &nbsp;<a class="link cm-services" href="">Service</a>, &nbsp;<a class="link" href="contact.php">Contact</a>
                      </li>
                   </ul>
                </div>
             </div>
             <div class="col-md-3">
                <div class="footer-nav-item-wrapper">
                   <div class="heading">
                      <h2 class="title">Office Hour</h2>
                   </div>
                   <ul class="footer-nav-item-inner">
                      <li class="footer-nav-item">
                       Mon - Sat: 11 am to 7 pm
                      </li>
                      <li class="footer-nav-item">
                       Sunday : Closed 
                      </li>
                   </ul>
                </div>
             </div>
             <div class="col-md-3">
                <div class="footer-nav-item-wrapper">
                   <div class="heading">
                      <h2 class="title">About us</h2>
                   </div>
                   <div class="footer-about-us">
                     {{@$g_settings->about_us}}
                   </div>
                   <ul class="footer-nav-social-item-inner">
                      <li class="footer-nav-item">
                         <a class="social-link facebook" target="_blank" href="{{@$g_settings->facebook}}">
                         <i class="fab fa-facebook-f"></i>
                         </a>
                      </li>
                     
                      <li class="footer-nav-item">
                         <a class="social-link instragram" target="_blank" href="{{@$g_settings->instragram}}">
                         <i class="fab fa-instagram"></i>
                         </a>
                      </li>
                       <li class="footer-nav-item">
                         <a class="social-link whatsapp" target="_blank" href="{{@$g_settings->whatsapp}}">
                         <i class="fab fa-whatsapp"></i>
                         </a>
                      </li>
                      <li class="footer-nav-item">
                         <a class="social-link linkedin" target="_blank" href="{{@$g_settings->linkdin}}">
                         <i class="fab fa-linkedin-in"></i>
                         </a>
                      </li>
                      <li class="footer-nav-item">
                         <a class="social-link youtube" target="_blank" href="{{@$g_settings->youtube}}">
                         <i class="fab fa-youtube"></i>
                         </a>
                      </li>
                   </ul>
                </div>
             </div>
          </div>
       </div>
    </div>
    <div class="footer-bottom-section">
       <div class="container">
          <div class="row m-0 copyright wrapper">
             <div class="col-sm-12 col-lg-9 col-md-12 p-0 left-box">
                <div class="company-logo">
                   <img src="assets/logo/logo-01.png" alt="YourCom">
                </div>
                <div class="full-name">
                   Copyright © Core Multi Services Inc., {{Date('Y')}}. Website Developed & Maintenance by
                   <a target="_blank" class="footer_logo" href="https://bijoytech.com/"><img src="{{asset('assets/logo/footer-logo.png')}}" alt=""></a>
                </div>
             </div>
             <div class="col-sm-12 col-lg-3 col-md-12 p-0 right-box">
                <ul class="right-box-item-wrapper">
                   <!-- <li class="item">
                      <div class="image">
                         <img src="assets/image/payment.png" alt="Payment image">
                      </div>
                   </li> -->
                   <li class="item">
                      <a class="link" href="">Sitemap</a>
                   </li>
                   <li class="item">
                      <a class="link" href="{{route('privacyPolicy')}}">Privacy Policy</a>
                   </li>
                </ul>
             </div>
          </div>
       </div>
    </div>
 </footer>
 <!-- //Footer End-->
 <!-- Bootstrap Popper JS -->
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
 <!-- Recaptha JS -->
 <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
    async defer></script>
 <script src='https://www.google.com/recaptcha/api.js'></script>
 <!-- Slick Slider Js -->
 <script src="{{asset('assets/plugins/slick-slider/slick.min.js')}}"></script>
 <script src="{{asset('assets/js/progressbar.js')}}"></script>
 <!-- Main JS -->
 <script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>
