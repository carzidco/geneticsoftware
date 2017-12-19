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
    <link rel="shortcut icon" href="images/favicon.png?v=3">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- <link rel="stylesheet" href="../css/preload.min.css" /> -->
    <link href="{{ asset('css/plugins.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
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
                <span class="ms-logo animated zoomInDown animation-delay-5">
                  <img src="../images/genetic_main_logo.png" alt="" width="40" height="40">
                </span>
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
                          <label class="control-label" for="ms-form-user">Username</label>
                          <input type="text" id="ms-form-user" class="form-control"> </div>
                      </div>
                      <div class="form-group label-floating">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="zmdi zmdi-lock"></i>
                          </span>
                          <label class="control-label" for="ms-form-pass">Password</label>
                          <input type="password" id="ms-form-pass" class="form-control"> </div>
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
                      <div class="form-group label-floating">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="zmdi zmdi-lock"></i>
                          </span>
                          <label class="control-label" for="ms-form-pass">Password</label>
                          <input type="password" id="ms-form-pass" class="form-control"> </div>
                      </div>
                      <div class="form-group label-floating">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="zmdi zmdi-lock"></i>
                          </span>
                          <label class="control-label" for="ms-form-pass">Re-type Password</label>
                          <input type="password" id="ms-form-pass" class="form-control"> </div>
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
              <span class="ms-logo animated zoomInDown animation-delay-5">
                <img src="../images/genetic_main_logo.png" alt="" width="40" height="40">
              </span>
              <h1 class="animated fadeInRight animation-delay-6">Genetic
                <span>Software</span>
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
                <li class="animated fadeInRight animation-delay-2">
                  <a href="javascript:void(0)" class="btn-circle btn-facebook">
                    <i class="zmdi zmdi-facebook"></i>
                  </a>
                </li>
                <li class="animated fadeInRight animation-delay-1">
                  <a href="javascript:void(0)" class="btn-circle btn-twitter">
                    <i class="zmdi zmdi-twitter"></i>
                  </a>
                </li>
              </ul>
              <a href="javascript:void(0)" class="btn-circle btn-circle-primary animated zoomInDown animation-delay-7">
                <i class="zmdi zmdi-share"></i>
              </a>
            </div>
            <a href="javascript:void(0)" class="btn-circle btn-circle-primary no-focus animated zoomInDown animation-delay-8" data-toggle="modal" data-target="#ms-account-modal">
              <i class="zmdi zmdi-account"></i>
            </a>
            <form class="search-form animated zoomInDown animation-delay-9">
              <input id="search-box" type="text" class="search-input" placeholder="Search..." name="q" />
              <label for="search-box">
                <i class="zmdi zmdi-search"></i>
              </label>
            </form>
            <a href="javascript:void(0)" class="btn-ms-menu btn-circle btn-circle-primary sb-toggle-left animated zoomInDown animation-delay-10">
              <i class="zmdi zmdi-menu"></i>
            </a>
          </div>
        </div>
      </header>
      <nav class="navbar navbar-static-top yamm ms-navbar ms-navbar-white">
        <div class="container container-full">
          <div class="navbar-header">
            <a class="navbar-brand" href="index.html">
              <!-- <img src="images/demo/logo-navbar.png" alt=""> -->
              <span class="ms-logo ms-logo-sm">M</span>
              <span class="ms-title">Material
                <strong>Style</strong>
              </span>
            </a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="dropdown active">
                <a href="javascript:void(0)" class="dropdown-toggle animated fadeIn animation-delay-4" data-toggle="dropdown" data-hover="dropdown" data-name="home">Inicio
                  <i class="zmdi zmdi-chevron-down"></i>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <div class="ms-menu-double">
                      <ul class="ms-menu-double-main-menu">
                        <li class="active">
                          <a href="#tab-1" data-hover="tab" data-toggle="tab">
                            <i class="zmdi zmdi-home"></i> General Purpose</a>
                        </li>
                        <li>
                          <a href="#tab-2" data-hover="tab">
                            <i class="zmdi zmdi-desktop-windows"></i> Landing pages</a>
                        </li>
                        <li>
                          <a href="#tab-9" data-hover="tab">
                            <i class="zmdi zmdi-panorama-horizontal"></i> Slider Revolution</a>
                        </li>
                        <li>
                          <a href="#tab-3" data-hover="tab" data-toggle="tab">
                            <i class="zmdi zmdi-store"></i> Shop</a>
                        </li>
                        <li>
                          <a href="#tab-8" data-hover="tab" data-toggle="tab">
                            <i class="zmdi zmdi-account"></i> Professional Profile</a>
                        </li>
                        <li>
                          <a href="#tab-4" data-hover="tab" data-toggle="tab">
                            <i class="zmdi zmdi-edit"></i> Blog Template</a>
                        </li>
                        <li>
                          <a href="#tab-5" data-hover="tab" data-toggle="tab">
                            <i class="zmdi zmdi-flip"></i> Magazine Template</a>
                        </li>
                        <li>
                          <a href="#tab-6" data-hover="tab" data-toggle="tab">
                            <i class="zmdi zmdi-smartphone-iphone"></i> App Pages</a>
                        </li>
                        <li>
                          <a href="#tab-7" data-hover="tab" data-toggle="tab">
                            <i class="zmdi zmdi-search"></i> Classified Ads</a>
                        </li>
                      </ul>
                      <div class="tab-content ms-menu-double-submenu-container">
                        <div class="tab-pane active" id="tab-1">
                          <ul class="ms-menu-double-submenu">
                            <li>
                              <a href="index.html">Default Home</a>
                            </li>
                            <li>
                              <a href="home-generic-2.html">Home Black Slider</a>
                            </li>
                            <li>
                              <a href="home-generic-3.html">Home Browsers Intro</a>
                            </li>
                            <li>
                              <a href="home-generic-4.html">Home Mobile Intro</a>
                            </li>
                            <li>
                              <a href="home-generic-5.html">Home Material Icons</a>
                            </li>
                            <li>
                              <a href="home-generic-6.html">Home Typed Hero</a>
                            </li>
                            <li>
                              <a href="home-generic-7.html">Home Typed Hero 2</a>
                            </li>
                          </ul>
                        </div>
                        <div class="tab-pane" id="tab-2">
                          <ul class="ms-menu-double-submenu">
                            <li>
                              <a href="home-landing.html">Home Landing Intro</a>
                            </li>
                            <li>
                              <a href="home-landing2.html">Home Landing Intro 2</a>
                            </li>
                            <li>
                              <a href="home-landing4.html">Home Landing Intro 3</a>
                            </li>
                            <li>
                              <a href="home-landing3.html">Home Landing Video</a>
                            </li>
                            <li>
                              <a href="home-cv3.html">Home Profile Landing 1</a>
                            </li>
                            <li>
                              <a href="home-cv4.html">Home Profile Landing 2</a>
                            </li>
                            <li class="disable">
                              <a href="javascript:void(0)">Landing Video 2 (Next Update)</a>
                            </li>
                          </ul>
                        </div>
                        <div class="tab-pane" id="tab-9">
                          <ul class="ms-menu-double-submenu">
                            <li>
                              <a href="home-revolution.html">Home Revolution Devices
                                <span class="label label-success pull-right">1.3</span>
                              </a>
                            </li>
                            <li>
                              <a href="home-revolution2.html">Home Revolution App
                                <span class="label label-success pull-right">1.3</span>
                              </a>
                            </li>
                            <li>
                              <a href="home-revolution3.html">Home Revolution Video
                                <span class="label label-success pull-right">1.3</span>
                              </a>
                            </li>
                            <li>
                              <a href="home-revolution4.html">Home Revolution Idea
                                <span class="label label-success pull-right">1.3</span>
                              </a>
                            </li>
                          </ul>
                        </div>
                        <div class="tab-pane" id="tab-3">
                          <ul class="ms-menu-double-submenu">
                            <li>
                              <a href="home-shop.html">Home Shop 1</a>
                            </li>
                            <li>
                              <a href="home-shop2.html">Home Shop 2</a>
                            </li>
                            <li class="disable">
                              <a href="javascript:void(0)">Home Shop 3 (Next Update)</a>
                            </li>
                            <li class="disable">
                              <a href="javascript:void(0)">Home Shop 4 (Next Update)</a>
                            </li>
                          </ul>
                        </div>
                        <div class="tab-pane" id="tab-8">
                          <ul class="ms-menu-double-submenu">
                            <li>
                              <a href="home-cv.html">Home Profile 1</a>
                            </li>
                            <li>
                              <a href="home-cv2.html">Home Profile 2</a>
                            </li>
                            <li>
                              <a href="home-cv3.html">Home Profile Landing 1</a>
                            </li>
                            <li>
                              <a href="home-cv4.html">Home Profile Landing 2</a>
                            </li>
                          </ul>
                        </div>
                        <div class="tab-pane" id="tab-4">
                          <ul class="ms-menu-double-submenu">
                            <li>
                              <a href="home-blog.html">Home Blog 1</a>
                            </li>
                            <li>
                              <a href="home-blog2.html">Home Blog 2</a>
                            </li>
                            <li class="disable">
                              <a href="javascript:void(0)">Home Blog 3 (Next Update)</a>
                            </li>
                            <li class="disable">
                              <a href="javascript:void(0)">Home Blog 4 (Next Update)</a>
                            </li>
                          </ul>
                        </div>
                        <div class="tab-pane" id="tab-5">
                          <ul class="ms-menu-double-submenu">
                            <li>
                              <a href="home-magazine.html">Home Magazine 1</a>
                            </li>
                            <li class="disable">
                              <a href="javascript:void(0)">Magazine 2 (Next Update)</a>
                            </li>
                            <li class="disable">
                              <a href="javascript:void(0)">Magazine 3 (Next Update)</a>
                            </li>
                            <li class="disable">
                              <a href="javascript:void(0)">Magazine 4 (Next Update)</a>
                            </li>
                          </ul>
                        </div>
                        <div class="tab-pane" id="tab-6">
                          <ul class="ms-menu-double-submenu">
                            <li>
                              <a href="home-app.html">Home App 1</a>
                            </li>
                            <li>
                              <a href="home-app2.html">Home App 2</a>
                            </li>
                            <li class="disable">
                              <a href="javascript:void(0)">Home App 3 (Next Update)</a>
                            </li>
                            <li class="disable">
                              <a href="javascript:void(0)">Home App 4 (Next Update)</a>
                            </li>
                          </ul>
                        </div>
                        <div class="tab-pane" id="tab-7">
                          <ul class="ms-menu-double-submenu">
                            <li>
                              <a href="home-class.html">Home Classifieds 1</a>
                            </li>
                            <li class="disable">
                              <a href="javascript:void(0)">Classifieds 2 (Next Update)</a>
                            </li>
                            <li class="disable">
                              <a href="javascript:void(0)">Classifieds 3 (Next Update)</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="javascript:void(0)" class="dropdown-toggle animated fadeIn animation-delay-5" data-toggle="dropdown" data-hover="dropdown" data-name="page">Pages
                  <i class="zmdi zmdi-chevron-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-left animated-2x animated fadeIn">
                  <li class="dropdown-submenu">
                    <a href="javascript:void(0)" class="has_children">About us &amp; Team</a>
                    <ul class="dropdown-menu dropdown-menu-left">
                      <li>
                        <a href="page-about.html">About us Option 1</a>
                      </li>
                      <li>
                        <a href="page-about2.html">About us Option 2</a>
                      </li>
                      <li>
                        <a href="page-about3.html">About us Option 3</a>
                      </li>
                      <li>
                        <a href="page-about4.html">About us Option 4</a>
                      </li>
                      <li class="divider"></li>
                      <li>
                        <a href="page-team.html">Our Team Option 1</a>
                      </li>
                      <li>
                        <a href="page-team2.html">Our Team Option 2</a>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a href="javascript:void(0)" class="has_children">Form</a>
                    <ul class="dropdown-menu">
                      <li>
                        <a href="page-contact.html">Contact Option 1</a>
                      </li>
                      <li>
                        <a href="page-contact2.html">Contact Option 2</a>
                      </li>
                      <li class="divider"></li>
                      <li>
                        <a href="page-login_register.html">Login &amp; Register</a>
                      </li>
                      <li>
                        <a href="page-login.html">Login Full</a>
                      </li>
                      <li>
                        <a href="page-login2.html">Login Integrated</a>
                      </li>
                      <li class="divider"></li>
                      <li>
                        <a href="page-login_register2.html">Register Option 1</a>
                      </li>
                      <li>
                        <a href="page-register2.html">Register Option 2</a>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a href="javascript:void(0)" class="has_children">Profiles</a>
                    <ul class="dropdown-menu dropdown-menu-left">
                      <li>
                        <a href="page-profile.html">User Profile Option 1</a>
                      </li>
                      <li>
                        <a href="page-profile2.html">User Profile Option 2</a>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a href="javascript:void(0)" class="has_children">Error</a>
                    <ul class="dropdown-menu dropdown-menu-left">
                      <li>
                        <a href="page-404.html">Error 404 Full Page</a>
                      </li>
                      <li>
                        <a href="page-404_2.html">Error 404 Integrated</a>
                      </li>
                      <li>
                        <a href="page-500.html">Error 500 Full Page</a>
                      </li>
                      <li>
                        <a href="page-500_2.html">Error 500 Integrated</a>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a href="javascript:void(0)" class="has_children">Bussiness &amp; Products</a>
                    <ul class="dropdown-menu dropdown-menu-left">
                      <li>
                        <a href="page-testimonial.html">Testimonials</a>
                      </li>
                      <li>
                        <a href="page-clients.html">Our Clients</a>
                      </li>
                      <li>
                        <a href="page-product.html">Products</a>
                      </li>
                      <li>
                        <a href="page-services.html">Services</a>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a href="javascript:void(0)" class="has_children">Pricing</a>
                    <ul class="dropdown-menu dropdown-menu-left">
                      <li>
                        <a href="page-pricing.html">Pricing Box</a>
                      </li>
                      <li>
                        <a href="page-pricing2.html">Pricing Box 2</a>
                      </li>
                      <li>
                        <a href="page-princing_table.html">Pricing Mega Table</a>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a href="javascript:void(0)" class="has_children">FAQ &amp; Support</a>
                    <ul class="dropdown-menu dropdown-menu-left">
                      <li>
                        <a href="page-support.html">Support Center</a>
                      </li>
                      <li>
                        <a href="page-faq.html">FAQ Option 1</a>
                      </li>
                      <li>
                        <a href="page-faq2.html">FAQ Option 2</a>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a href="javascript:void(0)" class="has_children">Coming Soon</a>
                    <ul class="dropdown-menu dropdown-menu-left">
                      <li>
                        <a href="page-coming.html">Coming Soon Option 1</a>
                      </li>
                      <li>
                        <a href="page-coming2.html">Coming Soon Option 2</a>
                      </li>
                      <li>
                        <a href="page-coming3.html">Coming Soon Option 3</a>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a href="javascript:void(0)" class="has_children">Timeline</a>
                    <ul class="dropdown-menu dropdown-menu-left">
                      <li>
                        <a href="page-timeline_left.html">Timeline Left</a>
                      </li>
                      <li>
                        <a href="page-timeline_left2.html">Timeline Left 2</a>
                      </li>
                      <li>
                        <a href="page-timeline.html">Timeline Center</a>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a href="javascript:void(0)" class="has_children">Email Templates</a>
                    <ul class="dropdown-menu dropdown-menu-left">
                      <li>
                        <a href="page-email.html" class="with-label">Email Template 1
                          <span class="label label-success text-right">1.2</span>
                        </a>
                        </a>
                      </li>
                      <li>
                        <a href="page-email2.html" class="with-label">Email Template 2
                          <span class="label label-success text-right">1.2</span>
                        </a>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="page-all.html" class="dropdown-link">All Pages</a>
                  </li>
                </ul>
              </li>
              <li class="dropdown yamm-fw">
                <a href="#" class="dropdown-toggle animated fadeIn animation-delay-6" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-name="component">UI Elements
                  <i class="zmdi zmdi-chevron-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-megamenu animated fadeIn animated-2x">
                  <li>
                    <div class="row">
                      <div class="col-sm-3 megamenu-col">
                        <div class="megamenu-block animated fadeInLeft animated-2x">
                          <h3 class="megamenu-block-title">
                            <i class="fa fa-bold"></i> Bootstrap CSS</h3>
                          <ul class="megamenu-block-list">
                            <li>
                              <a class="withripple" href="component-typography.html">
                                <i class="fa fa-font"></i> Typography</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-headers.html">
                                <i class="fa fa-header"></i> Headers</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-dividers.html">
                                <i class="fa fa-arrows-h"></i> Dividers</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-blockquotes.html">
                                <i class="fa fa-quote-right"></i> Blockquotes</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-forms.html">
                                <i class="fa fa-check-square-o"></i> Forms
                                <span class="label label-info pull-right">
                                  <i class="zmdi zmdi-long-arrow-up no-mr"></i> 1.5</span>
                              </a>
                            </li>
                            <li>
                              <a class="withripple" href="component-tables.html">
                                <i class="fa fa-table"></i> Tables</a>
                            </li>
                          </ul>
                        </div>
                        <div class="megamenu-block animated fadeInLeft animated-2x">
                          <h3 class="megamenu-block-title">
                            <i class="fa fa-hand-o-up"></i> Buttons</h3>
                          <ul class="megamenu-block-list">
                            <li>
                              <a class="withripple" href="component-basic-buttons.html">
                                <i class="fa fa-arrow-circle-right"></i> Basic Buttons</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-buttons-components.html">
                                <i class="fa fa-arrow-circle-right"></i> Buttons Components</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-social-buttons.html">
                                <i class="fa fa-arrow-circle-right"></i> Social Buttons
                                <span class="label label-info pull-right">
                                  <i class="zmdi zmdi-long-arrow-up no-mr"></i> 1.3</span>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-sm-3 megamenu-col">
                        <div class="megamenu-block animated fadeInLeft animated-2x">
                          <h3 class="megamenu-block-title">
                            <i class="fa fa-list-alt"></i> Basic Components</h3>
                          <ul class="megamenu-block-list">
                            <li>
                              <a class="withripple" href="component-panels.html">
                                <i class="zmdi zmdi-view-agenda"></i> Panels</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-alerts.html">
                                <i class="zmdi zmdi-info"></i> Alerts &amp; Wells</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-labels.html">
                                <i class="zmdi zmdi-tag"></i> Labels &amp; Badges</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-lists.html">
                                <i class="zmdi zmdi-view-list"></i> Lists</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-thumbnails.html">
                                <i class="zmdi zmdi-image-o"></i> Thumbnails</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-carousels.html">
                                <i class="zmdi zmdi-view-carousel"></i> Carousels</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-modals.html">
                                <i class="zmdi zmdi-window-maximize"></i> Modals</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-tooltip.html">
                                <i class="zmdi zmdi-pin-help"></i> Tooltip &amp; Popover</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-progress-bars.html">
                                <i class="zmdi zmdi-view-headline"></i> Progress Bars</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-pagination.html">
                                <i class="zmdi zmdi-n-2-square"></i> Pagination</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-dropdowns.html">
                                <i class="fa fa-info"></i> Dropdowns</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-sm-3 megamenu-col">
                        <div class="megamenu-block animated fadeInRight animated-2x">
                          <h3 class="megamenu-block-title">
                            <i class="zmdi zmdi-folder-star-alt"></i> Extra Components</h3>
                          <ul class="megamenu-block-list">
                            <li>
                              <a class="withripple" href="component-cards.html">
                                <i class="zmdi zmdi-card-membership"></i> Cards</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-composite-cards.html">
                                <i class="zmdi zmdi-card-giftcard"></i> Composite Cards</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-counters.html">
                                <i class="zmdi zmdi-n-6-square"></i> Counters</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-audio-video.html">
                                <i class="zmdi zmdi-play-circle"></i> Audio &amp; Video</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-masonry.html">
                                <i class="zmdi zmdi-view-dashboard"></i> Masonry Layer</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-snackbar.html">
                                <i class="zmdi zmdi-notifications-active"></i> SnackBar
                                <span class="label label-success pull-right">1.2</span>
                              </a>
                            </li>
                            <li>
                              <a class="withripple" href="component-lightbox.html">
                                <i class="zmdi zmdi-collection-image-o"></i> Lightbox
                                <span class="label label-success pull-right">1.5</span>
                              </a>
                            </li>
                          </ul>
                        </div>
                        <div class="megamenu-block animated fadeInRight animated-2x">
                          <h3 class="megamenu-block-title">
                            <i class="zmdi zmdi-tab"></i> Collapses &amp; Tabs</h3>
                          <ul class="megamenu-block-list">
                            <li>
                              <a class="withripple" href="component-collapses.html">
                                <i class="zmdi zmdi-view-day"></i> Collapses</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-horizontal-tabs.html">
                                <i class="zmdi zmdi-tab"></i> Horitzontal Tabs</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-vertical-tabs.html">
                                <i class="zmdi zmdi-menu"></i> Vertical Tabs</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-sm-3 megamenu-col">
                        <div class="megamenu-block animated fadeInRight animated-2x">
                          <h3 class="megamenu-block-title">
                            <i class="fa fa-briefcase"></i> Icons</h3>
                          <ul class="megamenu-block-list">
                            <li>
                              <a class="withripple" href="component-icons-basic.html">
                                <i class="fa fa-arrow-circle-right"></i> Basic Icons</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-icons-fontawesome.html">
                                <i class="fa fa-arrow-circle-right"></i> Font Awesome</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-icons-iconic.html">
                                <i class="fa fa-arrow-circle-right"></i> Material Design Iconic</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-icons-glyphicons.html">
                                <i class="fa fa-arrow-circle-right"></i> Glyphicons</a>
                            </li>
                          </ul>
                        </div>
                        <div class="megamenu-block animated fadeInRight animated-2x">
                          <h3 class="megamenu-block-title">
                            <i class="fa fa-area-chart"></i> Charts</h3>
                          <ul class="megamenu-block-list">
                            <li>
                              <a class="withripple" href="component-charts-circle.html">
                                <i class="zmdi zmdi-chart-donut"></i> Circle Charts</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-charts-bar.html">
                                <i class="fa fa-bar-chart"></i> Bars Charts</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-charts-line.html">
                                <i class="fa fa-line-chart"></i> Line Charts</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-charts-more.html">
                                <i class="fa fa-pie-chart"></i> More Charts</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle animated fadeIn animation-delay-7" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-name="blog">Blog
                  <i class="zmdi zmdi-chevron-down"></i>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="blog-sidebar.html">
                      <i class="zmdi zmdi-view-compact"></i> Blog Sidebar 1</a>
                  </li>
                  <li>
                    <a href="blog-sidebar2.html">
                      <i class="zmdi zmdi-view-compact"></i> Blog Sidebar 2</a>
                  </li>
                  <li>
                    <a href="blog-masonry.html">
                      <i class="zmdi zmdi-view-dashboard"></i> Blog Masonry 1</a>
                  </li>
                  <li>
                    <a href="blog-masonry2.html">
                      <i class="zmdi zmdi-view-dashboard"></i> Blog Masonry 2</a>
                  </li>
                  <li>
                    <a href="blog-full.html">
                      <i class="zmdi zmdi zmdi-view-stream"></i> Blog Full Page 1</a>
                  </li>
                  <li>
                    <a href="blog-full2.html">
                      <i class="zmdi zmdi zmdi-view-stream"></i> Blog Full Page 2</a>
                  </li>
                  <li class="divider"></li>
                  <li>
                    <a href="blog-post.html">
                      <i class="zmdi zmdi-file-text"></i> Blog Post 1</a>
                  </li>
                  <li>
                    <a href="blog-post2.html">
                      <i class="zmdi zmdi-file-text"></i> Blog Post 2</a>
                  </li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle animated fadeIn animation-delay-8" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-name="portfolio">Portfolio
                  <i class="zmdi zmdi-chevron-down"></i>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="portfolio-filters_sidebar.html">
                      <i class="zmdi zmdi-view-compact"></i> Portfolio Sidebar Filters</a>
                  </li>
                  <li>
                    <a href="portfolio-filters_topbar.html">
                      <i class="zmdi zmdi-view-agenda"></i> Portfolio Topbar Filters</a>
                  </li>
                  <li>
                    <a href="portfolio-filters_sidebar_fluid.html">
                      <i class="zmdi zmdi-view-compact"></i> Portfolio Sidebar Fluid</a>
                  </li>
                  <li>
                    <a href="portfolio-filters_topbar_fluid.html">
                      <i class="zmdi zmdi-view-agenda"></i> Portfolio Topbar Fluid</a>
                  </li>
                  <li>
                    <a href="portfolio-cards.html">
                      <i class="zmdi zmdi-card-membership"></i> Porfolio Cards</a>
                  </li>
                  <li>
                    <a href="portfolio-masonry.html">
                      <i class="zmdi zmdi-view-dashboard"></i> Porfolio Masonry</a>
                  </li>
                  <li>
                    <a href="portfolio-gallery.html" class="with-label">
                      <i class="zmdi zmdi-apps"></i> Picture Gallery
                      <span class="label label-success text-right">1.5</span>
                    </a>
                  </li>
                  <li class="divider"></li>
                  <li>
                    <a href="portfolio-item.html">
                      <i class="zmdi zmdi-collection-item-1"></i> Portfolio Item 1</a>
                  </li>
                  <li>
                    <a href="portfolio-item2.html">
                      <i class="zmdi zmdi-collection-item-2"></i> Portfolio Item 2</a>
                  </li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle animated fadeIn animation-delay-9" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-name="ecommerce">E-Commerce
                  <i class="zmdi zmdi-chevron-down"></i>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="ecommerce-filters.html">E-Commerce Sidebar</a>
                  </li>
                  <li>
                    <a href="ecommerce-filters-full.html">E-Commerce Sidebar Full</a>
                  </li>
                  <li>
                    <a href="ecommerce-filters-full2.html">E-Commerce Topbar Full</a>
                  </li>
                  <li class="divider"></li>
                  <li>
                    <a href="ecommerce-item.html">E-Commerce Item</a>
                  </li>
                  <li>
                    <a href="ecommerce-cart.html">E-Commerce Cart</a>
                  </li>
                </ul>
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
      <div class="ms-hero ms-hero-material">
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
        <!-- container -->
      </div>
      <!-- container -->
      <div class="wrap wrap-mountain mt-6">
        <div class="container">
          <h1 class="text-center text-light mb-6 wow fadeInDown animation-delay-5">Bienvenidos</h1>
          <div class="row">
            <div class="col-md-6 col-md-push-6 mb-4  center-block">
              <img src="images/demo/molecules.png" alt="" class="img-responsive center-block wow zoomIn animation-delay-12 "> </div>
            <div class="col-md-6 col-md-pull-6 pr-6">
              <p class="wow fadeInLeft animation-delay-6">
                Genetic Software Costa Rica, nace como una idea de emprendimiento, de pasión por la tecnología,
                y por deseo infinito de hacer bien las cosas desde la primera vez, con  el objetivo de
                agradar a nuestros clientes actuales y potenciales.
              </p>
              <p class="wow fadeInLeft animation-delay-7">
                Cada proyecto que hemos realizado lleva una gran dosis de  esfuerzo, entusiasmo, creatividad y
                los mejores estándares de calidad e innovación que diferencian nuestros desarrollos.
              </p>
              <p class="wow fadeInLeft animation-delay-8">
                Nuestro equipo de ingenieros comparte con nosotros la ideología de nuestra marca, una molécula
                de ADN que nos caracteriza como individuos, como creación única. Nuestros proyectos y metodologías
                también lo son.
              </p>
              {{-- <div class="text-center">
                <a href="javascript:void(0)" class="btn btn-warning btn-raised mr-1 wow flipInX animation-delay-14">
                  <i class="zmdi zmdi-chart-donut"></i> Action here </a>
                <a href="javascript:void(0)" class="btn btn-info btn-raised wow flipInX animation-delay-16">
                  <i class="zmdi zmdi-case"></i> Button</a>
              </div> --}}
            </div>
          </div>
        </div>
      </div>
      <section id="services" class="mt-6">
        <div class="wrap ms-hero-img-city2 ms-hero-bg-dark-light color-white ms-bg-fixed">
          <div class="container">
            <div class="text-center mb-4">
              <h1 class="color-warning wow zoomInDown">Nuestros Servicios</h1>
              <h3 class="wow zoomInDown">Conoce un poco de lo que hacemos</h3>
            </div>
            <div class="row">
              <div class="col-md-6">
                <h3 class="wow fadeInUp animation-delay-2">Descripción</h3>
                <p class="wow fadeInUp animation-delay-3">

                </p>
                <p class="wow fadeInUp animation-delay-4">
                  Nos dedicamos a ofrecer refactorización de software como servicio principal,
                  sin dejar de lado la creación de software a la medida, aplicaciones móviles, consultoría,
                  y mercadeo digital. STEFA, SEGUI ESTO, VERSATILIDAD
                  {{-- <a href="#" class="color-warning">quibusdam odio eius eligendi</a> tenetur! Ea, repudiandae eveniet ab minima laboriosam minima voluptate quaerat sequi harum.</p> --}}
              </div>
              <div class="col-md-6">
                <div class="panel-group ms-collapse color-dark" id="accordion2" role="tablist" aria-multiselectable="true">
                  <div class="panel panel-info wow fadeInUp animation-delay-2">
                    <div class="panel-heading" role="tab" id="headingOne2">
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
                    <div class="panel-heading" role="tab" id="headingTwo2">
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
                    <div class="panel-heading" role="tab" id="headingThree3">
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
                  <div class="panel panel-info wow fadeInUp animation-delay-5">
                    <div class="panel-heading" role="tab" id="headingTwo4">
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
                  <div class="panel panel-info wow fadeInUp animation-delay-5">
                    <div class="panel-heading" role="tab" id="headingTwo4">
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
            <div class="mt-6 color-dark">
              <h2 class="color-white text-center mb-4 wow fadeInUp animation-delay-2">Some numerical data</h2>
              <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="card card-royal card-block text-center wow zoomInUp animation-delay-2">
                    <h2 class="counter">450</h2>
                    <i class="color-royal fa fa-4x fa-coffee"></i>
                    <p class="mt-2 no-mb lead small-caps">cups of coffee</p>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="card card-success card-block text-center wow zoomInUp animation-delay-5">
                    <h2 class="counter">64</h2>
                    <i class="color-success fa fa-4x fa-briefcase"></i>
                    <p class="mt-2 no-mb lead small-caps">projects done</p>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="card card-danger card-block text-center wow zoomInUp animation-delay-4">
                    <h2 class="counter">600</h2>
                    <i class="color-danger fa fa-4x fa-comments-o"></i>
                    <p class="mt-2 no-mb lead small-caps">comments</p>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="card card-warning card-block text-center wow zoomInUp animation-delay-3">
                    <h2 class="counter">3500</h2>
                    <i class="color-warning fa fa-4x fa-group"></i>
                    <p class="mt-2 no-mb lead small-caps">happy clients</p>
                  </div>
                </div>
              </div>
              <div class="text-center color-white mw-800 center-block mt-4">
                <p class="lead lead-lg wow fadeInUp animation-delay-2">Discover our projects and the rigorous process of creation. Our principles are creativity, design, experience and knowledge. We are backed by 20 years of research.</p>
                <a href="javascript:void(0)" class="btn btn-raised btn-xlg btn-info wow flipInX animation-delay-5">
                  <i class="fa fa-space-shuttle"></i> I have a project</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div class="container mt-6">
        <h1 class="font-light">Tecnologías que te permiten escalar</h1>
        <p class="lead color-primary">— Combinaciones de plataformas ideales para que tu aplicación use lo último, hecho a la medida para tu necesidad </p>
        <div class="panel panel-light panel-flat">
          <!-- Nav tabs -->
          <ul class="nav nav-tabs nav-tabs-transparent indicator-primary nav-tabs-full nav-tabs-5" role="tablist">
            <li class="wow fadeInDown animation-delay-6" role="presentation">
              <a href="#windows" aria-controls="windows" role="tab" data-toggle="tab" class="withoutripple">
                <i class="zmdi zmdi-windows"></i>
                <span class="hidden-xs">Windows</span>
              </a>
            </li>
            <li class="wow fadeInDown animation-delay-4 active" role="presentation">
              <a href="#macos" aria-controls="macos" role="tab" data-toggle="tab" class="withoutripple">
                <i class="zmdi zmdi-apple"></i>
                <span class="hidden-xs">MacOS</span>
              </a>
            </li>
            <li class="wow fadeInDown animation-delay-2" role="presentation">
              <a href="#linux" aria-controls="linux" role="tab" data-toggle="tab" class="withoutripple">
                <i class="fa fa-linux"></i>
                <span class="hidden-xs">Linux</span>
              </a>
            </li>
            <li class="wow fadeInDown animation-delay-4" role="presentation">
              <a href="#android" aria-controls="android" role="tab" data-toggle="tab" class="withoutripple">
                <i class="zmdi zmdi-android"></i>
                <span class="hidden-xs">Android</span>
              </a>
            </li>
            <li class="wow fadeInDown animation-delay-6" role="presentation">
              <a href="#ios" aria-controls="ios" role="tab" data-toggle="tab" class="withoutripple">
                <i class="zmdi zmdi-smartphone-iphone"></i>
                <span class="hidden-xs">IOS</span>
              </a>
            </li>
          </ul>
          <div class="panel-body">
            <!-- Tab panes -->
            <div class="tab-content mt-4">
              <div role="tabpanel" class="tab-pane fade" id="windows">
                <div class="row">
                  <div class="col-md-6 col-md-push-6">
                    <img src="images/demo/mock4.png" alt="" class="img-responsive animated zoomIn animation-delay-8"> </div>
                  <div class="col-md-6 col-md-pull-6">
                    <h3 class="text-normal animated fadeInUp animation-delay-4">Bring ideas together faster</h3>
                    <p class="lead lead-md animated fadeInUp animation-delay-6">Create documents, spreadsheets and presentations from anywhere. Share them with teammates and work together on the same file, at the same time.</p>
                    <p class="lead lead-md animated fadeInUp animation-delay-7">sing your work is easy with one login for everything you do. Administrative controls offer two-step verification to enhance security for the whole company.</p>
                    <div class="">
                      <a href="javascript:void(0)" class="btn btn-info btn-raised animated zoomIn animation-delay-10">
                        <i class="zmdi zmdi-info"></i> More info</a>
                      <a href="javascript:void(0)" class="btn btn-danger btn-raised mr-1 animated zoomIn animation-delay-12">
                        <i class="zmdi zmdi-chart-donut"></i> Action here </a>
                    </div>
                  </div>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane active in fade" id="macos">
                <div class="row">
                  <div class="col-md-6">
                    <img src="images/demo/mock2.png" alt="" class="img-responsive wow animated zoomIn animation-delay-8"> </div>
                  <div class="col-md-6">
                    <h3 class="text-normal wow animated fadeInUp animation-delay-4">Bring ideas together faster</h3>
                    <p class="lead lead-md  wow animated fadeInUp animation-delay-6">Create documents, spreadsheets and presentations from anywhere. Share them with teammates and work together on the same file, at the same time.</p>
                    <p class="lead lead-md wow animated fadeInUp animation-delay-7">sing your work is easy with one login for everything you do. Administrative controls offer two-step verification to enhance security for the whole company.</p>
                    <div class="">
                      <a href="javascript:void(0)" class="btn btn-info btn-raised wow animated zoomIn animation-delay-10">
                        <i class="zmdi zmdi-info"></i> More info</a>
                      <a href="javascript:void(0)" class="btn btn-danger btn-raised mr-1 wow animated zoomIn animation-delay-12">
                        <i class="zmdi zmdi-chart-donut"></i> Action here </a>
                    </div>
                  </div>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="linux">
                <div class="row">
                  <div class="col-md-6 col-md-push-6">
                    <img src="images/demo/mock5.png" alt="" class="img-responsive animated zoomIn animation-delay-8"> </div>
                  <div class="col-md-6 col-md-pull-6">
                    <h3 class="text-normal animated fadeInUp animation-delay-4">Bring ideas together faster</h3>
                    <p class="lead lead-md animated fadeInUp animation-delay-6">Create documents, spreadsheets and presentations from anywhere. Share them with teammates and work together on the same file, at the same time.</p>
                    <p class="lead lead-md animated fadeInUp animation-delay-7">sing your work is easy with one login for everything you do. Administrative controls offer two-step verification to enhance security for the whole company.</p>
                    <div class="">
                      <a href="javascript:void(0)" class="btn btn-info btn-raised animated zoomIn animation-delay-10">
                        <i class="zmdi zmdi-info"></i> More info</a>
                      <a href="javascript:void(0)" class="btn btn-danger btn-raised mr-1 animated zoomIn animation-delay-12">
                        <i class="zmdi zmdi-chart-donut"></i> Action here </a>
                    </div>
                  </div>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="android">
                <div class="row">
                  <div class="col-md-6">
                    <img src="images/demo/mock6.png" alt="" class="img-responsive animated zoomIn animation-delay-8"> </div>
                  <div class="col-md-6">
                    <h3 class="text-normal animated fadeInUp animation-delay-4">Bring ideas together faster</h3>
                    <p class="lead lead-md  animated fadeInUp animation-delay-6">Create documents, spreadsheets and presentations from anywhere. Share them with teammates and work together on the same file, at the same time.</p>
                    <p class="lead lead-md animated fadeInUp animation-delay-7">sing your work is easy with one login for everything you do. Administrative controls offer two-step verification to enhance security for the whole company.</p>
                    <div class="">
                      <a href="javascript:void(0)" class="btn btn-info btn-raised animated zoomIn animation-delay-10">
                        <i class="zmdi zmdi-info"></i> More info</a>
                      <a href="javascript:void(0)" class="btn btn-danger btn-raised mr-1 animated zoomIn animation-delay-12">
                        <i class="zmdi zmdi-chart-donut"></i> Action here </a>
                    </div>
                  </div>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="ios">
                <div class="row">
                  <div class="col-md-6 col-md-push-6">
                    <img src="images/demo/mock3.png" alt="" class="img-responsive animated zoomIn animation-delay-8"> </div>
                  <div class="col-md-6 col-md-pull-6">
                    <h3 class="text-normal animated fadeInUp animation-delay-4">Bring ideas together faster</h3>
                    <p class="lead lead-md animated fadeInUp animation-delay-6">Create documents, spreadsheets and presentations from anywhere. Share them with teammates and work together on the same file, at the same time.</p>
                    <p class="lead lead-md animated fadeInUp animation-delay-7">sing your work is easy with one login for everything you do. Administrative controls offer two-step verification to enhance security for the whole company.</p>
                    <div class="">
                      <a href="javascript:void(0)" class="btn btn-info btn-raised animated zoomIn animation-delay-10">
                        <i class="zmdi zmdi-info"></i> More info</a>
                      <a href="javascript:void(0)" class="btn btn-danger btn-raised mr-1 animated zoomIn animation-delay-12">
                        <i class="zmdi zmdi-chart-donut"></i> Action here </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- panel -->
      </div>
      <!-- ms-hero ms-hero-black -->
      <div class="container mt-4">
        <h2 class="text-center color-primary mb-2 wow fadeInDown animation-delay-4">Bienvenidos</h2>
        <!-- <p class="lead text-center aco wow fadeInDown animation-delay-5 mw-800 center-block mb-4"> Lorem ipsum dolor sit amet,
          <span class="color-primary">consectetur adipisicing</span> elit. Dolor alias provident excepturi eligendi, nam numquam iusto eum illum, ea quisquam.</p> -->
        <p class="lead text-center aco wow fadeInDown animation-delay-5 mw-800 center-block mb-4">
          <span class="color-primary">Genetic Software</span> Costa Rica, nace como una idea de emprendimiento, de pasión por la tecnología,
          y por deseo infinito de hacer bien las cosas desde la primera vez, con  el objetivo de
          agradar a nuestros clientes actuales y potenciales. </p>
        <div class="ms-feature col-lg-3 col-md-6 col-sm-6 card wow flipInX animation-delay-4">
          <div class="text-center card-block">
            <span class="ms-icon ms-icon-circle ms-icon-xxlg color-info">
              <i class="zmdi zmdi-cloud-outline"></i>
            </span>
            <h4 class="color-info">A feature title</h4>
            <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus dicta error.</p>
            <a href="javascript:void(0)" class="btn btn-info btn-raised">Action here</a>
          </div>
        </div>
        <div class="ms-feature col-lg-3 col-md-6 col-sm-6 card wow flipInX animation-delay-8">
          <div class="text-center card-block">
            <span class="ms-icon ms-icon-circle ms-icon-xxlg color-warning">
              <i class="zmdi zmdi-desktop-mac"></i>
            </span>
            <h4 class="color-warning">A feature title</h4>
            <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus dicta error.</p>
            <a href="javascript:void(0)" class="btn btn-warning btn-raised">Action here</a>
          </div>
        </div>
        <div class="ms-feature col-lg-3 col-md-6 col-sm-6 card wow flipInX animation-delay-10">
          <div class="text-center card-block">
            <span class="ms-icon ms-icon-circle ms-icon-xxlg color-success">
              <i class="zmdi zmdi-download"></i>
            </span>
            <h4 class="color-success">A feature title</h4>
            <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus dicta error.</p>
            <a href="javascript:void(0)" class="btn btn-success btn-raised">Action here</a>
          </div>
        </div>
        <div class="ms-feature col-lg-3 col-md-6 col-sm-6 card wow flipInX animation-delay-6">
          <div class="text-center card-block">
            <span class="ms-icon ms-icon-circle ms-icon-xxlg  color-danger">
              <i class="zmdi zmdi-flower-alt"></i>
            </span>
            <h4 class="color-danger">A feature title</h4>
            <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus dicta error.</p>
            <a href="javascript:void(0)" class="btn btn-danger btn-raised">Action here</a>
          </div>
        </div>
      </div>
      <!-- container -->
      <div class="container mt-6">
        <div class="text-center mb-4">
          <h2 class="uppercase color-primary">See our subscription plans</h2>
          <p class="lead uppercase">Surprise with our unique features</p>
        </div>
        <div class="row">
          <div class="col-md-4 price-table price-table-info wow zoomInUp animation-delay-2">
            <header class="price-table-header">
              <span class="price-table-category">Personal</span>
              <h3>
                <sup>$</sup>19.99
                <sub>/mo.</sub>
              </h3>
            </header>
            <div class="price-table-body">
              <ul class="price-table-list">
                <li>
                  <i class="zmdi zmdi-code"></i> Lorem ipsum dolor sit amet.</li>
                <li>
                  <i class="zmdi zmdi-globe"></i> Voluptate ex quam autem. Dolor.</li>
                <li>
                  <i class="zmdi zmdi-settings"></i> Dignissimos velit reiciendis cumque.</li>
                <li>
                  <i class="zmdi zmdi-cloud"></i> Nihil corrupti soluta vitae non.</li>
                <li>
                  <i class="zmdi zmdi-star"></i> Atque molestiae, blanditiis ratione.</li>
              </ul>
              <div class="text-center">
                <a href="javascript:void(0)" class="btn btn-info btn-raised">
                  <i class="zmdi zmdi-cloud-download"></i> Get Now</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 price-table price-table-success prominent wow zoomInDown animation-delay-2">
            <header class="price-table-header">
              <span class="price-table-category">Professional</span>
              <h3>
                <sup>$</sup>49.99
                <sub>/mo.</sub>
              </h3>
            </header>
            <div class="price-table-body">
              <ul class="price-table-list">
                <li>
                  <i class="zmdi zmdi-code"></i> Lorem ipsum dolor sit amet.</li>
                <li>
                  <i class="zmdi zmdi-globe"></i> Voluptate ex quam autem. Dolor.</li>
                <li>
                  <i class="zmdi zmdi-settings"></i> Dignissimos velit reiciendis cumque.</li>
                <li>
                  <i class="zmdi zmdi-cloud"></i> Nihil corrupti soluta vitae non.</li>
                <li>
                  <i class="zmdi zmdi-star"></i> Atque molestiae, blanditiis ratione.</li>
              </ul>
              <div class="text-center">
                <a href="javascript:void(0)" class="btn btn-success btn-raised">
                  <i class="zmdi zmdi-cloud-download"></i> Get Now</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 price-table price-table-warning wow zoomInUp animation-delay-2">
            <header class="price-table-header">
              <span class="price-table-category">Business</span>
              <h3>
                <sup>$</sup>99.99
                <sub>/mo.</sub>
              </h3>
            </header>
            <div class="price-table-body">
              <ul class="price-table-list">
                <li>
                  <i class="zmdi zmdi-code"></i> Lorem ipsum dolor sit amet.</li>
                <li>
                  <i class="zmdi zmdi-globe"></i> Voluptate ex quam autem. Dolor.</li>
                <li>
                  <i class="zmdi zmdi-settings"></i> Dignissimos velit reiciendis cumque.</li>
                <li>
                  <i class="zmdi zmdi-cloud"></i> Nihil corrupti soluta vitae non.</li>
                <li>
                  <i class="zmdi zmdi-star"></i> Atque molestiae, blanditiis ratione.</li>
              </ul>
              <div class="text-center">
                <a href="javascript:void(0)" class="btn btn-warning btn-raised">
                  <i class="zmdi zmdi-cloud-download"></i> Get Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--container -->
      <div class="wrap wrap-danger mt-6">
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
      </div>
      <div class="container mt-6">
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
      </div>
      <aside class="ms-footbar">
        <div class="container">
          <div class="row">
            <div class="col-md-4 ms-footer-col">
              <div class="ms-footbar-block">
                <h3 class="ms-footbar-title">Sitemap</h3>
                <ul class="list-unstyled ms-icon-list three_cols">
                  <li>
                    <a href="index.html">
                      <i class="zmdi zmdi-home"></i> Home</a>
                  </li>
                  <li>
                    <a href="page-blog.html">
                      <i class="zmdi zmdi-edit"></i> Blog</a>
                  </li>
                  <li>
                    <a href="page-blog.html">
                      <i class="zmdi zmdi-image-o"></i> Portafolio</a>
                  </li>
                  <li>
                    <a href="portfolio-filters_sidebar.html">
                      <i class="zmdi zmdi-case"></i> Works</a>
                  </li>
                  <li>
                    <a href="page-timeline_left2.html">
                      <i class="zmdi zmdi-time"></i> Timeline</a>
                  </li>
                  <li>
                    <a href="page-pricing.html">
                      <i class="zmdi zmdi-money"></i> Pricing</a>
                  </li>
                  <li>
                    <a href="page-about.html">
                      <i class="zmdi zmdi-favorite-outline"></i> About Us</a>
                  </li>
                  <li>
                    <a href="page-team2.html">
                      <i class="zmdi zmdi-accounts"></i> Our Team</a>
                  </li>
                  <li>
                    <a href="page-services.html">
                      <i class="zmdi zmdi-face"></i> Services</a>
                  </li>
                  <li>
                    <a href="page-faq2.html">
                      <i class="zmdi zmdi-help"></i> FAQ</a>
                  </li>
                  <li>
                    <a href="page-login2.html">
                      <i class="zmdi zmdi-lock"></i> Login</a>
                  </li>
                  <li>
                    <a href="page-contact.html">
                      <i class="zmdi zmdi-email"></i> Contact</a>
                  </li>
                </ul>
              </div>
              <div class="ms-footbar-block">
                <h3 class="ms-footbar-title">Subscribe</h3>
                <p class="">Lorem ipsum Amet fugiat elit nisi anim mollit minim labore ut esse Duis ullamco ad dolor veniam velit.</p>
                <form>
                  <div class="form-group label-floating mt-2 mb-1">
                    <div class="input-group ms-input-subscribe">
                      <label class="control-label" for="ms-subscribe">
                        <i class="zmdi zmdi-email"></i> Email Adress</label>
                      <input type="email" id="ms-subscribe" class="form-control"> </div>
                  </div>
                  <button class="ms-subscribre-btn" type="button">Subscribe</button>
                </form>
              </div>
            </div>
            <div class="col-md-5 col-sm-7 ms-footer-col ms-footer-alt-color">
              <div class="ms-footbar-block">
                <h3 class="ms-footbar-title text-center mb-2">Last Articles</h3>
                <div class="ms-footer-media">
                  <div class="media">
                    <div class="media-left media-middle">
                      <a href="javascript:void(0)">
                        <img class="media-object media-object-circle" src="images/demo/p75.jpg" alt="..."> </a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">
                        <a href="javascript:void(0)">Lorem ipsum dolor sit expedita cumque amet consectetur adipisicing repellat</a>
                      </h4>
                      <div class="media-footer">
                        <span>
                          <i class="zmdi zmdi-time color-info-light"></i> August 18, 2016</span>
                        <span>
                          <i class="zmdi zmdi-folder-outline color-warning-light"></i>
                          <a href="javascript:void(0)">Design</a>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-left media-middle">
                      <a href="javascript:void(0)">
                        <img class="media-object media-object-circle" src="images/demo/p75.jpg" alt="..."> </a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">
                        <a href="javascript:void(0)">Labore ut esse Duis consectetur expedita cumque ullamco ad dolor veniam velit</a>
                      </h4>
                      <div class="media-footer">
                        <span>
                          <i class="zmdi zmdi-time color-info-light"></i> August 18, 2016</span>
                        <span>
                          <i class="zmdi zmdi-folder-outline color-warning-light"></i>
                          <a href="javascript:void(0)">News</a>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-left media-middle">
                      <a href="javascript:void(0)">
                        <img class="media-object media-object-circle" src="images/demo/p75.jpg" alt="..."> </a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">
                        <a href="javascript:void(0)">voluptates deserunt ducimus expedita cumque quaerat molestiae labore</a>
                      </h4>
                      <div class="media-footer">
                        <span>
                          <i class="zmdi zmdi-time color-info-light"></i> August 18, 2016</span>
                        <span>
                          <i class="zmdi zmdi-folder-outline color-warning-light"></i>
                          <a href="javascript:void(0)">Productivity</a>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-5 ms-footer-col ms-footer-text-right">
              <div class="ms-footbar-block">
                <div class="ms-footbar-title">
                  <span class="ms-logo ms-logo-white ms-logo-sm mr-1">M</span>
                  <h3 class="no-m ms-site-title">Material
                    <span>Style</span>
                  </h3>
                </div>
                <address class="no-mb">
                  <p>
                    <i class="color-danger-light zmdi zmdi-pin mr-1"></i> 795 Folsom Ave, Suite 600</p>
                  <p>
                    <i class="color-warning-light zmdi zmdi-map mr-1"></i> San Francisco, CA 94107</p>
                  <p>
                    <i class="color-info-light zmdi zmdi-email mr-1"></i>
                    <a href="mailto:joe@example.com">example@domain.com</a>
                  </p>
                  <p>
                    <i class="color-royal-light zmdi zmdi-phone mr-1"></i>+34 123 456 7890 </p>
                  <p>
                    <i class="color-success-light fa fa-fax mr-1"></i>+34 123 456 7890 </p>
                </address>
              </div>
              <div class="ms-footbar-block">
                <h3 class="ms-footbar-title">Social Media</h3>
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
                  <br>
                  <a href="javascript:void(0)" class="btn-circle btn-google">
                    <i class="zmdi zmdi-google"></i>
                  </a>
                  <a href="javascript:void(0)" class="btn-circle btn-instagram">
                    <i class="zmdi zmdi-instagram"></i>
                  </a>
                  <a href="javascript:void(0)" class="btn-circle btn-github">
                    <i class="zmdi zmdi-github"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </aside>
      <footer class="ms-footer">
        <div class="container">
          <p>Copyright &copy; Material Style 2017</p>
        </div>
      </footer>
      <div class="btn-back-top">
        <a href="#" data-scroll id="back-top" class="btn-circle btn-circle-primary btn-circle-sm btn-circle-raised ">
          <i class="zmdi zmdi-long-arrow-up"></i>
        </a>
      </div>
    </div>
    <!-- sb-site-container -->
    <div class="ms-slidebar sb-slidebar sb-left sb-style-overlay" id="ms-slidebar">
      <div class="sb-slidebar-container">
        <header class="ms-slidebar-header">
          <div class="ms-slidebar-login">
            <a href="javascript:void(0)" class="withripple">
              <i class="zmdi zmdi-account"></i> Login</a>
            <a href="javascript:void(0)" class="withripple">
              <i class="zmdi zmdi-account-add"></i> Register</a>
          </div>
          <div class="ms-slidebar-title">
            <form class="search-form">
              <input id="search-box-slidebar" type="text" class="search-input" placeholder="Search..." name="q" />
              <label for="search-box-slidebar">
                <i class="zmdi zmdi-search"></i>
              </label>
            </form>
            <div class="ms-slidebar-t">
              <span class="ms-logo ms-logo-sm">M</span>
              <h3>Material
                <span>Style</span>
              </h3>
            </div>
          </div>
        </header>
        <ul class="ms-slidebar-menu" id="slidebar-menu" role="tablist" aria-multiselectable="true">
          <li class="panel" role="tab" id="sch1">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#slidebar-menu" href="#sc1" aria-expanded="false" aria-controls="sc1">
              <i class="zmdi zmdi-home"></i> Home </a>
            <ul id="sc1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="sch1">
              <li>
                <a href="index.html">Default Home</a>
              </li>
              <li>
                <a href="home-generic-2.html">Home Black Slider</a>
              </li>
              <li>
                <a href="home-landing.html">Home Landing Intro</a>
              </li>
              <li>
                <a href="home-landing3.html">Home Landing Video</a>
              </li>
              <li>
                <a href="home-shop.html">Home Shop 1</a>
              </li>
            </ul>
          </li>
          <li class="panel" role="tab" id="sch2">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#slidebar-menu" href="#sc2" aria-expanded="false" aria-controls="sc2">
              <i class="zmdi zmdi-desktop-mac"></i> Pages </a>
            <ul id="sc2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="sch2">
              <li>
                <a href="page-about.html">About US</a>
              </li>
              <li>
                <a href="page-team.html">Our Team</a>
              </li>
              <li>
                <a href="page-product.html">Products</a>
              </li>
              <li>
                <a href="page-services.html">Services</a>
              </li>
              <li>
                <a href="page-faq.html">FAQ</a>
              </li>
              <li>
                <a href="page-timeline_left.html">Timeline</a>
              </li>
              <li>
                <a href="page-contact.html">Contact Option</a>
              </li>
              <li>
                <a href="page-login.html">Login</a>
              </li>
              <li>
                <a href="page-pricing.html">Pricing</a>
              </li>
              <li>
                <a href="page-coming.html">Coming Soon</a>
              </li>
            </ul>
          </li>
          <li class="panel" role="tab" id="sch4">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#slidebar-menu" href="#sc4" aria-expanded="false" aria-controls="sc4">
              <i class="zmdi zmdi-edit"></i> Blog </a>
            <ul id="sc4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="sch4">
              <li>
                <a href="blog-sidebar.html">Blog Sidebar 1</a>
              </li>
              <li>
                <a href="blog-sidebar2.html">Blog Sidebar 2</a>
              </li>
              <li>
                <a href="blog-masonry.html">Blog Masonry 1</a>
              </li>
              <li>
                <a href="blog-masonry2.html">Blog Masonry 2</a>
              </li>
              <li>
                <a href="blog-full.html">Blog Full Page 1</a>
              </li>
              <li>
                <a href="blog-full2.html">Blog Full Page 2</a>
              </li>
              <li>
                <a href="blog-post.html">Blog Post 1</a>
              </li>
              <li>
                <a href="blog-post2.html">Blog Post 2</a>
              </li>
            </ul>
          </li>
          <li class="panel" role="tab" id="sch5">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#slidebar-menu" href="#sc5" aria-expanded="false" aria-controls="sc5">
              <i class="zmdi zmdi-shopping-basket"></i> E-Commerce </a>
            <ul id="sc5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="sch5">
              <li>
                <a href="ecommerce-filters.html">E-Commerce Sidebar</a>
              </li>
              <li>
                <a href="ecommerce-filters-full.html">E-Commerce Sidebar Full</a>
              </li>
              <li>
                <a href="ecommerce-filters-full2.html">E-Commerce Topbar Full</a>
              </li>
              <li>
                <a href="ecommerce-item.html">E-Commerce Item</a>
              </li>
              <li>
                <a href="ecommerce-cart.html">E-Commerce Cart</a>
              </li>
            </ul>
          </li>
          <li class="panel" role="tab" id="sch6">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#slidebar-menu" href="#sc6" aria-expanded="false" aria-controls="sc6">
              <i class="zmdi zmdi-collection-image-o"></i> Portfolio </a>
            <ul id="sc6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="sch6">
              <li>
                <a href="portfolio-filters_sidebar.html">Portfolio Sidebar Filters</a>
              </li>
              <li>
                <a href="portfolio-filters_topbar.html">Portfolio Topbar Filters</a>
              </li>
              <li>
                <a href="portfolio-filters_sidebar_fluid.html">Portfolio Sidebar Fluid</a>
              </li>
              <li>
                <a href="portfolio-filters_topbar_fluid.html">Portfolio Topbar Fluid</a>
              </li>
              <li>
                <a href="portfolio-cards.html">Porfolio Cards</a>
              </li>
              <li>
                <a href="portfolio-masonry.html">Porfolio Masonry</a>
              </li>
              <li>
                <a href="portfolio-item.html">Portfolio Item 1</a>
              </li>
              <li>
                <a href="portfolio-item2.html">Portfolio Item 2</a>
              </li>
            </ul>
          </li>
          <li>
            <a class="link" href="component-typography.html">
              <i class="zmdi zmdi-view-compact"></i> UI Elements</a>
          </li>
          <li>
            <a class="link" href="page-all.html">
              <i class="zmdi zmdi-link"></i> All Pages</a>
          </li>
        </ul>
        <div class="ms-slidebar-social ms-slidebar-block">
          <h4 class="ms-slidebar-block-title">Social Links</h4>
          <div class="ms-slidebar-social">
            <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-facebook">
              <i class="zmdi zmdi-facebook"></i>
              <span class="badge badge-pink">12</span>
              <div class="ripple-container"></div>
            </a>
            <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-twitter">
              <i class="zmdi zmdi-twitter"></i>
              <span class="badge badge-pink">4</span>
              <div class="ripple-container"></div>
            </a>
            <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-google">
              <i class="zmdi zmdi-google"></i>
              <div class="ripple-container"></div>
            </a>
            <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-instagram">
              <i class="zmdi zmdi-instagram"></i>
              <div class="ripple-container"></div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <script src="{{ asset('js/plugins.min.js') }}"></script>
    <script src="{{ asset('js/app.min.js') }}"></script>
    <script src="{{ asset('js/index.js') }}"></script>
  </body>
</html>
