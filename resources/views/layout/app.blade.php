<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> Beatles || PSD to html</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Butterfly+Kids&family=Oleo+Script:wght@400;700&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Butterfly+Kids&family=Oleo+Script:wght@400;700&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
  
    <link rel="stylesheet" href="{{ asset('assets/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

</head>
<body>


      <header>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-5 col-sm-5">
                    <div class="welcome">
                        <p>Welcome to Beatles</p>
                    </div>
                </div>
                <div class="col-md-8 col-7 col-sm-7">
                    <div class="header_icon">
                        <ul>
                            <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href=""><i class="fab fa-twitter"></i></a></li> 
                            <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href=""><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href=""><i class="fab fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
      </header>

      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="{{ asset('assets/images/logo.png') }}" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Gallary</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Testimonial</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Blogs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contct us</a>
              </li>
          </div>
        </div>
      </nav>

  
  @yield('content')
  
  


      <!--
      ====================================================
      total footer part start -->

      <footer>
          <div class="container">
            <div class="row">
                        
                      <!-- 1st 3column footer part start  -->
             
              <div class="col-md-3 col-12 col-sm-12 ">
                  <div class="footer_logo">
                     <img src="{{ asset('assets/images/Beatles-Recovered.png') }}" alt="">
                  </div>
                  <div class="footer_content">
                    <p> Lorem ipsum dolor sit amet, conser adipisicing elit, sed do eiumod apor incididunt ut labore et dolore magna aliqua.</p>
                    <p>Lorem ipsum dolor sit amet, conser adipisicing elit.</p>
                  </div>
              </div>
                      <!-- 1st 3column html part end  -->

                      <!-- 2nd column footer part start -->

              <div class="col-md-3">
                <div class="row">
                  <div class="col-md-12 col-12 col-sm-12">
                    <div class="footer_common_heading">
                      <h4>Contact us</h4>
                    </div>
                    
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-md-2 col-2 col-sm-2">
                    <div class="footer_icon phone_icon">
                      <a href="#"><i class="fas fa-phone"></i></a>
                    </div>

                  </div>
                  <div class="col-md-10 col-10 col-sm-10">
                     <div class="footer_number phone_number">
                      <p>+334 1234 5987</p>
                      <p>+334 9876 2354</p>
                     </div>
                  </div>
                </div>

                <div class="row mb-3 mt-3">
                  <div class="col-md-2 col-2 col-sm-2">
                    <div class="footer_icon">
                      <a href="#"><i class="fas fa-envelope"></i></a>
                    </div>

                  </div>
                  <div class="col-md-10 col-10 col-sm-10">
                     <div class="footer_number">
                      <p>+beatlsinfo@gmail.com</p>
                      <p>informationbeatls@mail.com</p>
                     </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-2 col-2 col-sm-2">
                    <div class="footer_icon">
                      <a href="#"><i class="fas fa-earth"></i></a>
                    </div>

                  </div>
                  <div class="col-md-10 col-10 col-sm-10">
                     <div class="footer_number">
                      <p>www.beatlsinformation.com</p>
                      <p> www.informationbeatls.com</p>
                     </div>
                  </div>
                </div>
                
              </div>        
                      <!-- 2nd column footer part end -->

                      <!-- 3rd column footer part start -->
                      <div class="col-md-2">
                        
                        <!-- footer common part html start -->
                        <div class="row">
                          <div class="col-md-12 col-12 col-sm-12">
                            <div class="footer_common_heading">
                              <h4>Important Links</h4>
                            </div>
                            
                          </div>
                        </div>
                        <!-- footer common part html end -->

                        <div class="row">
                          <div class="col-md-6 col-6 col-sm-2">
                            <div class="footer_menu_link footer_menu_link_left">
                              <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Portfolio</a></li>
                                <li><a href="#">our Team</a></li>
                                <li><a href="#">Blog</a></li>
                               
                              </ul>
                            </div>
                          </div>

                          <div class="col-md-6 col-6 col-sm-10">
                            <div class="footer_menu_link">
                              <ul>
                                <li><a href="#">Pricing</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Feedback</a></li>
                               
                               
                              </ul>
                            </div>
                          </div>

                        </div>
                      </div>
                      <!-- 3rd column footer part end -->

                      <!-- 4th column footer part start -->
             <div class="col-md-4">
              <div class="row">
                <div class="col-md-12 col-12 col-sm-12">
                  <div class="footer_common_heading">
                    <h4>Flickr Photos</h4>
                  </div>
                  
                </div>
              </div>
              <div class="row">
                <div class="col-md-4 col-4 col-sm-4">
                  <div class="footer_photo">
                    <img src="{{ asset('assets/images/footerphoto1.png') }}" class="img-fluid w-100" alt="">
                  </div>
                </div>

                <div class="col-md-4 col-4 col-sm-4">
                  <div class="footer_photo">
                    <img src="{{ asset('assets/images/footerphoto2.png') }}" class="img-fluid w-100" alt="">
                  </div>
                </div>
                <div class="col-md-4 col-4 col-sm-4">
                  <div class="footer_photo">
                    <img src="{{ asset('assets/images/footerphoto3.png') }}" class="img-fluid w-100" alt="">
                  </div>
                </div>
                
                <div class="col-md-4 col-4 col-sm-4">
                  <div class="footer_photo">
                    <img src="{{ asset('assets/images/footerphoto4.png') }}" class="img-fluid w-100" alt="">
                  </div>
                </div>

                <div class="col-md-4 col-4 col-sm-4">
                  <div class="footer_photo">
                    <img src="{{ asset('assets/images/footerphoto5.png') }}" class="img-fluid w-100" alt="">
                  </div>
                </div>

                <div class="col-md-4 col-4 col-sm-4">
                  <div class="footer_photo">
                    <img src="{{ asset('assets/images/footerphoto6.png') }}" class="img-fluid w-100" alt="">
                  </div>
                </div>
              </div>
             </div>

                       <!-- 4th column footer part end -->
              
            
            </div>
          </div>
      </footer>

 
      <div class="copy_right">
          <div class="container">
            <div class="col-md-12 col-12 col-sm-12">
              <p>Copyright &copy; 2017. All rights reserved by <span>BEATLES</span></p>
            </div>
          </div>
      </div>
      <!--
      ====================================================
      total footer part end -->

      

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>


  </body>
</html>