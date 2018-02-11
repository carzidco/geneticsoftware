<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="theme-color" content="#333">
    <title>Genetic Software</title>
    <meta name="description" content="Genetic Software">
    <link rel="shortcut icon" href="{{ asset('images/molecule.png') }}">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- <link rel="stylesheet" href="../css/preload.min.css" /> -->
    <link href="{{ asset('css/plugins.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/genetic_style.css') }}" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

    <link href="{{ asset('plugins/revolution/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/revolution/revolution/css/settings.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/revolution/revolution/css/layers.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/revolution/revolution/css/navigation.css') }}" rel="stylesheet">
    <script src="{{ asset('plugins/revolution/revolution-addons/typewriter/js/revolution.addon.typewriter.min.js') }}"></script>
    <link href="{{ asset('plugins/revolution/revolution-addons/typewriter/css/typewriter.css') }}" rel="stylesheet">
    <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    @if (Session::has('message'))
      {{-- <div class="alert-box success" id="message_alert">
        {{{ Session::get('message') }}}
      </div> --}}
      <div class="modal modal-dark" id="message_alert" tabindex="-1" role="dialog" aria-labelledby="myModalLabel6"  style="display: block">
        <div class="modal-dialog animated zoomIn animated-3x" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="zmdi zmdi-close"></i></span></button>
                    <h3 class="modal-title" id="myModalLabel">{{{ Session::get('title')  }}}</h3>
                </div>
                <div class="modal-body">
                  <p>{{{ Session::get('message')  }}}</p>
                </div>
            </div>
        </div>
    </div>
    @endif
    <div id="ms-preload" class="ms-preload">
      <div id="status">
        <div class="spinner">
          <div class="dot1"></div>
          <div class="dot2"></div>
        </div>
      </div>
    </div>
    <div class="sb-site-container">
      <!-- Modal -->
      <div class="modal modal-primary" id="ms-account-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog animated zoomIn animated-3x" role="document">
          <div class="modal-content">
            <div class="modal-header shadow-2dp no-pb">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">
                  <i class="zmdi zmdi-close"></i>
                </span>
              </button>
              <div class="modal-title text-center">
                <!-- <span class="ms-logo ms-logo-white ms-logo-sm mr-1">G</span> -->
                {{-- <span class="ms-logo animated zoomInDown animation-delay-5">
                  <img src="../images/genetic_main_logo.png" alt="" width="40" height="40">
                </span> --}}
                <h3 class="no-m ms-site-title">Genetic
                  <span>Software</span>
                </h3>
              </div>
              <div class="modal-header-tabs">
                <ul class="nav nav-tabs nav-tabs-full nav-tabs-3 nav-tabs-primary" role="tablist">
                  <li role="presentation" class="active">
                    <a href="#ms-login-tab" aria-controls="ms-login-tab" role="tab" data-toggle="tab" class="withoutripple">
                      <i class="zmdi zmdi-account"></i> Login</a>
                  </li>
                  <li role="presentation">
                    <a href="#ms-register-tab" aria-controls="ms-register-tab" role="tab" data-toggle="tab" class="withoutripple">
                      <i class="zmdi zmdi-account-add"></i> Register</a>
                  </li>
                  <li role="presentation">
                    <a href="#ms-recovery-tab" aria-controls="ms-recovery-tab" role="tab" data-toggle="tab" class="withoutripple">
                      <i class="zmdi zmdi-key"></i> Recovery Pass</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="modal-body">
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade active in" id="ms-login-tab">
                  <form autocomplete="off">
                    <fieldset>
                      <div class="form-group label-floating">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="zmdi zmdi-account"></i>
                          </span>
                          <label class="control-label" for="ms-form-user-popup">Username</label>
                          <input type="text" id="ms-form-user-popup" class="form-control"> </div>
                      </div>
                      <div class="form-group label-floating">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="zmdi zmdi-lock"></i>
                          </span>
                          <label class="control-label" for="ms-form-pass-popup-x">Password</label>
                          <input type="password" id="ms-form-pass-popup-x" class="form-control"> </div>
                      </div>
                      <div class="row mt-2">
                        <div class="col-md-6">
                          <div class="form-group no-mt">
                            <div class="checkbox">
                              <label>
                                <input type="checkbox"> Remember Me </label>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <button class="btn btn-raised btn-primary pull-right">Login</button>
                        </div>
                      </div>
                    </fieldset>
                  </form>
                  <div class="text-center">
                    <h3>Login with</h3>
                    <a href="javascript:void(0)" class="wave-effect-light btn btn-raised btn-facebook">
                      <i class="zmdi zmdi-facebook"></i> Facebook</a>
                    <a href="javascript:void(0)" class="wave-effect-light btn btn-raised btn-twitter">
                      <i class="zmdi zmdi-twitter"></i> Twitter</a>
                    <a href="javascript:void(0)" class="wave-effect-light btn btn-raised btn-google">
                      <i class="zmdi zmdi-google"></i> Google</a>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="ms-register-tab">
                  <form>
                    <fieldset>
                      <div class="form-group label-floating">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="zmdi zmdi-account"></i>
                          </span>
                          <label class="control-label" for="ms-form-user-popup-x">Username</label>
                          <input type="text" id="ms-form-user-popup-x" class="form-control"> </div>
                      </div>
                      <div class="form-group label-floating">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="zmdi zmdi-email"></i>
                          </span>
                          <label class="control-label" for="ms-form-email-popup">Email</label>
                          <input type="email" id="ms-form-email-popup" class="form-control"> </div>
                      </div>
                      <div class="form-group label-floating">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="zmdi zmdi-lock"></i>
                          </span>
                          <label class="control-label" for="ms-form-pass-popup">Password</label>
                          <input type="password" id="ms-form-pass-popup" class="form-control"> </div>
                      </div>
                      <div class="form-group label-floating">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="zmdi zmdi-lock"></i>
                          </span>
                          <label class="control-label" for="ms-reform-pass">Re-type Password</label>
                          <input type="password" id="ms-form-repass-popup" class="form-control"> </div>
                      </div>
                      <button class="btn btn-raised btn-block btn-primary">Register Now</button>
                    </fieldset>
                  </form>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="ms-recovery-tab">
                  <fieldset>
                    <div class="form-group label-floating">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="zmdi zmdi-account"></i>
                        </span>
                        <label class="control-label" for="ms-form-user">Username</label>
                        <input type="text" id="ms-form-user" class="form-control"> </div>
                    </div>
                    <div class="form-group label-floating">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="zmdi zmdi-email"></i>
                        </span>
                        <label class="control-label" for="ms-form-email">Email</label>
                        <input type="email" id="ms-form-email" class="form-control"> </div>
                    </div>
                    <button class="btn btn-raised btn-block btn-primary">Send Password</button>
                  </fieldset>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--header-->
      <header class="ms-header ms-header-white">
        <div class="container container-full">
          <div class="ms-title">
            <a href="{{ url('/') }}">
              <!-- <img src="images/demo/logo-header.png" alt=""> -->
              <!-- <span class="ms-logo animated zoomInDown animation-delay-5">G</span> -->
              {{-- <span class="ms-logo animated zoomInDown animation-delay-5">
                <img src="../images/genetic_main_logo.png" alt="" width="40" height="40">
              </span> --}}
              <h1 class="animated fadeInRight animation-delay-6">
                <span>Genetic</span>&nbsp;
                <span><strong>Software</strong></span>
              </h1>
            </a>
          </div>
          <div class="header-right">
            <div class="share-menu">
              <ul class="share-menu-list">
                {{-- <li class="animated fadeInRight animation-delay-3">
                  <a href="javascript:void(0)" class="btn-circle btn-google">
                    <i class="zmdi zmdi-google"></i>
                  </a>
                </li> --}}
                <li class="animated fadeInRight animation-delay-4">
                  <a href="javascript:void(0)" class="btn-circle btn-facebook">
                    <i class="zmdi zmdi-facebook"></i>
                  </a>
                </li>
                <li class="animated fadeInRight animation-delay-3">
                  <a href="javascript:void(0)" class="btn-circle btn-twitter">
                    <i class="zmdi zmdi-twitter"></i>
                  </a>
                </li>
                <li class="animated fadeInRight animation-delay-2">
                  <a href="javascript:void(0)" class="btn-circle btn-youtube">
                    <i class="zmdi zmdi-youtube"></i>
                  </a>
                </li>
                <li class="animated fadeInRight animation-delay-1">
                  <a href="javascript:void(0)" class="btn-circle btn-linkedin">
                    <i class="zmdi zmdi-linkedin"></i>
                  </a>
                </li>
              </ul>
              <a href="javascript:void(0)" class="btn-circle btn-circle-primary animated zoomInDown animation-delay-7">
                <i class="zmdi zmdi-share"></i>
              </a>
            </div>
            <a href="javascript:void(0)" class="btn-ms-menu btn-circle btn-circle-primary sb-toggle-left animated zoomInDown animation-delay-10">
              <i class="zmdi zmdi-menu"></i>
            </a>
          </div>
        </div>
      </header>
      <nav class="navbar navbar-static-top yamm ms-navbar ms-navbar-white">
        <div class="container container-full">
          <div class="navbar-header">
            <a class="navbar-brand" href="{{{ url('/') }}}">
              <!-- <img src="images/demo/logo-navbar.png" alt=""> -->
              <span class="ms-title">Genetic
                &nbsp;
                <span class="red-genetic"><strong>Software</strong></span> 
              </span>
            </a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="dropdown">
                <a data-scroll href="#home" class="dropdown-toggle animated fadeIn animation-delay-2 link">  
                  Inicio
                </a>
              </li>
              <li class="dropdown">
                <a data-scroll href="#aboutus" class="dropdown-toggle animated fadeIn animation-delay-4 link">
                  Nosotros
                </a>
              </li>
              <li class="dropdown">
                <a data-scroll href="#services" class="dropdown-toggle animated fadeIn animation-delay-5 link">
                  Servicios
                </a>
              </li>
              <li class="dropdown">
                <a data-scroll href="#technologies" class="dropdown-toggle animated fadeIn animation-delay-6 link">
                  Tecnologías
                </a>
              </li>
              <li class="dropdown">
                <a data-scroll href="#values" class="dropdown-toggle animated fadeIn animation-delay-7 link">
                  Nuestros valores
                </a>
              </li>
              <li class="dropdown">
                <a data-scroll href="#contact" class="dropdown-toggle animated fadeIn animation-delay-8 link">
                  Contacto
                </a>
              </li>
              <!-- <li class="btn-navbar-menu"><a href="javascript:void(0)" class="sb-toggle-left"><i class="zmdi zmdi-menu"></i></a></li> -->
            </ul>
          </div>
          <!-- navbar-collapse collapse -->
          <a href="javascript:void(0)" class="sb-toggle-left btn-navbar-menu">
            <i class="zmdi zmdi-menu"></i>
          </a>
        </div>
        <!-- container -->
      </nav>

      {{-- <div class="ms-hero ms-hero-material">
        <span class="ms-hero-bg"></span>
        <div class="container">
          <div class="col-lg-6 col-md-7">
            <div id="carousel-hero" class="carousel slide carousel-fade" data-ride="carousel" data-interval="8000">
              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <div class="carousel-caption">
                    <div class="ms-hero-material-text-container">
                      <header class="ms-hero-material-title animated slideInLeft animation-delay-5">
                        <h1 class="animated fadeInLeft animation-delay-15 font-smoothing">The
                          <strong>power design</strong> amazing projects</h1>
                        <h2 class="animated fadeInLeft animation-delay-18">The most customizable
                          <span class="color-warning">material design</span> template.</h2>
                      </header>
                      <ul class="ms-hero-material-list">
                        <li class="">
                          <div class="ms-list-icon animated zoomInUp animation-delay-18">
                            <span class="ms-icon ms-icon-circle ms-icon-xlg color-warning shadow-3dp">
                              <i class="zmdi zmdi-airplane"></i>
                            </span>
                          </div>
                          <div class="ms-list-text animated fadeInRight animation-delay-19">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, fugit sit nesciunt cum rerum iusto.</div>
                        </li>
                        <li class="">
                          <div class="ms-list-icon animated zoomInUp animation-delay-20">
                            <span class="ms-icon ms-icon-circle ms-icon-xlg color-success shadow-3dp">
                              <i class="zmdi zmdi-bike"></i>
                            </span>
                          </div>
                          <div class="ms-list-text animated fadeInRight animation-delay-21">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi laborum dignissimos fuga maxime facere.</div>
                        </li>
                        <li class="">
                          <div class="ms-list-icon animated zoomInUp animation-delay-22">
                            <span class="ms-icon ms-icon-circle ms-icon-xlg color-danger shadow-3dp">
                              <i class="zmdi zmdi-album"></i>
                            </span>
                          </div>
                          <div class="ms-list-text animated fadeInRight animation-delay-23">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit sequi est repudianda.</div>
                        </li>
                      </ul>
                      <div class="ms-hero-material-buttons text-right">
                        <div class="ms-hero-material-buttons text-right">
                          <a href="javascript:void(0);" class="btn btn-warning btn-raised animated fadeInLeft animation-delay-24 mr-2">
                            <i class="zmdi zmdi-settings"></i> Personalize</a>
                          <a href="javascript:void(0);" class="btn btn-success btn-raised animated fadeInRight animation-delay-24">
                            <i class="zmdi zmdi-download"></i> Download</a>
                        </div>
                      </div>
                    </div>
                    <!-- ms-hero-material-text-container -->
                  </div>
                </div>
                <div class="item">
                  <div class="carousel-caption">
                    <div class="ms-hero-material-text-container">
                      <header class="ms-hero-material-title animated slideInLeft animation-delay-5">
                        <h1 class="animated fadeInLeft animation-delay-15">A template with
                          <strong>infinite</strong> possibilities</h1>
                        <h2 class="animated fadeInLeft animation-delay-18">Unlimited combinations to create
                          <span class="color-warning">unique designs</span> .</h2>
                      </header>
                      <ul class="ms-hero-material-list">
                        <li class="">
                          <div class="ms-list-icon animated zoomInUp animation-delay-18">
                            <span class="ms-icon ms-icon-circle ms-icon-xlg color-info shadow-3dp">
                              <i class="zmdi zmdi-city"></i>
                            </span>
                          </div>
                          <div class="ms-list-text animated fadeInRight animation-delay-19">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, fugit sit nesciunt cum rerum iusto.</div>
                        </li>
                        <li class="">
                          <div class="ms-list-icon animated zoomInUp animation-delay-20">
                            <span class="ms-icon ms-icon-circle ms-icon-xlg color-royal shadow-3dp">
                              <i class="zmdi zmdi-cake"></i>
                            </span>
                          </div>
                          <div class="ms-list-text animated fadeInRight animation-delay-21">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi laborum dignissimos fuga maxime facere.</div>
                        </li>
                        <li class="">
                          <div class="ms-list-icon animated zoomInUp animation-delay-22">
                            <span class="ms-icon ms-icon-circle ms-icon-xlg color-warning shadow-3dp">
                              <i class="zmdi zmdi-coffee"></i>
                            </span>
                          </div>
                          <div class="ms-list-text animated fadeInRight animation-delay-23">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit sequi est repudianda.</div>
                        </li>
                      </ul>
                      <div class="ms-hero-material-buttons text-right">
                        <div class="ms-hero-material-buttons text-right">
                          <a href="javascript:void(0);" class="btn btn-warning btn-raised animated fadeInLeft animation-delay-24 mr-2">
                            <i class="zmdi zmdi-settings"></i> Personalize</a>
                          <a href="javascript:void(0);" class="btn btn-success btn-raised animated fadeInRight animation-delay-24">
                            <i class="zmdi zmdi-download"></i> Download</a>
                        </div>
                      </div>
                    </div>
                    <!-- ms-hero-material-text-container -->
                  </div>
                </div>
                <div class="item">
                  <div class="carousel-caption">
                    <div class="ms-hero-material-text-container">
                      <header class="ms-hero-material-title animated slideInLeft animation-delay-5">
                        <h1 class="animated fadeInLeft animation-delay-15">Commitment of
                          <strong>monthly updates</strong>.</h1>
                        <h2 class="animated fadeInLeft animation-delay-18">There will soon be a version for
                          <span class="color-warning">Bootstrap 4</span>.</h2>
                      </header>
                      <ul class="ms-hero-material-list">
                        <li class="">
                          <div class="ms-list-icon animated zoomInUp animation-delay-18">
                            <span class="ms-icon ms-icon-circle ms-icon-xlg color-danger shadow-3dp">
                              <i class="zmdi zmdi-cutlery"></i>
                            </span>
                          </div>
                          <div class="ms-list-text animated fadeInRight animation-delay-19">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, fugit sit nesciunt cum rerum iusto.</div>
                        </li>
                        <li class="">
                          <div class="ms-list-icon animated zoomInUp animation-delay-20">
                            <span class="ms-icon ms-icon-circle ms-icon-xlg color-info shadow-3dp">
                              <i class="zmdi zmdi-dns"></i>
                            </span>
                          </div>
                          <div class="ms-list-text animated fadeInRight animation-delay-21">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi laborum dignissimos fuga maxime facere.</div>
                        </li>
                        <li class="">
                          <div class="ms-list-icon animated zoomInUp animation-delay-22">
                            <span class="ms-icon ms-icon-circle ms-icon-xlg color-success shadow-3dp">
                              <i class="zmdi zmdi-compass"></i>
                            </span>
                          </div>
                          <div class="ms-list-text animated fadeInRight animation-delay-23">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit sequi est repudianda.</div>
                        </li>
                      </ul>
                      <div class="ms-hero-material-buttons text-right">
                        <a href="javascript:void(0);" class="btn btn-warning btn-raised animated fadeInLeft animation-delay-24 mr-2">
                          <i class="zmdi zmdi-settings"></i> Personalize</a>
                        <a href="javascript:void(0);" class="btn btn-success btn-raised animated fadeInRight animation-delay-24">
                          <i class="zmdi zmdi-download"></i> Download</a>
                      </div>
                    </div>
                    <!-- ms-hero-material-text-container -->
                  </div>
                </div>
                <div class="carousel-controls">
                  <!-- Controls -->
                  <a class="left carousel-control animated zoomIn animation-delay-30" href="#carousel-hero" role="button" data-slide="prev">
                    <i class="zmdi zmdi-chevron-left"></i>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control animated zoomIn animation-delay-30" href="#carousel-hero" role="button" data-slide="next">
                    <i class="zmdi zmdi-chevron-right"></i>
                    <span class="sr-only">Next</span>
                  </a>
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-hero" data-slide-to="0" class="animated fadeInUpBig animation-delay-27 active"></li>
                    <li data-target="#carousel-hero" data-slide-to="1" class="animated fadeInUpBig animation-delay-28"></li>
                    <li data-target="#carousel-hero" data-slide-to="2" class="animated fadeInUpBig animation-delay-29"></li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-5">
            <div class="ms-hero-img animated zoomInUp animation-delay-30">
              <img src="images/demo/mock-imac-material2.png" alt="" class="img-responsive">
              <div id="carousel-hero-img" class="carousel carousel-fade slide" data-ride="carousel" data-interval="3000">
                <!-- Indicators -->
                <ol class="carousel-indicators carousel-indicators-hero-img">
                  <li data-target="#carousel-hero-img" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-hero-img" data-slide-to="1"></li>
                  <li data-target="#carousel-hero-img" data-slide-to="2"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                  <div class="ms-hero-img-slider item active">
                    <img src="images/demo/hero1.png" alt="" class="img-responsive"> </div>
                  <div class="ms-hero-img-slider item">
                    <img src="images/demo/hero3.png" alt="" class="img-responsive"> </div>
                  <div class="ms-hero-img-slider item">
                    <img src="images/demo/hero2.png" alt="" class="img-responsive"> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> --}}
      <section id="home">
        @include('partials._video_carrousel')
      </section>
      <!-- container -->
      <section id="aboutus" class="mt-6">
        <div class="wrap ms-hero-img-city2 ms-hero-bg-light color-white ms-bg-fixed">
          <div class="container">
            <h1 class="text-center color-warning wow zoomInDown blue-genetic title-genetic"><strong>¿Quiénes somos nosotros?</strong></h1>
            <div class="row" style="margin-bottom: 50px">
              {{-- <div class="col-md-6 col-md-push-6 mb-4  center-block">
                <img src="images/demo/molecules.png" alt="" class="img-responsive center-block wow zoomIn animation-delay-12 ">
              </div> --}}
              <div class="col-md-6 col-md-push-6 pr-6">
                <p class="wow fadeInRight animation-delay-6">
                  Nuestro equipo de ingenieros comparte con nosotros la ideología de nuestra marca, una molécula
                  de <strong><span class="blue-genetic">A</span><span class="dark-yellow-genetic">D</span><span class="red-genetic">N</span></strong> que nos caracteriza como individuos, como creación única. Nuestros proyectos y metodologías
                  también lo son.
                </p>
                <p class="wow fadeInRight animation-delay-7">
                  Lo invitamos a que navegue un poco más en nuestra web, para que conozca a fondo lo  que hacemos, lo que nos hace diferentes, y cómo nuestro concepto de negocio puede ayudar a su organización.
                </p>
              </div>
              <div class="col-md-6 col-md-pull-6 pr-6">
                <p class="wow fadeInLeft animation-delay-6">
                  <strong>Genetic Software Costa Rica</strong>, nace en el 2012 como una idea de emprendimiento, de pasión por la tecnología,
                  y por deseo infinito de hacer bien las cosas desde la primera vez, con  el objetivo de
                  agradar a nuestros clientes actuales y potenciales.
                </p>
                <p class="wow fadeInLeft animation-delay-7">
                  Cada proyecto que hemos realizado lleva una gran dosis de  esfuerzo, entusiasmo, creatividad y
                  los mejores estándares de calidad e innovación que diferencian nuestros desarrollos.
                </p>
                {{-- <div class="text-center">
                  <a href="javascript:void(0)" class="btn btn-warning btn-raised mr-1 wow flipInX animation-delay-14">
                    <i class="zmdi zmdi-chart-donut"></i> Action here </a>
                  <a href="javascript:void(0)" class="btn btn-info btn-raised wow flipInX animation-delay-16">
                    <i class="zmdi zmdi-case"></i> Button</a>
                </div> --}}
              </div>
            </div>
            <h1 class="text-center color-warning wow zoomInDown blue-genetic title-genetic">A lo largo de nuestra trayectoria</h1>
            <div class="row">
              <div class="mt-6 color-dark">
                <div class="row">
                  <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card blue-genetic card-block text-center wow zoomInUp animation-delay-2">
                      <h2 class="counter">300000</h2>
                      <i class="blue-genetic fa fa-4x fa-code"></i>
                      <p class="mt-2 no-mb lead small-caps">líneas de código</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card dark-yellow-genetic card-block text-center wow zoomInUp animation-delay-5">
                      <h2 class="counter">100</h2>
                      <i class="dark-yellow-genetic fa fa-4x fa-bullseye"></i>
                      <p class="mt-2 no-mb lead small-caps">planes de mercadeo</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card blue-genetic card-block text-center wow zoomInUp animation-delay-4">
                      <h2 class="counter">1000</h2>
                      <i class="blue-genetic fa fa-4x fa-bug"></i>
                      <p class="mt-2 no-mb lead small-caps">Bugs resueltos</p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card dark-yellow-genetic card-block text-center wow zoomInUp animation-delay-3">
                      <h2 class="counter">500</h2>
                      <i class="dark-yellow-genetic fa fa-4x fa-coffee"></i>
                      <p class="mt-2 no-mb lead small-caps">tazas de café</p>
                    </div>
                  </div>
                </div>
                {{-- <div class="text-center color-white mw-800 center-block mt-4">
                  <p class="lead lead-lg wow fadeInUp animation-delay-2">Discover our projects and the rigorous process of creation. Our principles are creativity, design, experience and knowledge. We are backed by 20 years of research.</p>
                  <a href="javascript:void(0)" class="btn btn-raised btn-xlg btn-info wow flipInX animation-delay-5">
                     Cotice su proyecto
                   </a>
                </div> --}}
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="services" class="mt-6">
        <div class="wrap ms-hero-img-city2 ms-hero-bg-light color-white ms-bg-fixed">
          <div class="container">
            <div class="text-center mb-4">
              <h1 class="color-warning wow zoomInDown blue-genetic title-genetic"><strong>Nuestros Servicios</strong></h1>
            </div>
            <div class="row">
              <div class="col-md-6">
                <p class="wow fadeInUp animation-delay-4 col-md-push-6">
                  En <strong>Genetic Software Costa Rica</strong>, nuestra prioridad es  potenciar la vida comercial
                  las organizaciones.
                </p>
                <p class="wow fadeInUp animation-delay-5 col-md-push-6">
                  Vimos la oportunidad de fusionar nuestro conocimiento en mercadotecnia y
                  administración estratégica con las últimas tecnologías en desarrollo de software.
                  Y es a través de esto que podemos ayudarle a que su marca sea aún más visible y
                  que logre más rápido sus objetivos organizacionales.
                </p>
                  {{-- <a href="#" class="color-warning">quibusdam odio eius eligendi</a> tenetur! Ea, repudiandae eveniet ab minima laboriosam minima voluptate quaerat sequi harum.</p> --}}
                <ol class="wow fadeInUp animation-delay-6 col-md-push-6">
                  <li><strong>Software</strong>
                    <ul>
                     <li>Refactorización de software</li>
                      <li>Software a la medida</li>
                      <li>Aplicaciones móviles,</li>
                      <li>Consultoría</li>
                    </ul>
                  </li>
                  <li><strong>Soluciones administrativas y mercadológicas</strong>
                    <ul>
                      <li>Mercadeo Digital</li>
                      <li>SEO (Optimización en motores de búsqueda)</li>
                      <li>Creación de Contenido Estratégico</li>
                      <li>Asesorías de Planificacion Estratégica y Soluciones Administrativass</li>
                      <li>Generación de Leads</li>
                      <li>Servicios de Fotografía y Diseño Corporativo</li>
                    </ul>
                  </li>
                 </ol>
              </div>
              <div class="col-md-6">
                <div class="panel-group ms-collapse color-dark" id="accordion2" role="tablist" aria-multiselectable="true">
                  <div class="panel panel-info wow fadeInUp animation-delay-1">
                    <div class="panel-heading bg-blue-genetic" role="tab" id="headingOne2">
                      <h4 class="panel-title">
                        <a class="withripple" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne2" aria-expanded="true" aria-controls="collapseOne2">
                          <i class="fa fa-lightbulb-o"></i> ¿Qué se entiende por refactorización? </a>
                      </h4>
                    </div>
                    <div id="collapseOne2" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne2">
                      <div class="panel-body in">
                        <p>La refactorización es una técnica que consiste en hacer una aplicación escalable a través de cambios en el
                          código. Porque su código anterior no lo permitía.
                          Nos encontramos en una época de acelerado desarrollo, las empresas cada vez más deben ofrecer mejores soluciones
                          a sus clientes, más rápidas y ágiles, y esto solo se logra a través de un software de calidad, sin errores,
                          escalable y mantenible, que se adapte y supere las exigencias del mercado.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-info wow fadeInUp animation-delay-5">
                    <div class="panel-heading bg-blue-genetic" role="tab" id="headingTwo2">
                      <h4 class="panel-title">
                        <a class="collapsed withripple" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                          <i class="fa fa-desktop"></i> ¿Cuándo es necesaria una refactorización de software? </a>
                      </h4>
                    </div>
                    <div id="collapseTwo2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo2">
                      <div class="panel-body">
                        <p>
                          Una aplicación requiere una refactorización cuando por ejemplo el proveedor actual del servicio
                          dice que tarda mucho en realizar algún tipo de ajuste, o inclusive dice que existe mucha dificultad
                          para realizar cambios en esta.  Además, un sitio web desactualizado, o aplicaciones que constantemente
                          se “caen” también pueden optar por un proceso de refactorización.
                          Nuestra intención a través de este servicio es brindar una posibilidad para aquellos clientes que
                          han invertido sus recursos en un software destinado a traer beneficios a sus organizaciones pero
                          que no  pudo complacer los requerimientos del cliente por una mala programación previa,
                          o porque no se comprendió en realidad cuál era la necesidad verdadera.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-info wow fadeInUp animation-delay-7">
                    <div class="panel-heading bg-blue-genetic" role="tab" id="headingThree3">
                      <h4 class="panel-title">
                        <a class="collapsed withripple" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2" aria-expanded="false" aria-controls="collapseThree2">
                          <i class="fa fa-user"></i> ¿Qué es software a la medida?  </a>
                      </h4>
                    </div>
                    <div id="collapseThree2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree2">
                      <div class="panel-body">
                        <p>
                          A pesar de la facilidad actual de encontrar soluciones de software existentes,
                          muchas veces estas no se adaptan  a un giro de negocio en específico.
                          Nada mejor para un problema particular que una respuesta especializada, es ahí donde el software
                          a la medida es lo más indicado. En Genetic Software comprendemos las necesidades específicas de cada uno
                          de nuestros clientes, logramos materializar sus ideas en proyectos útiles e innovadores.
                          Nuestro software a la medida logra posicionar a los clientes en un entorno digital competitivo,
                          con mayor alcance y mejores resultados.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-info wow fadeInUp animation-delay-9">
                    <div class="panel-heading bg-blue-genetic" role="tab" id="headingTwo4">
                      <h4 class="panel-title">
                        <a class="collapsed withripple" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour2" aria-expanded="false" aria-controls="collapseFour2">
                          <i class="fa fa-mobile"></i> Diseño de aplicaciones para móviles </a>
                      </h4>
                    </div>
                    <div id="collapseFour2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour2">
                      <div class="panel-body">
                        <p>
                          Dentro de nuestros servicios especializados se encuentra el desarrollo de
                          aplicaciones a la medida en las plataformas más populares del mercado como Android y iOS.
                          Una de las mayores ventajas de un desarrollo de aplicaciones móviles a la medida es que
                          estas pueden ayudar a su negocio a posicionarse de una mejor manera, otorgando mayor grado de
                          visibilidad,  y mayor dominio del entorno digital.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-info wow fadeInUp animation-delay-11">
                    <div class="panel-heading bg-blue-genetic" role="tab" id="headingTwo4">
                      <h4 class="panel-title">
                        <a class="collapsed withripple" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseFive2" aria-expanded="false" aria-controls="collapseFive2">
                          <i class="fa fa-bullseye"></i> Mercadeo Digital </a>
                      </h4>
                    </div>
                    <div id="collapseFive2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive2">
                      <div class="panel-body">
                        <p>
                          Ayudamos a las empresas sin importar su categorización o industria  a mostrar mejor contenido digital.
                          Somos expertos en SEO (Search  Engine Optimization). Compartimos la idea de que los motores de búsqueda
                          son la mejor manera de atraer tráfico. Ayudamos a nuestros clientes a mejorar su visibilidad del sitio web,
                          convirtiéndolos en herramientas verdaderamente útiles.
                          Nuestros servicios de mercadeo:
                          <ol>
                            <li>SEO</li>
                            <li>Generación de Contenido</li>
                            <li>Asesoría de Marca</li>
                            <li>Planificación Estratégica</li>
                            <li>Endo Marketing (Campañas y estrategias)</li>
                            <li>Marketing Externo</li>
                            <li>Campañas de Fidelización de Clientes</li>
                          </ul>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="technologies" class="mt-6">
        <div class="wrap ms-hero-img-city2 ms-hero-bg-light color-white ms-bg-fixed">
          <div class="container">
            <div class="row">
              <h1 class="font-light">Tecnologías que te permiten escalar</h1>
              <p class="lead blue-genetic">— Le ofrecemos la combinación de herramientas óptimas para brindarle una solución a la medida</p>
              <div class="panel panel-light panel-flat">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs nav-tabs-transparent indicator-primary nav-tabs-full nav-tabs-5" role="tablist">
                  <li class="wow fadeInDown animation-delay-6 active" role="presentation">
                    <a href="#web" aria-controls="web" role="tab" data-toggle="tab" class="withoutripple">
                      <i class="zmdi zmdi-language-html5"></i>
                      <span class="hidden-xs">Web</span>
                    </a>
                  </li>
                  <li class="wow fadeInDown animation-delay-4" role="presentation">
                    <a href="#mobile" aria-controls="mobile" role="tab" data-toggle="tab" class="withoutripple">
                      <i class="zmdi zmdi-android"></i>
                      <i class="zmdi zmdi-apple"></i>
                      <span class="hidden-xs">Móviles</span>
                    </a>
                  </li>
                  <li class="wow fadeInDown animation-delay-4" role="presentation">
                    <a href="#refactoring" aria-controls="refactoring" role="tab" data-toggle="tab" class="withoutripple">
                      <i class="fa fa-cogs"></i>
                      <span class="hidden-xs">Refactorización</span>
                    </a>
                  </li>
                  <li class="wow fadeInDown animation-delay-6" role="presentation">
                    <a href="#chatbots" aria-controls="chatbots" role="tab" data-toggle="tab" class="withoutripple">
                      <i class="fa fa-comments"></i>
                      <span class="hidden-xs">Chatbots</span>
                    </a>
                  </li>
                </ul>
                <div class="panel-body">
                  <!-- Tab panes -->
                  <div class="tab-content mt-4">
                    <div role="tabpanel" class="tab-pane active in fade" id="web">
                      <div class="row">
                        <div class="col-md-6 col-md-push-6">
                          <img src="images/main/web.png" alt="" class="img-responsive animated zoomIn animation-delay-8"> </div>
                        <div class="col-md-6 col-md-pull-6">
                          <h3 class="text-normal animated fadeInUp animation-delay-4">¿Cuenta su negocio con una óptima aplicación web?</h3>
                          <p class="lead lead-md animated fadeInUp animation-delay-6">
                            Las tendencias digitales y su constante evolución nos obligan en la actualidad a tener no solamente un sitio web común que solo muestra información y fotos,
                            si no aplicaciones que sean capaces de ofrecer interacción con el usuario y sacar provecho de la herramienta.
                          </p>
                          <p class="lead lead-md animated fadeInUp animation-delay-7">
                            Modelamos sus aplicaciones con frameworks ligeros que le permitan una experiencia veloz y provechosa
                            al usuario desde cualquier dispositivo.
                          </p>
                        </div>
                      </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="mobile">
                      <div class="row">
                        <div class="col-md-6 col-md-push-6">
                          <img src="images/main/mobile.png" alt="" class="img-responsive animated zoomIn animation-delay-8"> </div>
                        <div class="col-md-6 col-md-pull-6">
                          <h3 class="text-normal animated fadeInUp animation-delay-4">¿Llega su negocio hasta el dispositivo móvil de sus clientes?</h3>
                          <p class="lead lead-md animated fadeInUp animation-delay-6">
                            Mejore la presencia de su marca y expanda su dominio digital.
                          </p>
                          <p class="lead lead-md animated fadeInUp animation-delay-6">
                            Solo piense que desea, nosotros nos encargamos de que sus aplicaciones cobren vida.
                          </p>
                        </div>
                      </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="refactoring">
                      <div class="row">
                        <div class="col-md-6 col-md-push-6">
                          <img src="images/main/refactoring.png" alt="" class="img-responsive animated zoomIn animation-delay-8"> </div>
                        <div class="col-md-6 col-md-pull-6">
                          <h3 class="text-normal animated fadeInUp animation-delay-4">¿Considera usted que uno de sus sistemas es inservible?</h3>
                          <p class="lead lead-md animated fadeInUp animation-delay-6">
                            Las aplicaciones "obsoletas", los sistemas con errores frecuentes y lentos, o cualquiera que sea la
                            situación de su sistema o aplicación no significa el fin de estos, o que su inversión inicial
                            se ha transformado en un gasto infructuoso.
                          </p>
                          <p class="lead lead-md animated fadeInUp animation-delay-6">
                            Nosotros le ayudamos para que su sistema o aplicación obtenga la productividad deseada
                            partiendo del existente y creando una herramienta escalable.
                          </p>
                        </div>
                      </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="chatbots">
                      <div class="row">
                        <div class="col-md-6 col-md-push-6">
                          <img src="images/main/chatbot.png" alt="" class="img-responsive animated zoomIn animation-delay-8"> </div>
                        <div class="col-md-6 col-md-pull-6">
                          <h3 class="text-normal animated fadeInUp animation-delay-4">¿Inteligencia artificial y FAQ's?</h3>
                          <p class="lead lead-md animated fadeInUp animation-delay-6">
                            Satisfaga la demanda de respuesta inmediata de su público.
                          </p>
                          <p class="lead lead-md animated fadeInUp animation-delay-6">
                            Agilice los procesos de respuesta ante preguntas frecuentes por medio de robots inteligentes
                            que responden rapidamente y con informacion de su negocio.
                          </p>
                          <p class="lead lead-md animated fadeInUp animation-delay-6">
                            Incopore la inteligencia artificial en la interaccion diaria con sus clientes.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="values" class="mt-6">
        <div class="wrap ms-hero-img-city2 ms-hero-bg-light color-white ms-bg-fixed">
          <div class="container">
            <div class="text-center mb-4">
              <h1 class="color-warning wow zoomInDown blue-genetic title-genetic"><strong>Nuestros valores</strong></h1>
            </div>
            <div class="row">
              <div class="ms-feature col-lg-3 col-md-6 col-sm-6 card wow flipInX animation-delay-4">
                <div class="text-center card-block">
                  <span class="ms-icon ms-icon-circle ms-icon-xxlg bg-blue-genetic">
                    <i class="far fa-lightbulb"></i>
                  </span>
                  <h4 class="blue-genetic">Creatividad</h4>
                  <p class="">
                    Fomentamos una cultura creativa donde nuestros colaboradores se sienten a gusto de imaginar nuevas soluciones.
                  </p>
                </div>
              </div>
              <div class="ms-feature col-lg-3 col-md-6 col-sm-6 card wow flipInX animation-delay-8">
                <div class="text-center card-block">
                  <span class="ms-icon ms-icon-circle ms-icon-xxlg bg-dark-yellow-genetic">
                    <i class="far fa-paper-plane"></i>
                  </span>
                  <h4 class="dark-yellow-genetic">Innovación</h4>
                  <p class="">
                    Creemos que innovar es inventar, es crecer, es correr riesgos y es finalmente romper la regla del “no se puede hacer”.
                  </p>
                </div>
              </div>
              <div class="ms-feature col-lg-3 col-md-6 col-sm-6 card wow flipInX animation-delay-4">
                <div class="text-center card-block">
                  <span class="ms-icon ms-icon-circle ms-icon-xxlg bg-blue-genetic">
                    <i class="far fa-heart"></i>
                  </span>
                  <h4 class="blue-genetic">Integridad</h4>
                  <p class="">
                    La entereza moral es clave para desarrollar organizaciones saludables.
                    Manejamos nuestro entorno con respeto.
                  </p>
                </div>
              </div>
              <div class="ms-feature col-lg-3 col-md-6 col-sm-6 card wow flipInX animation-delay-8">
                <div class="text-center card-block">
                  <span class="ms-icon ms-icon-circle ms-icon-xxlg bg-dark-yellow-genetic">
                    <i class="zmdi zmdi-trending-up"></i>
                  </span>
                  <h4 class="dark-yellow-genetic">Mejoramiento continuo</h4>
                  <p class="">
                    Creemos en la administración de calidad.  Mejoramos debilidades y potenciamos nuestras fortalezas.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--container -->
      {{-- <div class="wrap wrap-danger mt-6">
        <h2 class="text-center no-m">¿Qué dicen nuestros clientes?</h2>
        <div id="carousel-example-generic" class="carousel carousel-cards carousel-fade slide" data-ride="carousel" data-interval="7000">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <div class="carousel-caption">
                <div class="container">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="card animated flipInX animation-delay-2">
                        <blockquote class="blockquote-avatar withripple">
                          <img src="images/demo/avatar.png" alt="" class="avatar hidden-xs">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante ultricies nisi vel augue quam semper libero.</p>
                          <footer>Jose Alberto Nuñez, Hidromundo.</footer>
                        </blockquote>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="card animated flipInX animation-delay-3">
                        <blockquote class="blockquote-avatar withripple">
                          <img src="images/demo/avatar.png" alt="" class="avatar hidden-xs">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante ultricies nisi vel augue quam semper libero.</p>
                          <footer>Fabián Quiros, Mayda.</footer>
                        </blockquote>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="card animated flipInX animation-delay-4">
                        <blockquote class="blockquote-avatar withripple">
                          <img src="images/demo/avatar.png" alt="" class="avatar hidden-xs">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante ultricies nisi vel augue quam semper libero.</p>
                          <footer>Fernando González, Prevassa.</footer>
                        </blockquote>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="carousel-caption">
                <div class="container">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="card animated flipInX animation-delay-2">
                        <blockquote class="blockquote-avatar withripple">
                          <img src="images/demo/avatar.png" alt="" class="avatar hidden-xs">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante ultricies nisi vel augue quam semper libero.</p>
                          <footer>Brian Krzanich, Intel CEO.</footer>
                        </blockquote>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="card animated flipInX animation-delay-3">
                        <blockquote class="blockquote-avatar withripple">
                          <img src="images/demo/avatar.png" alt="" class="avatar hidden-xs">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante ultricies nisi vel augue quam semper libero.</p>
                          <footer>Brian Krzanich, Intel CEO.</footer>
                        </blockquote>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="card animated flipInX animation-delay-4">
                        <blockquote class="blockquote-avatar withripple">
                          <img src="images/demo/avatar.png" alt="" class="avatar hidden-xs">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante ultricies nisi vel augue quam semper libero.</p>
                          <footer>Brian Krzanich, Intel CEO.</footer>
                        </blockquote>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="carousel-caption">
                <div class="container">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="card animated flipInX animation-delay-2">
                        <blockquote class="blockquote-avatar withripple">
                          <img src="images/demo/avatar.png" alt="" class="avatar hidden-xs">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante ultricies nisi vel augue quam semper libero.</p>
                          <footer>Brian Krzanich, Intel CEO.</footer>
                        </blockquote>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="card animated flipInX animation-delay-3">
                        <blockquote class="blockquote-avatar withripple">
                          <img src="images/demo/avatar.png" alt="" class="avatar hidden-xs">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante ultricies nisi vel augue quam semper libero.</p>
                          <footer>Brian Krzanich, Intel CEO.</footer>
                        </blockquote>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="card animated flipInX animation-delay-4">
                        <blockquote class="blockquote-avatar withripple">
                          <img src="images/demo/avatar.png" alt="" class="avatar hidden-xs">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante ultricies nisi vel augue quam semper libero.</p>
                          <footer>Brian Krzanich, Intel CEO.</footer>
                        </blockquote>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Controls -->
          <a class="left carousel-control btn btn-white btn-raised" href="#carousel-example-generic" role="button" data-slide="prev">
            <i class="zmdi zmdi-arrow-left"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control btn btn-white btn-raised" href="#carousel-example-generic" role="button" data-slide="next">
            <i class="zmdi zmdi-arrow-right"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div> --}}
      <!-- another section -->
      {{-- <div class="container mt-6">
        <h2 class="text-center color-primary mb-4">Our Latest Works</h2>
        <div class="owl-dots"></div>
        <div class="owl-carousel owl-theme">
          <div class="card animation-delay-6">
            <div class="withripple zoom-img">
              <a href="javascript:void()">
                <img src="images/demo/port4.jpg" alt="..." class="img-responsive">
              </a>
            </div>
            <div class="card-block">
              <h3 class="color-primary">Thumbnail label</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, repellat, vitae porro ex expedita cumque nulla.</p>
              <p class="text-right">
                <a href="javascript:void()" class="btn btn-primary btn-raised text-right" role="button">
                  <i class="zmdi zmdi-collection-image-o"></i> View More</a>
              </p>
            </div>
          </div>
          <div class="card card-dark-inverse animation-delay-8">
            <div class="withripple zoom-img">
              <a href="javascript:void()">
                <img src="images/demo/port24.jpg" alt="..." class="img-responsive">
              </a>
            </div>
            <div class="card-block">
              <h3 class="">Thumbnail label</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, repellat, vitae porro ex expedita cumque nulla.</p>
              <p class="text-right">
                <a href="javascript:void()" class="btn btn-info btn-raised text-right" role="button">
                  <i class="zmdi zmdi-collection-image-o"></i> View More</a>
              </p>
            </div>
          </div>
          <div class="card animation-delay-10">
            <div class="withripple zoom-img">
              <a href="javascript:void()">
                <img src="images/demo/port7.jpg" alt="..." class="img-responsive">
              </a>
            </div>
            <div class="card-block">
              <h3 class="color-primary">Thumbnail label</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, repellat, vitae porro ex expedita cumque nulla.</p>
              <p class="text-right">
                <a href="javascript:void()" class="btn btn-primary btn-raised text-right" role="button">
                  <i class="zmdi zmdi-collection-image-o"></i> View More</a>
              </p>
            </div>
          </div>
          <div class="card animation-delay-6">
            <div class="withripple zoom-img">
              <a href="javascript:void()">
                <img src="images/demo/port8.jpg" alt="..." class="img-responsive">
              </a>
            </div>
            <div class="card-block">
              <h3 class="color-primary">Thumbnail label</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, repellat, vitae porro ex expedita cumque nulla.</p>
              <p class="text-right">
                <a href="javascript:void()" class="btn btn-primary btn-raised text-right" role="button">
                  <i class="zmdi zmdi-collection-image-o"></i> View More</a>
              </p>
            </div>
          </div>
          <div class="card card-dark-inverse animation-delay-8">
            <div class="withripple zoom-img">
              <a href="javascript:void()">
                <img src="images/demo/port9.jpg" alt="..." class="img-responsive">
              </a>
            </div>
            <div class="card-block">
              <h3 class="">Thumbnail label</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, repellat, vitae porro ex expedita cumque nulla.</p>
              <p class="text-right">
                <a href="javascript:void()" class="btn btn-info btn-raised text-right" role="button">
                  <i class="zmdi zmdi-collection-image-o"></i> View More</a>
              </p>
            </div>
          </div>
          <div class="card animation-delay-10">
            <div class="withripple zoom-img">
              <a href="javascript:void()">
                <img src="images/demo/port5.jpg" alt="..." class="img-responsive">
              </a>
            </div>
            <div class="card-block">
              <h3 class="color-primary">Thumbnail label</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, repellat, vitae porro ex expedita cumque nulla.</p>
              <p class="text-right">
                <a href="javascript:void()" class="btn btn-primary btn-raised text-right" role="button">
                  <i class="zmdi zmdi-collection-image-o"></i> View More</a>
              </p>
            </div>
          </div>
          <div class="card animation-delay-6">
            <div class="withripple zoom-img">
              <a href="javascript:void()">
                <img src="images/demo/port11.jpg" alt="..." class="img-responsive">
              </a>
            </div>
            <div class="card-block">
              <h3 class="color-primary">Thumbnail label</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, repellat, vitae porro ex expedita cumque nulla.</p>
              <p class="text-right">
                <a href="javascript:void()" class="btn btn-primary btn-raised text-right" role="button">
                  <i class="zmdi zmdi-collection-image-o"></i> View More</a>
              </p>
            </div>
          </div>
          <div class="card card-dark-inverse animation-delay-8">
            <div class="withripple zoom-img">
              <a href="javascript:void()">
                <img src="images/demo/port3.jpg" alt="..." class="img-responsive">
              </a>
            </div>
            <div class="card-block">
              <h3 class="">Thumbnail label</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, repellat, vitae porro ex expedita cumque nulla.</p>
              <p class="text-right">
                <a href="javascript:void()" class="btn btn-info btn-raised text-right" role="button">
                  <i class="zmdi zmdi-collection-image-o"></i> View More</a>
              </p>
            </div>
          </div>
          <div class="card animation-delay-10">
            <div class="withripple zoom-img">
              <a href="javascript:void()">
                <img src="images/demo/port14.jpg" alt="..." class="img-responsive">
              </a>
            </div>
            <div class="card-block">
              <h3 class="color-primary">Thumbnail label</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, repellat, vitae porro ex expedita cumque nulla.</p>
              <p class="text-right">
                <a href="javascript:void()" class="btn btn-primary btn-raised text-right" role="button">
                  <i class="zmdi zmdi-collection-image-o"></i> View More</a>
              </p>
            </div>
          </div>
        </div>
      </div> --}}
      <section id="contact" class="mt-6">
        <div class="wrap ms-hero-img-city2 ms-hero-bg-light color-white ms-bg-fixed">
          {{-- <div class="wrap ms-hero-img-city2 ms-hero-bg-light color-white ms-bg-fixed"> --}}
          <div class="container">
            <div class="text-center mb-4">
              <h1 class="color-warning wow zoomInDown blue-genetic title-genetic"><strong>Contacto</strong></h1>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="card card-primary animated zoomInUp animation-delay-5">
                  <div class="card-block">
                    <form id="contact-form" class="form-horizontal" method="post" action="{{ asset('/contact/send_email') }}">
                      {{ csrf_field() }}
                      <fieldset>
                        <div class="form-group">
                          <div class="col-md-12">
                            <input type="text" class="form-control" name="name" placeholder="Nombre"> </div>
                        </div>
                        <div class="form-group">
                          <div class="col-md-12">
                            <input type="email" class="form-control" name="email" placeholder="Correo Electrónico"> </div>
                        </div>
                        <div class="form-group">
                          <div class="col-md-12">
                            <input type="text" class="form-control" name="subject_info" placeholder="Título"> </div>
                        </div>
                        <div class="form-group">
                          <div class="col-md-12">
                            <textarea class="form-control" rows="5" name="message_info" placeholder="Tu mensaje..."></textarea>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-md-12">
                            <button type="submit" class="btn btn-raised bg-blue-genetic" style="color: white">Enviar</button>
                          </div>
                        </div>
                      </fieldset>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- container -->
        </div>
      </section>
      <aside class="ms-footbar">
        <div class="container">
          <div class="row">
            <div class="col-md-4 ms-footer-col">
              <div class="ms-footbar-block">
                <h3 class="ms-footbar-title">Noticias</h3>
                <p class="">Suscríbase a nuestro boletín</p>
                <form>
                  <div class="form-group label-floating mt-2 mb-1">
                    <div class="input-group ms-input-subscribe">
                      <label class="control-label" for="ms-subscribe">
                        <i class="zmdi zmdi-email"></i> Correo eletrónico</label>
                      <input type="email" id="ms-subscribe" class="form-control" style="color: black !important"> </div>
                  </div>
                  <button class="ms-subscribre-btn" type="button">Suscribirse</button>
                </form>
              </div>
            </div>
            <div class="col-md-5 col-sm-7 ms-footer-col ms-footer-alt-color">
              <div class="ms-footbar-block">
                <h3 class="ms-footbar-title text-center mb-2">Artículos recientes</h3>
                <div class="ms-footer-media">
                  @foreach($posts as $p)
                    <div class="media">
                      <div class="media-left media-middle">
                        <a href="javascript:void(0)">
                          <img class="media-object media-object-circle" src="images/demo/p75.jpg" alt="..."> </a>
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading">
                          <a href="{{{ $p->link }}}" target="_blank">{{{ $p->slug }}}</a>
                        </h4>
                        <div class="media-footer">
                          <span>
                            <i class="zmdi zmdi-time color-info-light"></i>{{{ $p->formatted_date }}}</span>
                          {{-- <span>
                            <i class="zmdi zmdi-folder-outline color-warning-light"></i>
                            <a href="javascript:void(0)">Design</a>
                          </span> --}}
                        </div>
                      </div>
                    </div>
                  @endforeach
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-5 ms-footer-col ms-footer-text-right">
              <div class="ms-footbar-block">
                <div class="ms-footbar-title">
                  <h3 class="ms-footbar-title">Contáctenos</h3>
                </div>
                <address class="no-mb">
                  <p>
                    <i class="color-danger-light zmdi zmdi-pin mr-1"></i> Santa Ana, San José, Costa Rica</p>
                </address>
                <br>
                <address class="no-mb">
                  <p>
                    <i class="color-info-light zmdi zmdi-email mr-1"></i>
                    <a href="mailto:joe@example.com">carlos@geneticsoftware.net</a>
                  </p>
                  <p>
                    <i class="color-royal-light zmdi zmdi-phone mr-1"></i>+506 88157067 </p>
                </address>
                <address class="no-mb">
                  <p>
                    <i class="color-info-light zmdi zmdi-email mr-1"></i>
                    <a href="mailto:joe@example.com">stefania@geneticsoftware.net</a>
                  </p>
                  <p>
                    <i class="color-royal-light zmdi zmdi-phone mr-1"></i>+506 88972210 </p>
                </address>
              </div>
              <div class="ms-footbar-block">
                <h3 class="ms-footbar-title">Redes Sociales</h3>
                <div class="ms-footbar-social">
                  <a href="javascript:void(0)" class="btn-circle btn-facebook">
                    <i class="zmdi zmdi-facebook"></i>
                  </a>
                  <a href="javascript:void(0)" class="btn-circle btn-twitter">
                    <i class="zmdi zmdi-twitter"></i>
                  </a>
                  <a href="javascript:void(0)" class="btn-circle btn-youtube">
                    <i class="zmdi zmdi-youtube"></i>
                  </a>
                  <a href="javascript:void(0)" class="btn-circle btn-linkedin">
                    <i class="zmdi zmdi-linkedin"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </aside>
      <footer class="ms-footer">
        <div class="container">
          <p>Copyright &copy; Genetic Software {{{ date("Y") }}}, <strong><i>Somos Software que potencia Marcas</i></strong></p>
        </div>
      </footer>
      <div class="btn-back-top">
        <a href="#" data-scroll id="back-top" class="btn-circle btn-circle-primary btn-circle-sm btn-circle-raised ">
          <i class="zmdi zmdi-long-arrow-up"></i>
        </a>
      </div>
    </div>
    <!-- sb-site-container -->
    @include('partials._mobile_menu')
    <script src="{{ asset('js/plugins.min.js') }}"></script>
    <script src="{{ asset('js/app.min.js') }}"></script>
    <script src="{{ asset('js/index.js') }}"></script>

    <script src="{{ asset('plugins/revolution/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script type="text/javascript">
      $(function()
      {
        $('#Container').mixItUp();
      });
      var tpj = jQuery;
      var revapi1014;
      tpj(document).ready(function()
      {
        if (tpj("#rev_slider_1014_1").revolution == undefined)
        {
          revslider_showDoubleJqueryError("#rev_slider_1014_1");
        }
        else
        {
          revapi1014 = tpj("#rev_slider_1014_1").show().revolution(
          {
            sliderType: "standard",
            jsFileLocation: "plugins/revolution/revolution/js/",
            sliderLayout: "fullscreen",
            dottedOverlay: "none",
            delay: 9000,
            navigation:
            {
              keyboardNavigation: "off",
              keyboard_direction: "horizontal",
              mouseScrollNavigation: "off",
              mouseScrollReverse: "default",
              onHoverStop: "off",
              touch:
              {
                touchenabled: "on",
                swipe_threshold: 75,
                swipe_min_touches: 1,
                swipe_direction: "horizontal",
                drag_block_vertical: false
              },
              arrows:
              {
                style: "uranus",
                enable: true,
                hide_onmobile: true,
                hide_under: 768,
                hide_onleave: false,
                tmp: '',
                left:
                {
                  h_align: "left",
                  v_align: "center",
                  h_offset: 20,
                  v_offset: 0
                },
                right:
                {
                  h_align: "right",
                  v_align: "center",
                  h_offset: 20,
                  v_offset: 0
                }
              }
            },
            responsiveLevels: [1240, 1024, 778, 480],
            visibilityLevels: [1240, 1024, 778, 480],
            gridwidth: [1240, 1024, 778, 480],
            gridheight: [868, 768, 960, 600],
            lazyType: "none",
            shadow: 0,
            spinner: "off",
            stopLoop: "on",
            stopAfterLoops: 0,
            stopAtSlide: 1,
            shuffle: "off",
            autoHeight: "off",
            fullScreenAutoWidth: "off",
            fullScreenAlignForce: "off",
            fullScreenOffsetContainer: "",
            fullScreenOffset: "60px",
            disableProgressBar: "on",
            hideThumbsOnMobile: "off",
            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            debugMode: false,
            fallbacks:
            {
              simplifyAll: "off",
              nextSlideOnWindowFocus: "off",
              disableFocusListener: false,
            }
          });
        }
        RsTypewriterAddOn(tpj, revapi1014);
      }); /*ready*/
    </script>
    <script type="text/javascript">
    if($('#message_alert').length)
      $('#message_alert').fadeOut(10000, function(){
        $(this).remove();
      });
    </script>
    <script type="text/javascript">
      function moveToContact(){
        $('html, body').animate({
          scrollTop: $("#contact").offset().top - 30
        }, 2000);
      }
    </script>
  </body>
</html>
