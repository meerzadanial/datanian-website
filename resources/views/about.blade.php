<!DOCTYPE html>
<html lang="en">
<head>
  <title>About - Datanian</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  @vite(['resources/css/about.css', 'resources/js/about.js'])

  <link rel="icon" href="assets/favicon.png" sizes="64x64" type="image/png">
  


<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Owl Carousel CSS and JS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>





  <!-- Bootstrap CSS v5.3.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>





  <body>   
    <!--Navbar-->

    <nav class="navbar navbar-expand-lg sticky-top"   aria-label="Offcanvas navbar small" style="border:1px solid rgba(0,0,0,0.2)">
      <div class="container-fluid">
        
       <a class="navbar-brand" href="{{ route('home') }}"> <img src="{{URL('images/datanian.png')}}" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label">
          <div class="offcanvas-header" style=" border:1px solid rgba(0,0,0,0.2)">
            <a class="navbar-brand" href="{{ route('home') }}"> <img src="{{URL('images/datanian.png')}}" alt=""></a>
            <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body" style="color-scheme:inherit;">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
            
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('agriculture') }}">Agriculture</a>
                </li>
            
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Other Industries
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('weather') }}">Weather</a></li>
                        <li><a class="dropdown-item" href="{{ route('aviation') }}">Aviation</a></li>
                    </ul>
                </li>
            
                <li class="nav-item">
                    <a class="nav-link" href="">About</a>
                </li>
            
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
   

    <!-- Carousel-->
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{URL('images/vision 1.jpg')}}" class="d-block w-100 h-auto" alt="...">
          <div class="carousel-caption">
            
            <h2 class="banner-title">Our Vision</h2>
            <p class="banner-description">Towards achieving sustainable agriculture and food security</p>
          </div>
        </div>

        <div class="carousel-item">
          <img src="{{URL('images/vision 2.jpg')}}" class="d-block w-100 h-auto" alt="...">
          <div class="carousel-caption">
              <h2 class="banner-title">Our Vision</h2>
              <p class="banner-description">Towards achieving sustainable agriculture and food security</p>
            </div>
          </div>

        <div class="carousel-item">
          <img src="{{URL('images/food security.jpg')}}" class="d-block w-100 h-auto" alt="...">
          <div class="carousel-caption">
              <h2 class="banner-title">Our Vision</h2>
              <p class="banner-description">Towards achieving sustainable agriculture and food security</p>
            </div>
        </div>
      </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

      <!--Main Title-->     
     
      <!-- Mission Contents-->
      <div class="section-background-1" style="background-image: url('{{ URL('images/subtlebg.png') }}')">
        <h2 class="title hidden" align="center" style="font-weight:bold; color:#595959; padding-top:40px;" >Our <font color="#0ce6aa">Mission</font></h2>
        <section id="slider" class="pt-5">
          <div class="container">
            <div class="slider hidden">
              <div class="slidertree owl-carousel">
        
                <div class="slider-card">
                  <div class="d-flex justify-content-center align-items-center mb-4">
                    <img src="{{URL('images/low price.png')}}" alt="" class="img-fluid img-resize" style="max-width: 30%; max-height:200px;  ">
                  </div>
                  <h5 class="mb-0  p-4" style="font-weight: 400; font-size:medium; text-align:justify;" >Dedicated to providing affordable technologies for our customers.</h5>
                </div>
        
                <div class="slider-card">
                  <div class="d-flex justify-content-center align-items-center mb-4">
                    <img src="{{URL('images/quality.png')}}" alt="" class="img-fluid img-resize" style="max-width: 30%; max-height:200px;  ">
                  </div>
                  <h5 class="mb-0  p-4" style="font-weight: 400; font-size:medium; text-align:justify;">To provide the highest quality software application utilizing extensive data collection and IoT platform. 
                  </h5>
                  
                </div>
        
                <div class="slider-card">
                  <div class="d-flex justify-content-center align-items-center mb-4">
                    <img src="{{URL('images/crop.png')}}" alt="" class="img-fluid img-resize" style="max-width: 30%; max-height:200px;  ">
                  </div>
                  <h5 class="mb-0  p-4" style="font-weight: 400; font-size:medium; text-align:justify;">To provide expertise in precision agriculture and smart farming practices, sciences and technologies. ​
                  </></h5>
                  
                </div>
                
                <div class="slider-card">
                  <div class="d-flex justify-content-center align-items-center mb-4" >
                    <img src="{{URL('images/low consumption.png')}}" alt="" class="img-fluid img-resize" style="max-width: 30%; max-height:200px;  ">
                  </div>
                  <h5 class="mb-0 p-4" style="font-weight: 400; font-size:medium; text-align:justify;">To help customers increase productivity while reducing wastages, cost and effort.
                  </h5>
                  
                </div>
             
                </div>
              </div>
            </div>
          </div>
        </section>
            
      

                  <!-- Values Contents-->
                    
                        <h2 class="title hidden" align="center" style="font-weight:bold; color:#595959; padding-top:40px;" >Our <font color="0ce6aa">Values</font></h2>
                        <section id="slider" class="pt-5">
                          <div class="container">
                            <div class="slider hidden">
                              <div class="slidertree owl-carousel">
                        
                                <div class="slider-card">
                                  <div class="d-flex justify-content-center align-items-center mb-4">
                                    <img src="{{URL('images/teamwork.png')}}" alt="" class="img-fluid img-resize" style="max-width: 30%; max-height:200px;  ">
                                  </div>
                                  <h5 class="mb-0 text-center"><strong>Teamwork</strong></h5>
                                  <p class="text-center p-4" style="font-weight: 400;">​Together we make a difference.
                                  </p>
                                </div>
                        
                                <div class="slider-card">
                                  <div class="d-flex justify-content-center align-items-center mb-4">
                                    <img src="{{URL('images/transparency.png')}}" alt="" class="img-fluid img-resize" style="max-width: 30%; max-height:200px;  ">
                                  </div>
                                  <h5 class="mb-0 text-center"><strong>Transparency</strong ></h5>
                                  <p class="p-4" style="font-weight: 400; text-align:justify;">​Be open, honest, fair and ethical in our communication.
                                  </p>
                                </div>
                        
                                <div class="slider-card">
                                  <div class="d-flex justify-content-center align-items-center mb-4">
                                    <img src="{{URL('images/fun.png')}}" alt="" class="img-fluid img-resize" style="max-width: 30%; max-height:200px;  ">
                                  </div>
                                  <h5 class="mb-0 text-center"><strong>Fun</strong></h5>
                                  <p class="text-center p-4" style="font-weight: 400;" >​Enjoy the journey together.
                                  </p>
                                </div>
                                
                                <div class="slider-card">
                                  <div class="d-flex justify-content-center align-items-center mb-4">
                                    <img src="{{URL('images/progressive.png')}}" alt="" class="img-fluid img-resize" style="max-width: 30%; max-height:200px;  ">
                                  </div>
                                  <h5 class="mb-0 text-center"><strong>Progressive</strong></h5>
                                  <p class="p-4" style="font-weight: 400; text-align:justify;">​​Failure is success in progress. We only fail if we give up. Fall and rise again higher</p>
                                </div>

                                <div class="slider-card">
                                  <div class="d-flex justify-content-center align-items-center mb-4">
                                    <img src="{{URL('images/humanity.png')}}" alt="" class="img-fluid img-resize" style="max-width: 30%; max-height:200px;  ">
                                  </div>
                                  <h5 class="mb-0 text-center"><strong>Humanity</strong></h5>
                                  <p class="text-center p-4" style="font-weight: 400;">Humanity, above all else.
                                    ​</p>
                                </div>
                             
                                </div>
                              </div>
                            </div>
                          </div>
                        </section>
                          


                            <!--Management Team Contents-->
                            <div class="section-background" style="background-image: url('{{ URL('images/subtlebg.png') }}')">
                              <h2 class="title py-5 hidden" align="center" style="font-weight:bold; color:#595959;" >Management <font color="0ce6aa">Team</font></h2>
                              <section id="slider" class="pt-4">
                                <div class="container">
                                  <div class="slider-cards ">
                              
                                      <div class="slider-card1 hidden">
                                        <div class="d-flex justify-content-center align-items-center mb-4">
                                          <img src="{{URL('images/img placeholder.jpg')}}" alt="" class="img-fluid img-resize">
                                        </div>
                                        <h5 class="mb-0 text-center" style="font-weight:600; color:#595959">Mohd Effandi Mohd Hassan</h5>
                                        <p class="text-center p-4" style="font-weight:400; color:#595959">Managing Director
                                          <br>
                                          &ZeroWidthSpace; Technology, Research & Development
                                        </p>
                                      </div>
                                      
                                      <div class="slider-card1 hidden">
                                        <div class="d-flex justify-content-center align-items-center mb-4">
                                          <img src="{{URL('images/img placeholder 2.jpg')}}" alt="" class="img-fluid img-resize">
                                        </div>
                                        <h5 class="mb-0 text-center" style="font-weight:600; color:#595959">Ikhwan Abdullah</h5>
                                        <p class="text-center p-4" style="font-weight: 400; color:#595959">Director
                                          <br>
                                          &ZeroWidthSpace; Technology, Software
                                        </p>
                                      </div>
                                   </div>
                                </div>
                              </section> 
                            </div>
                                                      
                            
                          


