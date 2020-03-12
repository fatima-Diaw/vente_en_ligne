<!DOCTYPE html>
<html lang="en">
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
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .bg{
                background-image:url('https://i1.adis.ws/i/boohooamplience/200220_SPLASH_WC_24_WRKF24520_DSK_06_FRANCE?$homesplash_desktop_full_1x$'); 
                background-repeat:no-repeat;
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
            <div class="flou"></div>  
            <div class="top-right links">
                <a href="{{ route('login') }}">Admin</a>
                <a href="{{ url('/accuei') }}">Home</a>
                <a href="{{ route('register') }}">Register</a>
            </div>
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
                  <a href="#" >
                   <img src="{{ asset('images/ch.jpg') }}" style="width: 100%">
                  </a>
                  <div class="content content1">
                    <h4 class="title">
                      CHAUSSURES
                    </h4>
                    <div>
                      <a class="soustitre"href="#"> Voir Plus-></a>
                      <span class="">
                        <i class="icon-calendar"></i>
                      </span>
                    </div>
                  </div>
                </div>

              </div>
              <div class="col-lg-4">

                 <div class="image">
                  <a href="#" >
                    <img src="{{ asset('images/robe.jpg') }}"style="width: 100%">
                  </a>
                  <div class="content content1">
                    <h4>
                     VETEMENTS
                    </h4>
                    <div>
                      <a  class="soustitre" href="#">Voir Plus-></a>
                      <span>
                        <i class="icon-calendar"></i>
                      </span>
                    </div>
                  </div>
                </div>

              </div>
              <div class="col-lg-4">

                <div class="image">
                  <a href="coursedetail.html" >
                    <img src="{{ asset('images/sac.jpg') }}"style="width: 100%">
                  </a>
                  <div class="content content1">
                    <h4>
                     Sacs
                    </h4>
                    <div>
                      <a  class="soustitre" href="#">Voir Plus-></a>
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
