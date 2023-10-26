<!DOCTYPE html>
<html lang="en">
<head>
  <title>Datanian - Home</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  @vite(['resources/css/index.css', 'resources/js/index.js'])
  <link rel="icon" href="assets/favicon.png" sizes="64x64" type="image/png">




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
        
       <a class="navbar-brand" href=""> <img src="{{URL('images/datanian.png')}}" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label">
          <div class="offcanvas-header" style=" border:1px solid rgba(0,0,0,0.2)">
            <a class="navbar-brand" href=""> <img src="{{URL('images/datanian.png')}}" alt=""></a>
            <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body" style="color-scheme:inherit;">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="">Home</a>
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


    <div class="wsite-section wsite-header-section wsite-section-bg-image wsite-section-effect-reveal" style="height: 1070px; background-image: url('{{ URL('images/background.jpg') }}'); background-repeat: no-repeat; background-position: 50% 50%; background-size: 100%; background-color: none; background-size: cover;">
      <div class="wsite-section-content">
        
            <div class="container" style="padding-top: 420px; padding-left:50px">
              <div class="banner">
            <div class="wsite-section-elements">
              <h2 class="wsite-content-title hidden" >
                <strong><font color="#fff"><font size="7">From bytes to bites</font></font><font color="#0ce6aa">.</font></font></strong>
              </h2>

            <div class="paragraph hidden">
              <strong>
                <font size="5"><font color="#ffffff">Embark in a never before journey of automation <br>and precision farming through data</font><font color="#0ce6aa">.</font></font>
              </strong>
            </div>

            <div class="wsite-spacer" style="height:235px;"></div>
          </div>
        </div>
            </div>
        
      </div>
      <div class=""></div>
    </div>

 

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
            <a href="mailto:sales.dt@datanian.my" class="btn-floating" btn-sm text-white style="font-size:23px;"><i class="fa-solid fa-envelope" style="color:#ffffff"></i></a>
          </li>
        </ul>
      </div>   
  </div> 
</div> 
</footer>


</body>



</html>