<!--Owl carousel behavior-->
<script>
  $(document).ready(function () {
    $(".slidertree").owlCarousel({
      loop: true,
      margin: 30,
      nav: true,
      dots: true,
      autoplay: true,
      autoplayTimeout: 3500,
      autoplayHoverPause: true,
      center: true,
      navText: [
        "<i class='fa fa-angle-left'></i>",
        "<i class='fa fa-angle-right'></i>"
      ],
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 1
        },
        1000: {
          items: 3
        }
      }
    });
  });
  

</script>


        
        

        
 

<!--footer-->
<div style="background-color: #2e2e2e ">
  <div class="container" style="color: #0ce6aa;">
    <footer class="pad" style="padding-bottom: 10px; padding-top:40px;">
      <div class="row">
        <div class="col-6 col-md-2 mb-3">
          <h5 style="padding-bottom: 20px;">Agriculture</h5>
          <ul class="nav flex-column">
               <li class="nav-item mb-2"><a href="agriculture.html" class="nav-link p-0 text-white" >Precision Farming</a></li>
            <li class="nav-item mb-2"><a href="agriculture.html" class="nav-link p-0 text-white">Agriculture</a></li>
          </ul>
        </div>
  
        <div class="col-6 col-md-2 mb-3">
          <h5 style="padding-bottom: 20px;">Other Industries</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="weather.html" class="nav-link p-0 text-white">Weather</a></li>
            <li class="nav-item mb-2"><a href="aviation.html" class="nav-link p-0 text-white">Aviation</a></li>
          </ul>
        </div>
  
        <div class="col-6 col-md-2 mb-3">
          <h5 style="padding-bottom: 20px;">About</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="about.html" class="nav-link p-0 text-white">Vision / Mission</a></li>
            <li class="nav-item mb-2"><a href="about.html" class="nav-link p-0 text-white">Management Team</a></li>
            <li class="nav-item mb-2"><a href="about.html" class="nav-link p-0 text-white">Values</a></li>
          </ul>
        </div>
  
        <div class="col-md-5 offset-md-1 mb-3 text-white">
          <form>
            <h5></h5>
            <p>Datanian Sdn. Bhd (1500169-T)</p>
            <p>Suite 3.4, UiTM-MTDC Technopreneur Centre, Universiti Teknologi MARA, 40450, Shah Alam, Malaysia</p>
            <p>Email: <a href="mailto:sales.dt@datanian.my" style="color:#0ce6aa; text-decoration:none;">sales.dt@datanian.my</a></p>
            <p>Phone: +60 (03)-5524 7474</p>
            <p>Fax: +60 (03)-5524 7373</p>

          </form>
        </div>
      </div>
  
      <div class="d-flex flex-column flex-sm-row justify-content-between py-2 my-1 border-top text-white">
        <p>© 2023 Datanian Sdn. Bhd. All rights reserved.</p>
        <ul class="list-unstyled list-inline">
          <li class="list-inline-item">
            <!--
            <a href="" class="btn-floating" btn-sm text-white style="font-size:23px;"><i class="fab fa-facebook" style="color: #ffffff;"></i></a>
          </li>
-->
          <li class="list-inline-item">
            <a href="https://www.linkedin.com/company/dataniansb/" class="btn-floating" btn-sm text-white style="font-size:23px;"><i class="fab fa-linkedin" style="color: #ffffff;"></i></a>
          </li>
<!--
          <li class="list-inline-item">
            <a href="" class="btn-floating" btn-sm text-white style="font-size:23px;"><i class="fab fa-instagram" style="color: #ffffff;"></i></a>
          </li>
-->
          <li class="list-inline-item">
            <a href="mailto:sales.dt@datanian.my" class="btn-floating" btn-sm text-white style="font-size:23px;"><i class="fa-solid fa-envelope" style="color:#ffffff"></i></a>
          </li>
        </ul>
      </div>   
  </div> 
</div> 




</body>



</html>