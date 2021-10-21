<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Form Component | Creative - Bootstrap 3 Responsive Admin Template</title>

           <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{asset('js/app.js') }}" defer></script>
  <!-- Bootstrap CSS -->
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />
  <!-- bootstrap theme -->
  <link href="{{asset('css/bootstrap-theme.css')}}" rel="stylesheet" />
  <!--external css-->
  <!-- font icon -->
  <link href="{{asset('css/elegant-icons-style.css')}}" rel="stylesheet" />
  <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" />
  <link href="{{asset('css/daterangepicker.css')}}" rel="stylesheet" />
  <link href="{{asset('css/bootstrap-datepicker.css')}}" rel="stylesheet" />
  <link href="{{asset('css/bootstrap-colorpicker.css')}}" rel="stylesheet" />
  <!-- date picker -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- color picker -->

  <!-- Custom styles -->
  <link href="{{asset ('css/style.css')}}" rel="stylesheet">
  <link href="{{asset('css/style-responsive.css')}}" rel="stylesheet" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->

    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body x-data
    x-init="
    @if(\Session::has('meg'))
        Swal.fire(
                'Good job!',
                '{{\Session::get('meg')}}',
                'success'
              )
          "  
    @endif
>

  <!-- container section start -->
  <section id="container" class="">
    <!--header start-->
    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="index.html" class="logo">Nice <span class="lite">Admin</span></a>
      <!--logo end-->

      <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        <ul class="nav top-menu">
          <li>
            
            <form class="navbar-form">
              <input class="form-control" placeholder="Search" type="text">
            </form>
          </li>
        </ul>
        <!--  search form end -->
      </div>
      @auth('staff')
      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

          <!-- task notificatoin start -->
          <li id="task_notificatoin_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-task-l"></i>
                            <span class="badge bg-important">5</span>
                        </a>
            <ul class="dropdown-menu extended tasks-bar">
              <div class="notify-arrow notify-arrow-blue"></div>
              <li>
                <p class="blue">You have 5 pending tasks</p>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Design PSD </div>
                    <div class="percent">90%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                      <span class="sr-only">90% Complete (success)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">
                      Project 1
                    </div>
                    <div class="percent">30%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                      <span class="sr-only">30% Complete (warning)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Digital Marketing</div>
                    <div class="percent">80%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                      <span class="sr-only">80% Complete</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Logo Designing</div>
                    <div class="percent">78%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%">
                      <span class="sr-only">78% Complete (danger)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Mobile App</div>
                    <div class="percent">50%</div>
                  </div>
                  <div class="progress progress-striped active">
                    <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                      <span class="sr-only">50% Complete</span>
                    </div>
                  </div>

                </a>
              </li>
              <li class="external">
                <a href="#">See All Tasks</a>
              </li>
            </ul>
          </li>
          <!-- task notificatoin end -->
          <!-- inbox notificatoin start-->
          <li id="mail_notificatoin_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-envelope-l"></i>
                            <span class="badge bg-important">5</span>
                        </a>
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-blue"></div>
              <li>
                <p class="blue">You have 5 new messages</p>
              </li>
              <li>
                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Greg  Martin</span>
                                    <span class="time">1 min</span>
                                    </span>
                                    <span class="message">
                                        I really like this admin panel.
                                    </span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini2.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Bob   Mckenzie</span>
                                    <span class="time">5 mins</span>
                                    </span>
                                    <span class="message">
                                     Hi, What is next project plan?
                                    </span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini3.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Phillip   Park</span>
                                    <span class="time">2 hrs</span>
                                    </span>
                                    <span class="message">
                                        I am like to buy this Admin Template.
                                    </span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini4.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Ray   Munoz</span>
                                    <span class="time">1 day</span>
                                    </span>
                                    <span class="message">
                                        Icon fonts are great.
                                    </span>
                                </a>
              </li>
              <li>
                <a href="#">See all messages</a>
              </li>
            </ul>
          </li>
          <!-- inbox notificatoin end -->
          <!-- alert notification start-->
          <li id="alert_notificatoin_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <i class="icon-bell-l"></i>
                            <span class="badge bg-important">7</span>
                        </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-blue"></div>
              <li>
                <p class="blue">You have 4 new notifications</p>
              </li>
              <li>
                <a href="#">
                                    <span class="label label-primary"><i class="icon_profile"></i></span>
                                    Friend Request
                                    <span class="small italic pull-right">5 mins</span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="label label-warning"><i class="icon_pin"></i></span>
                                    John location.
                                    <span class="small italic pull-right">50 mins</span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="label label-danger"><i class="icon_book_alt"></i></span>
                                    Project 3 Completed.
                                    <span class="small italic pull-right">1 hr</span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="label label-success"><i class="icon_like"></i></span>
                                    Mick appreciated your work.
                                    <span class="small italic pull-right"> Today</span>
                                </a>
              </li>
              <li>
                <a href="#">See all notifications</a>
              </li>
            </ul>
          </li>
          <!-- alert notification end-->
          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="img/avatar1_small.jpg">
                            </span>
                            <span class="username">Jenifer Smith</span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="#"><i class="icon_profile"></i> My Profile</a>
              </li>
              <li>
                <a href="#"><i class="icon_mail_alt"></i> My Inbox</a>
              </li>
              <li>
                <a href="#"><i class="icon_clock_alt"></i> Timeline</a>
              </li>
              <li>
                <a href="#"><i class="icon_chat_alt"></i> Chats</a>
              </li>
              <li>
                <form action="{{route('staff.logout')}}" method="POST">
                  @csrf
                  <button class="btn p-2 text-danger"><i class="icon_key_alt"></i> Log Out</button>
                </form>
              </li>
              <li>
                <a href="documentation.html"><i class="icon_key_alt"></i> Documentation</a>
              </li>
              <li>
                <a href="documentation.html"><i class="icon_key_alt"></i> Documentation</a>
              </li>
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
      @endauth
    </header>
    <!--header end-->
    @auth('staff')
        @include('admin.layouts.navbar')
    @endauth
      </div>
    </aside>
    <!--sidebar end-->


    @yield('content')
       {{-- <section class="panel">
              <div class="panel-body">
                <form class="form-horizontal " method="get">
                  <div class="form-group has-success">
                    <label class="control-label col-lg-2" for="inputSuccess">Input with success</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="inputSuccess">
                    </div>
                  </div>
                  <div class="form-group has-warning">
                    <label class="control-label col-lg-2" for="inputWarning">Input with warning</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="inputWarning">
                    </div>
                  </div>
                  <div class="form-group has-error">
                    <label class="control-label col-lg-2" for="inputError">Input with error</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="inputError">
                    </div>
                  </div>
                </form>
              </div>
            </section> --}}
            {{-- <section class="panel">
              <div class="panel-body">
                <form class="form-horizontal " method="get">
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Control sizing</label>
                    <div class="col-lg-10">
                      <input class="form-control input-lg m-bot15" type="text" placeholder=".input-lg">
                      <input class="form-control m-bot15" type="text" placeholder="Default input">
                      <input class="form-control input-sm m-bot15" type="text" placeholder=".input-sm">

                      <select class="form-control input-lg m-bot15">
                                              <option>Option 1</option>
                                              <option>Option 2</option>
                                              <option>Option 3</option>
                                          </select>
                      <select class="form-control m-bot15">
                                              <option>Option 1</option>
                                              <option>Option 2</option>
                                              <option>Option 3</option>
                                          </select>
                      <select class="form-control input-sm m-bot15">
                                              <option>Option 1</option>
                                              <option>Option 2</option>
                                              <option>Option 3</option>
                                          </select>
                    </div>
                  </div>
                </form>
              </div>
            </section> --}}
            {{-- <section class="panel">
              <div class="panel-body">
                <form class="form-horizontal " method="get">
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Checkboxes and radios</label>
                    <div class="col-lg-10">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Option one is this and that&mdash;be sure to include why it's great
                                              </label>
                      </div>

                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox" value="">
                                                  Option one is this and that&mdash;be sure to include why it's great option one
                                              </label>
                      </div>

                      <div class="radio">
                        <label>
                                                  <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                                  Option one is this and that&mdash;be sure to include why it's great
                                              </label>
                      </div>
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                                  Option two can be something else and selecting it will deselect option one
                                              </label>
                      </div>

                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Inline checkboxes</label>
                    <div class="col-lg-10">
                      <label class="checkbox-inline">
                                              <input type="checkbox" id="inlineCheckbox1" value="option1"> 1
                                          </label>
                      <label class="checkbox-inline">
                                              <input type="checkbox" id="inlineCheckbox2" value="option2"> 2
                                          </label>
                      <label class="checkbox-inline">
                                              <input type="checkbox" id="inlineCheckbox3" value="option3"> 3
                                          </label>

                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Selects</label>
                    <div class="col-lg-10">
                      <select class="form-control m-bot15">
                                              <option>1</option>
                                              <option>2</option>
                                              <option>3</option>
                                              <option>4</option>
                                              <option>5</option>
                                          </select>

                      <select multiple class="form-control">
                                              <option>1</option>
                                              <option>2</option>
                                              <option>3</option>
                                              <option>4</option>
                                              <option>5</option>
                                          </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Column sizing</label>
                    <div class="col-lg-10">
                      <div class="row">
                        <div class="col-lg-2">
                          <input type="text" class="form-control" placeholder=".col-lg-2">
                        </div>
                        <div class="col-lg-3">
                          <input type="text" class="form-control" placeholder=".col-lg-3">
                        </div>
                        <div class="col-lg-4">
                          <input type="text" class="form-control" placeholder=".col-lg-4">
                        </div>
                      </div>

                    </div>
                  </div>

                </form>
              </div>
            </section> --}}
          </div>
        </div>
        <!-- Basic Forms & Horizontal Forms--> 

        {{-- <div class="row">
          <div class="col-lg-6">
            <section class="panel">
              <header class="panel-heading">
                Basic Forms
              </header>
              <div class="panel-body">
                <form role="form">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <input type="file" id="exampleInputFile">
                    <p class="help-block">Example block-level help text here.</p>
                  </div>
                  <div class="checkbox">
                    <label>
                                          <input type="checkbox"> Check me out
                                      </label>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>

              </div>
            </section>
          </div>
          <div class="col-lg-6">
            <section class="panel">
              <header class="panel-heading">
                Horizontal Forms
              </header>
              <div class="panel-body">
                <form class="form-horizontal" role="form">
                  <div class="form-group">
                    <label for="inputEmail1" class="col-lg-2 control-label">Email</label>
                    <div class="col-lg-10">
                      <input type="email" class="form-control" id="inputEmail1" placeholder="Email">
                      <p class="help-block">Example block-level help text here.</p>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword1" class="col-lg-2 control-label">Password</label>
                    <div class="col-lg-10">
                      <input type="password" class="form-control" id="inputPassword1" placeholder="Password">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <div class="checkbox">
                        <label>
                                                  <input type="checkbox"> Remember me
                                              </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button type="submit" class="btn btn-danger">Sign in</button>
                    </div>
                  </div>
                </form>
              </div>
            </section>
            <section class="panel">

              <div class="panel-body">
                <a href="#myModal" data-toggle="modal" class="btn btn-primary">
                                  Form in Modal
                              </a>
                <a href="#myModal-1" data-toggle="modal" class="btn  btn-warning">
                                  Form in Modal 2
                              </a>
                <a href="#myModal-2" data-toggle="modal" class="btn  btn-danger">
                                  Form in Modal 3
                              </a>

                <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                        <h4 class="modal-title">Form Tittle</h4>
                      </div>
                      <div class="modal-body">

                        <form role="form">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Enter email">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <input type="file" id="exampleInputFile3">
                            <p class="help-block">Example block-level help text here.</p>
                          </div>
                          <div class="checkbox">
                            <label>
                                                          <input type="checkbox"> Check me out
                                                      </label>
                          </div>
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal-1" class="modal fade">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                        <h4 class="modal-title">Form Tittle</h4>
                      </div>
                      <div class="modal-body">

                        <form class="form-horizontal" role="form">
                          <div class="form-group">
                            <label for="inputEmail1" class="col-lg-2 control-label">Email</label>
                            <div class="col-lg-10">
                              <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputPassword1" class="col-lg-2 control-label">Password</label>
                            <div class="col-lg-10">
                              <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                              <div class="checkbox">
                                <label>
                                                                  <input type="checkbox"> Remember me
                                                              </label>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                              <button type="submit" class="btn btn-info">Sign in</button>
                            </div>
                          </div>
                        </form>

                      </div>

                    </div>
                  </div>
                </div>
                <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal-2" class="modal fade">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                        <h4 class="modal-title">Form Tittle</h4>
                      </div>
                      <div class="modal-body">
                        <form class="form-inline" role="form">
                          <div class="form-group">
                            <label class="sr-only" for="exampleInputEmail2">Email address</label>
                            <input type="email" class="form-control sm-input" id="exampleInputEmail5" placeholder="Enter email">
                          </div>
                          <div class="form-group">
                            <label class="sr-only" for="exampleInputPassword2">Password</label>
                            <input type="password" class="form-control sm-input" id="exampleInputPassword5" placeholder="Password">
                          </div>
                          <div class="checkbox">
                            <label>
                                                          <input type="checkbox"> Remember me
                                                      </label>
                          </div>
                          <button type="submit" class="btn btn-success">Sign in</button>
                        </form>

                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div> --}}
        <!-- Inline form-->
        {{-- <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Inline form
              </header>
              <div class="panel-body">
                <form class="form-inline" role="form">
                  <div class="form-group">
                    <label class="sr-only" for="exampleInputEmail2">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label class="sr-only" for="exampleInputPassword2">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                  </div>
                  <div class="checkbox">
                    <label>
                                          <input type="checkbox"> Remember me
                                      </label>
                  </div>
                  <button type="submit" class="btn btn-primary">Sign in</button>
                </form>

              </div>
            </section>

          </div>
        </div> --}}

        {{-- <div class="row">
          <div class="col-lg-12">

            <div class="row">
              <div class="col-lg-6">
                <section class="panel">
                  <header class="panel-heading">
                    Color Pickers & Date Pickers
                  </header>
                  <div class="panel-body">
                    <form class="form-horizontal " action="#">
                      <!--date picker start-->

                      <div class="form-group">
                        <label class="control-label col-sm-4">Default Datepicker</label>
                        <div class="col-sm-6">
                          <input id="dp1" type="text" value="28-10-2013" size="16" class="form-control">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-4">Starts with years view</label>
                        <div class="col-sm-6">


                          <div class="input-append date" id="dpYears" data-date="18-06-2013" data-date-format="dd-mm-yyyy" data-date-viewmode="years">
                            <input class="form-control" size="16" type="text" value="28-06-2013" readonly>
                            <span class="add-on"><i class="icon-calendar"></i></span>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-sm-4"> Date Ranges</label>
                        <div class="col-sm-6">
                          <div class="input-prepend">
                            <input id="reservation" type="text" class=" form-control" />
                          </div>
                        </div>
                      </div>
                      <!--date picker end-->

                      <!--color picker start-->
                      <div class="form-group">
                        <label class="control-label col-sm-4">Default</label>

                        <div class="col-sm-5">
                          <input type="text" value="#CCCCCC" class="cp1 form-control">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-4">RGBA</label>

                        <div class="col-sm-5">
                          <input type="text" data-color-format="rgba" value="rgb(255,255,255,1)" class="cp2 form-control">
                        </div>
                      </div>

                      <!--color picker end-->

                    </form>


                  </div>
                </section>
                <section class="panel">
                  <header class="panel-heading">
                    Tags Input
                  </header>
                  <div class="panel-body">
                    <input name="tagsinput" id="tagsinput" class="tagsinput" value="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal" />
                  </div>
                </section>
              </div>
              <div class="col-lg-6">
                <section class="panel">
                  <header class="panel-heading">
                    Custom Checkbox & Radio
                  </header>
                  <div class="panel-body">
                    <form action="#" method="get" accept-charset="utf-8">
                      <div class="checkboxes">
                        <label class="label_check" for="checkbox-01">
                                                  <input name="sample-checkbox-01" id="checkbox-01" value="1" type="checkbox" checked /> I agree to the terms &#38; conditions.
                                              </label>
                        <label class="label_check" for="checkbox-02">
                                              <input name="sample-checkbox-02" id="checkbox-02" value="1" type="checkbox" /> Please send me regular updates. </label>
                        <label class="label_check" for="checkbox-03">
                                              <input name="sample-checkbox-02" id="checkbox-03" value="1" type="checkbox" /> This is nice checkbox.</label>

                      </div>
                      <div class="radios">
                        <label class="label_radio" for="radio-01">
                                                  <input name="sample-radio" id="radio-01" value="1" type="radio" checked /> This is option A...
                                              </label>
                        <label class="label_radio" for="radio-02">
                                                  <input name="sample-radio" id="radio-02" value="1" type="radio" /> and this is option B...
                                              </label>
                        <label class="label_radio" for="radio-03">
                                                  <input name="sample-radio" id="radio-03" value="1" type="radio" /> or simply choose option C
                                              </label>
                      </div>
                    </form>
                  </div>

                </section>

                <section class="panel">
                  <header class="panel-heading">
                    Switch
                  </header>
                  <div class="panel-body">
                    <div class="row m-bot15">
                      <div class="col-sm-6 text-center">
                        <input type="checkbox" checked="" data-toggle="switch" />
                      </div>
                      <div class="col-sm-6 text-center">
                        <input type="checkbox" data-toggle="switch" />
                      </div>
                    </div>
                    <div class="row m-bot15">
                      <div class="col-sm-6 text-center">
                        <div class="switch switch-square" data-on-label="<i class=' icon-ok'></i>" data-off-label="<i class='icon-remove'></i>">
                          <input type="checkbox" />
                        </div>
                      </div>
                      <div class="col-sm-6 text-center">
                        <div class="switch switch-square" data-on-label="<i class=' icon-ok'></i>" data-off-label="<i class='icon-remove'></i>">
                          <input type="checkbox" checked="" />
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6 text-center">
                        <input type="checkbox" disabled data-toggle="switch" />
                      </div>
                      <div class="col-sm-6 text-center">
                        <input type="checkbox" checked disabled data-toggle="switch" />
                      </div>
                    </div>
                  </div>
                </section>


              </div>
            </div>

            <div class="row">
              <!-- Bootsrep Editor -->
              <div class="col-lg-12">
                <section class="panel">
                  <header class="panel-heading">
                    Bootsrep Editor
                  </header>
                  <div class="panel-body">
                    <div id="editor" class="btn-toolbar" data-role="editor-toolbar" data-target="#editor"></div>
                  </div>
                </section>
              </div>
              <!-- CKEditor -->
              <div class="col-lg-12">
                <section class="panel">
                  <header class="panel-heading">
                    CKEditor
                  </header>
                  <div class="panel-body">
                    <div class="form">
                      <form action="#" class="form-horizontal">
                        <div class="form-group">
                          <label class="control-label col-sm-2">CKEditor</label>
                          <div class="col-sm-10">
                            <textarea class="form-control ckeditor" name="editor1" rows="6"></textarea>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div> --}}
        <!-- page end-->
      </section>
    </section>
    <!--main content end-->
    <div class="text-center">
      <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
  </section>
  <!-- container section end -->
  <!-- javascripts -->
  <script src="{{asset('js/jquery.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <!-- nice scroll -->
  <script src="{{asset('js/jquery.scrollTo.min.js')}}"></script>
  <script src="{{asset('js/jquery.nicescroll.js')}}" type="text/javascript"></script>

  <!-- jquery ui -->
  <script src="js/jquery-ui-1.9.2.custom.min.js"></script>

  <!--custom checkbox & radio-->
  <script type="text/javascript" src="js/ga.js"></script>
  <!--custom switch-->
  <script src="js/bootstrap-switch.js"></script>
  <!--custom tagsinput-->
  <script src="js/jquery.tagsinput.js"></script>

  <!-- colorpicker -->

  <!-- bootstrap-wysiwyg -->
  <script src="{{asset('js/jquery.hotkeys.js')}}"></script>
  <script src="{{asset('js/bootstrap-wysiwyg.js')}}"></script>
  <script src="{{asset('js/bootstrap-wysiwyg-custom.js')}}"></script>
  <scri(pt src="{{asset('js/moment.js')}}"></scri>
  <script src="{{asset('js/boot(strap-colorpicker.js')}}"></script>
  <script src="{{asset('js/daterangepicker.js')}}"></script>
  <script src="{{asset('js/bootstrap-datepicker.js')}}"></script>


  <!-- ck editor -->
  <script type="text/javascript" src="{{asset('assets/ckeditor/ckeditor.js')}}"></script>
  <!-- custom form component script for this page-->
  <script src="(js/form-component.js)"></script>
  <!-- custome script for all page -->
  <scrip(t src="js/scripts.js"></scrip>


</body>

</html>
