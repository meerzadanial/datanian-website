<!DOCTYPE html>
<html lang="en">
<head>
  <title>Aviation - Datanian</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
  @vite(['resources/css/aviation.css', 'resources/js/aviation.js'])

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
    <!-- Navbar -->
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
                        <li><a class="dropdown-item" href="">Aviation</a></li>
                    </ul>
                </li>
            
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">About</a>
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
            <img src="{{URL('images/aviation 1.jpg')}}" class="d-flex w-100 h-20" alt="...">
            <div class="carousel-caption">
              <h2 class="banner-title">Aviation</h2>
              <p class="banner-description">Complete aviation monitoring solution, near real time monitoring, training and consultation.</p>
            </div>
          </div>

          <div class="carousel-item">
            <img src="{{URL('images/aviation 2.jpg')}}" class="d-block w-100 h-auto" alt="...">
            <div class="carousel-caption">
                <h2 class="banner-title">Aviation</h2>
                <p class="banner-description">Complete aviation monitoring solution, near real time monitoring, training and consultation.</p>
              </div>
            </div>

          <div class="carousel-item">
            <img src="{{URL('images/aviation 3.jpg')}}" class="d-block w-100 h-auto" alt="...">
            <div class="carousel-caption">
                <h2 class="banner-title">Aviation</h2>
                <p class="banner-description">Complete aviation monitoring solution, near real time monitoring, training and consultation.</p>
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
     
      <!-- Weather Contents-->
    
        <div class="head">
          <font color="#595959"><h5 class="head text-center text-md-left hidden" style="padding-bottom:50px;">We have contributed our products to the <font color="#0ce6aa">aviation-related</font> solution.</h5></font>
        </div>
        
        <div class="container">
          
          <select id="carousel-select" class="form-select" size="1">
            <option value="content1">Solutions</option>
            <option value="content2">Sensors & Electronics</option>
            <option value="content3">Softwares</option>
          </select>
       
          <div id="carousel-container">
            <!-- Content will be dynamically loaded here based on user selection -->
          </div>
       
    </div>
    
        <script>
          function initOwlCarousel() {
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
                200: {
                  items: 1
                },
                500: {
                  items: 2
                },
                1000: {
                  items: 3
                }
              }
            });
          }
        
          // Define your carousel content here
          const carouselContent = {
           content1:`
           <section id="slider" class="pt-5">
            <div class="container">
              
              <div class="slider">
                <div class="slidertree owl-carousel">
          
                  <div class="slider-card">
                    <div class="d-flex justify-content-center align-items-center mb-4">
                      <img src="{{URL('images/awos.png')}}" alt="" class="img-fluid img-resize">
                    </div>
                    <h5 class="mb-0 text-center title" style="text-align:justify;">Automatic Weather 
                      &ZeroWidthSpace;
                      <br>
                      Observing Station</h5>
                    <p class="p-4 desc" style="text-align:justify;">Datanian AWOS is a completely automated weather observing system that provides 24 hours, real-time weather data for all types of airports. This system is compatible with any sensors thus a cost-effective solution</p>
                  </div>
               
              

                  </div>
                </div>
              </div>
            </div>
          </section>
           `,

           content2:`
           <section id="slider" class="pt-5">
            <div class="container">
              
              <div class="slider">
                <div class="slidertree owl-carousel">
          
                  <div class="slider-card">
                    <div class="d-flex justify-content-center align-items-center mb-4">
                      <img src="{{URL('images/pores.png')}}" alt="" class="img-fluid img-resize">
                    </div>
                    <h5 class="mb-0 text-center title" style="text-align:justify;">Power Resetter</h5>
                    <p class="p-4 desc" style="text-align:justify;">Datanian PORES serves as a standalone DC power conversion module, operating as an independent power controller that seamlessly interfaces with the Datanian Data Acquisition & Logger for seamless and efficient control and management</p>
                  </div>
          
                  <div class="slider-card">
                    <div class="d-flex justify-content-center align-items-center mb-4">
                      <img src="{{URL('images/sdb.png')}}" alt="" class="img-fluid img-resize">
                    </div>
                    <h5 class="mb-0 text-center title" style="text-align:justify;">Smart Data Acquisition & 
                      &ZeroWidthSpace;
                      <br>
                      Logger (SDB)</h5>
                    <p class="p-4 desc" style="text-align:justify;">Datanian SDB eBox is a cutting-edge and highly intelligent data acquisition and logging system, engineered to seamlessly integrate with an extensive range of meteorological sensors and systems, offering unparalleled flexibility and adaptability for a diverse array of applications in the field of weather monitoring and analysis</p>
                  </div>
          

               
                  </div>
                </div>
              </div>
            </div>
          </section>

           `,

           content3:`
           <section id="slider" class="pt-5">
            <div class="container">
              
              <div class="slider">
                <div class="slidertree owl-carousel">
          
                  <div class="slider-card">
                    <div class="d-flex justify-content-center align-items-center mb-4">
                      <img src="{{URL('images/sightmet.jpg')}}" alt="" class="img-fluid img-resize">
                    </div>
                    <h5 class="mb-0 text-center title" style="text-align:justify;">SightMET</h5>
                    <p class="p-4 desc" style="text-align:justify;">
                      SightMET is Datanian's meteorological software designed for meteorology, emergency wind display, and automatic weather observation systems. It's compatible with custom sensors, servers, workstations, and easily integrates with external software or systems</p>
                  </div>

                  <div class="slider-card">
                    <div class="d-flex justify-content-center align-items-center mb-4">
                      <img src="{{URL('images/amet.jpeg')}}" alt="" class="img-fluid img-resize">
                    </div>
                    <h5 class="mb-0 text-center title" style="text-align:justify;">AeroMET</h5>
                    <p class="p-4 desc" style="text-align:justify;">AeroMET by Datanian is a versatile meteorological software tailored for Aviation Meteorology, Emergency Wind Display, and Automatic Weather Observation System. It seamlessly integrates with custom sensors, servers, workstations, and external software for optimal performance</p>
                  </div>
                      
                  </div>
                </div>
              </div>
            </div>
          </section>
           `,
          };
        
          // Function to update the carousel content
          function updateCarousel(selectedValue) {
            const carouselContainer = document.getElementById('carousel-container');
            carouselContainer.innerHTML = carouselContent[selectedValue];
            initOwlCarousel(); // Reinitialize the Owl Carousel
          }
        
          // Initial update based on the default selected option
          updateCarousel(document.getElementById('carousel-select').value);
        
          // Listen for changes in the dropdown and update the carousel
          document.getElementById('carousel-select').addEventListener('change', function () {
            updateCarousel(this.value);
          });
        
          
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
            <p>Email: <a href="mailto:sales.dt@datanian.my"  style="color:#0ce6aa; text-decoration:none;">sales.dt@datanian.my</a></p>
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
            <a href="mailto:sales.dt@datanian.my"  class="btn-floating" btn-sm text-white style="font-size:23px;"><i class="fa-solid fa-envelope" style="color:#ffffff"></i></a>
          </li>
        </ul>
      </div>   
  </div> 
</div> 




</body>



</html>