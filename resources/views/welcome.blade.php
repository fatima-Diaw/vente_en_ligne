<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/AdminLTE.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/skins/_all-skins.min.css">

    <!-- iCheck -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/square/_all.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">

     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
    <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">
    <meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c">


        
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                
                justify-content: center;
            }

            .position-ref {
                
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .bg{
                background-image:url('https://i1.adis.ws/i/boohooamplience/060320FROCCASIONSHOPDESKTOP?$homesplash_desktop_full_1x$'); 
                width: 100%;
                color: white;
                }
            .flou{
                position: absolute;
                background-color: #212529;
                height: 100%;
                width:100%;
                opacity: .3;
            }

            .links > a {
                color: white;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .titre{
                padding-top: 100px;
                padding-bottom: 50px;
                font-size: 12px;
            }
            .section1{
                background-color: #f8f9fa;
                text-align: center; 
                }
            .contour{
                padding-bottom: 30px;
            }
            .image{
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.15);
                cursor: pointer;
            }
              .bg-ligh{
  background-color: white;
 }
 .titrenav{
  color: #002147;
  text-align: left;
  font-weight: lighter;
  padding: 10px;
}
.titrenav:hover{
color: orange;
text-decoration: none;
}
.active1{
  color: orange;
}
.active1:hover{
color: orange;
text-decoration: none;
}
/* Carousel*/
    .carousel,
    .carousel-item,
    .carousel-item.active {
      height: 100%;
    }
    .carousel-inner {
      height: 100%;
    }
    .hauteur{
      height: 500px;
    }
    .carousel-item1 {
      background-image: url("http://preview.hasthemes.com/study/img/slider/1.jpg");
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
      height: 500px;
    }
    .carousel-item2 {
      background-image: url("http://preview.hasthemes.com/study/img/slider/2.jpg");
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
      height: 500px;
    }
    .carousel-item3 {
      background-image: url("http://preview.hasthemes.com/study/img/slider/1.jpg");
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
      height: 500px;
    }
    .section6{
    color: white;
    text-align:left;
    margin-top: 150px;
    margin-left: 100px;
}
/************************************************************detailll**************************/
            
        </style>
    </head>
    <body> 
      <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-ligh">
        <a class="navbar-brand" href="#">
          <img src="http://preview.hasthemes.com/study/img/logo/logo.png">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class=" active1" href="index.html">HOME <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                  <a class="titrenav" href="even.html">EVENT</a>
              </li>
              <li class="nav-item">
                  <a class="titrenav" href="gallery.html">GALLERY</a>
              </li>
              <li class="nav-item">
                  <a class="titrenav" href="page.html">PAGES</a>
              </li>
           </ul>
        </div>
      </nav>
      <div id="carousel-example-1" class="carousel hauteur slide carousel-fade" data-ride="carousel" data-interval="false">


    <!--Slides-->
    <div class="carousel-inner hauteur" role="listbox">

      <!--First slide-->
      <div class="carousel-item hauteur carousel-item1 active">
        <div class="flouslide"></div>
        <!--Mask-->
        <div class="view col-lg-7 section6">
          <div class="full-bg-img flex-center mask rgba-indigo-light white-text">
            <ul class="animated fadeInUp  list-unstyled list-inline">
              <li>
                <h2 class="font-weight-normal">Welcome To Study</h2>
              </li>
              <li>
                <h1 class="font-weight-bold">The Best Learning Institution</h1>
              </li>
              <li>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
suffered alteration in some form, by injected humour, or randomised words which
don't look even slightly believable.</p>
              </li>
            </ul>
          </div>
        </div>
        <!--/.Mask-->

      </div>
      <!--/.First slide-->

      <!--Second slide -->
      <div class="carousel-item carousel-item2">
        <div class="flouslide"></div>
        <!--Mask-->
        <div class="view col-lg-7 section6">
          <div class="full-bg-img flex-center mask rgba-indigo-light white-text">
            <ul class="animated fadeInUp  list-unstyled list-inline">
              <li>
                <h2 class="font-weight-normal">Welcome To Study</h2>
              </li>
              <li>
                <h2 class="font-weight-bold">The Best Learning Institution</h2>
              </li>
              <li>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
suffered alteration in some form, by injected humour, or randomised words which
don't look even slightly believable.</p>
              </li>
            </ul>
          </div>
        </div>
        <!--/.Mask-->
      </div>
      <!--/.Second slide -->

      <!--Third slide-->
      <div class="carousel-item carousel-item3">
        <div class="flouslide"></div>
        <!--Mask-->
        <div class="view col-lg-7 section6">
          <div class="full-bg-img flex-center mask rgba-indigo-light white-text">
            <ul class="animated fadeInUp  list-unstyled list-inline">
              <li>
                <h2 class="font-weight-normal">Welcome To Study</h2>
              </li>
              <li>
                <h1 class="font-weight-bold">The Best Learning Institution</h1>
              </li>
              <li>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
suffered alteration in some form, by injected humour, or randomised words which
don't look even slightly believable.</p>
              </li>
            </ul>
          </div>
        </div>
        <!--/.Mask-->
      </div>
      <!--/.Third slide-->

    </div>
    <!--/.Slides-->

    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-1" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-1" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
  </div>

       <!-- <div class="flex-center position-ref full-height bg">
            
             @if (Route::has('login')) 
            <div class="top-right links">
                @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Admin</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
            </div>
            @endif
        </div>-->
<section class="section1">
    <div class="container">
        <div class="titre">
             <h2>ARTICLES</h2>
            <p>There are many variations</p>
        </div>

        <div class="row">
              <div class="col-lg-4">
                <div class="image">
                 <a href="{{asset(route('produits.categori','chaussure'))}}">
                   <img src="{{ asset('images/ch.jpg') }}" style="width: 100%">
                  </a>
                  <div class="content content1">
                    <h4 class="title">
                      CHAUSSURES
                    </h4>
                    <div>
                      <a class="soustitre"href="{{asset(route('produits.categori','chaussure'))}}"> Voir Plus-></a>
                      <span class="">
                        <i class="icon-calendar"></i>
                      </span>
                    </div>
                  </div>
                </div>

              </div>
              <div class="col-lg-4">

                 <div class="image">
                  <a href="{{asset(route('produits.categori','vetement'))}}" >
                    <img src="{{ asset('images/robe.jpg') }}"style="width: 100%">
                  </a>
                  <div class="content content1">
                    <h4>
                     VETEMENTS
                    </h4>
                    <div>
                      <a  class="soustitre" href="{{asset(route('produits.categori','vetement'))}}">Voir Plus-></a>
                      <span>
                        <i class="icon-calendar"></i>
                      </span>
                    </div>
                  </div>
                </div>

              </div>
              <div class="col-lg-4">

                <div class="image">
                  <a href="{{asset(route('produits.categori','sac'))}}" >
                    <img src="{{ asset('images/sac.jpg') }}"style="width: 100%">
                  </a>
                  <div class="content content1">
                    <h4>
                     Sacs
                    </h4>
                    <div>
                      <a  class="soustitre" href="{{asset(route('produits.categori','sac'))}}">Voir Plus-></a>
                      <span>
                        <i class="icon-calendar"></i>
                      </span>
                    </div>
                  </div>
                </div>

              </div>

        </div>
              
    </div>
  </section>

    </body>
</html>
