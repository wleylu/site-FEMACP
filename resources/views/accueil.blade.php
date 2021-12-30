<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="js/fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="asset('css/app.css')">

    {{--  <link rel="stylesheet" href="css/bootstrap.min.css">  --}}

    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title></title>
  </head>

  <body>

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <div style="background-size: contain; background-color: white; text-align: center;">
      <img style="height: 72px; margin-right: 40px;" src="{{ Storage::url('/Appimages/FEMACP.png') }}" alt="">
      <div style="float: left; margin-top: 10px; margin-left: 25px;">
        <img src="{{ Storage::url('/Appimages/er.png') }}" alt="logo" title="Your logo" style="height: 50px;" />
      </div>
    </div>

    <div>
        <header class="site-navbar" role="banner">

            <div class="container">
              <div class="row align-items-center">


                <div class="col-12 col-md-10 d-none d-xl-block">
                  <nav class="site-navigation position-relative text-right" role="navigation">

                    <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                      <li class="has-children">
                        <a href="#"><span>Pallaka De Koumbala</span></a>
                        <ul class="dropdown arrow-top">
                          <li><a href="{{ route('koumbala')}}">Sous-Préfecture de Noumbda</a></li>
                          <li><a href="#">Sous-Préfecture de Togoniéré</a></li>


                        </ul>
                      </li>
                      <li >
                        <a href="#"><span>Pallaka De Sikolo</span></a>

                      </li>
                      <li><a href="#"><span>Histoire Des Pallaka</span></a></li>
                      <li><a href="#"><span>Culture</span></a></li>
                      <li><a href="#"><span>Contact</span></a></li>
                    </ul>
                  </nav>
                </div>


                <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;">
                    <a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                </div>

              </div>
            </div>

          </header>
    </div>



    {{--  <div class="hero" style="background-image: url('images/hero_1.jpg');"></div>  --}}

    <div class="hero" style="background-image: url('storage/Appimages/hero_1.jpg');">
       @yield("content")
    </div>




    <script src="js/js/jquery-3.3.1.min.js"></script>
    <script src="js/js/popper.min.js"></script>
    <script src="js/js/bootstrap.min.js'"></script>
    <script src="js/js/jquery.sticky.js'"></script>
    <script src="js/js/main.js"></script>
  </body>
</html>
