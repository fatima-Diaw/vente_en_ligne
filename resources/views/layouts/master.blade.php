<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>InfyOm Generator</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <!-- Bootstrap 3.3.7
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css">
     -->
    

    
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


</head>
<style type="text/css">
    html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
    .bg{
                color: white;
                }
                 .bg2{
                background-image:url('https://i1.adis.ws/i/boohooamplience/200220_SPLASH_WC_24_WRKF24520_DSK_06_FRANCE?$homesplash_desktop_full_1x$'); 
                background-repeat:no-repeat;
                color: white;
                }
                .bg3{
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
            .bg1{
                background-color: #fec5d9;
            }
            
            .pa{
                padding-top: 50px;
                padding-bottom: 50px;  
            }
            .bgim1{
                height:300px;
                background-size: cover;
                width:100%;
                background-repeat: no-repeat;
            }
            .texte{
                padding-right: 100px;
                font-size: 14px;
                text-align: left;
                color: black;
            }
            .titre{
                padding-bottom: 50px;
                font-size: 12px;
                color:#fec5d9;
            }
            .section1{
                background-color: #f8f9fa;
                text-align: center;
                padding-top: 50px;
                padding-bottom: 50px;  
                }
            .image{
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.15);
                cursor: pointer;
            }
            .liste{
                color: black;
                font-size: 20px;
                list-style: outside none;
                

            }
            
            .title{
    font-size: 16px;
    color: #002147;
    text-align: left;
    font-weight:500;

}
            .content1{
    background-color: white;
    width: 100%;
    text-align:center;
    color: #002147;

};
/*panier*/
.bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      /* stylelint-disable selector-list-comma-newline-after */

    .blog-header {
    line-height: 1;
    border-bottom: 1px solid #e5e5e5;
    }

    .blog-header-logo {
    font-family: "Playfair Display", Georgia, "Times New Roman", serif;
    font-size: 2.25rem;
    }

    .blog-header-logo:hover {
    text-decoration: none;
    }

    .display-4 {
    font-size: 2.5rem;
    }
    @media (min-width: 768px) {
    .display-4 {
        font-size: 3rem;
    }
    }

    .nav-scroller {
    position: relative;
    z-index: 2;
    height: 2.75rem;
    overflow-y: hidden;
    }

    .nav-scroller .nav {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
    padding-bottom: 1rem;
    margin-top: -1px;
    overflow-x: auto;
    text-align: center;
    white-space: nowrap;
    -webkit-overflow-scrolling: touch;
    }

    .nav-scroller .nav-link {
    padding-top: .75rem;
    padding-bottom: .75rem;
    font-size: .875rem;
    }

    .card-img-right {
    height: 100%;
    border-radius: 0 3px 3px 0;
    }

    .flex-auto {
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    }

    .h-250 { height: 250px; }
    @media (min-width: 768px) {
    .h-md-250 { height: 250px; }
    }

    /* Pagination */
    .blog-pagination {
    margin-bottom: 4rem;
    }
    .blog-pagination > .btn {
    border-radius: 2rem;
    }

    /*
    * Blog posts
    */
    .blog-post {
    margin-bottom: 4rem;
    }
    .blog-post-title {
    margin-bottom: .25rem;
    font-size: 2.5rem;
    }
    .blog-post-meta {
    margin-bottom: 1.25rem;
    color: #999;
    }

    /*
    * Footer
    */
    .blog-footer {
    padding: 2.5rem 0;
    color: #999;
    text-align: center;
    background-color: #f9f9f9;
    border-top: .05rem solid #e5e5e5;
    }
    .blog-footer p:last-child {
    margin-bottom: 0;
            
</style>
<body>
<div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex bg1 justify-content-between">
      
      <a class="p-2 text-muted"  href="{{ url('/') }}">Accueil</a>
      <a class="p-2 text-muted"  href="{{asset(route('produits.categori','chaussure'))}}">Chaussure</a>
      <a class="p-2 text-muted"  href="{{asset(route('produits.categori','vetement'))}}">Vêtements</a>
      <a class="p-2 text-muted"  href="{{asset(route('produits.categori','sac'))}}">Sacs</a>
      
      <a class="p-2 text-muted" href="{{ route('cart.index') }}">panier <span class="badge badge-pill badge-dark">{{ Cart::count() }}</span></a>
      <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
    </nav>
  </div> 
  @yield('content')
</body>
</html> 