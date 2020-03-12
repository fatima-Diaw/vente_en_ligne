<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="C:\Users\Fatou Bintou\Desktop\bakeli\study\styles\study.css">

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

            
        </style>
    </head>
    <body> 

        <div class="flex-center position-ref full-height bg">
            
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
        </div>
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
