<!DOCTYPE html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Suryodaya - Admin Dashboard</title>

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500"
        rel="stylesheet" />
    <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />
    <!-- PLUGINS CSS STYLE -->
    <link href="{{ asset('./admin_asset/plugins/toaster/toastr.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('./admin_asset/plugins/nprogress/nprogress.css') }}" rel="stylesheet" />
    <link href="{{ asset('./admin_asset/plugins/flag-icons/css/flag-icon.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('./admin_asset/plugins/jvectormap/jquery-jvectormap-2.0.3.css') }}" rel="stylesheet" />
    <link href="{{ asset('./admin_asset/plugins/ladda/ladda.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('./admin_asset/plugins/select2/css/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('./admin_asset/plugins/daterangepicker/daterangepicker.css') }}" rel="stylesheet" />

    <style>
        /*--------------------------------------------------------------
# About
--------------------------------------------------------------*/
        .about-me .content h3 {
            font-weight: 700;
            font-size: 26px;
            color: #18d26e;
        }

        .about-me .content ul {
            list-style: none;
            padding: 0;
        }

        .about-me .content ul li {
            padding-bottom: 10px;
        }

        .about-me .content ul i {
            font-size: 20px;
            padding-right: 2px;
            color: #18d26e;
        }

        .about-me .content p:last-child {
            margin-bottom: 0;
        }

    </style>

    <!-- SLEEK CSS -->
    <link id="sleek-css" rel="stylesheet" href="{{ asset('./admin_asset/css/sleek.css') }}" />
    <link id="sleek-css" rel="stylesheet" href="{{ asset('./admin_asset/css/table.css') }}" />
    <script src="{{ asset('./admin_asset/plugins/nprogress/nprogress.js') }}"></script>
</head>


<body class="sidebar-fixed sidebar-dark header-light header-fixed" id="body">
    <script>
        NProgress.configure({
            showSpinner: false
        });
        NProgress.start();
    </script>

    <div class="mobile-sticky-body-overlay"></div>

    <div class="wrapper">

        <!--
          ====================================
          ——— LEFT SIDEBAR WITH FOOTER
          =====================================
        -->
        <aside class="left-sidebar bg-sidebar">
            <div id="sidebar" class="sidebar sidebar-with-footer">
                <!-- Aplication Brand -->
                <div class="app-brand">
                    <a href="{{ route('admin.dashboard') }}" class="mdi mdi-view-dashboard"
                        style="font-size: 24px; color: #fff; text-decoration: none;">

                        <span class="brand-name">Suryodaya Admin</span>
                    </a>
                </div>
                <!-- begin sidebar scrollbar -->
                <div class="sidebar-scrollbar">

                    <!-- sidebar menu -->
                    <ul class="nav sidebar-inner" id="sidebar-menu">
                        <li class="has-sub active expand">
                            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                data-target="#dashboard" aria-expanded="false" aria-controls="dashboard">
                                <i class="mdi mdi-home"></i>
                                <span class="nav-text">Home</span> <b class="caret"></b>
                            </a>
                            <ul class="collapse show" id="dashboard" data-parent="#sidebar-menu">
                                <div class="sub-menu">
                                    <li class="active">
                                        <a class="sidenav-item-link" href="{{ route('admin.slidershow') }}">
                                            <span class="nav-text">Slider Manage</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="sidenav-item-link" href="{{ Route('admin.addnotice') }}">
                                            <span class="nav-text">Manage Notice</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="sidenav-item-link" href="{{ route('admin.showhomeabout') }}">
                                            <span class="nav-text">About Manage</span>
                                        </a>
                                    </li>
                                </div>
                            </ul>
                        </li>

                        <li class="has-sub">
                            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                data-target="#ui-elements" aria-expanded="false" aria-controls="ui-elements">
                                <i class="mdi mdi-account-multiple"></i>
                                <span class="nav-text">Teams</span> <b class="caret"></b>
                            </a>
                            <ul class="collapse" id="ui-elements" data-parent="#sidebar-menu">
                                <div class="sub-menu">
                                    <li class="active">
                                        <a class="sidenav-item-link" href="{{ route('admin.teamshow') }}">
                                            <span class="nav-text">Management Team</span>
                                        </a>
                                    </li>
                                </div>
                            </ul>
                        </li>

                                      <li class="has-sub">
                            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                data-target="#documentation" aria-expanded="false" aria-controls="documentation">
                                <i class="mdi mdi-finance"></i>
                                <span class="nav-text">Loans</span> <b class="caret"></b>
                            </a>
                            <ul class="collapse" id="documentation" data-parent="#sidebar-menu">
                                <div class="sub-menu">
                                    <li>
                                        <a class="sidenav-item-link" href="{{ route('admin.loanapplyform') }}">
                                            <span class="nav-text">Customer Details</span>

                                        </a>
                                    </li>


                                </div>
                            </ul>
                        </li>

                        <li class="has-sub">
                            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                data-target="#news" aria-expanded="false" aria-controls="news">
                                <i class="mdi mdi-newspaper"></i>
                                <span class="nav-text">News</span> <b class="caret"></b>
                            </a>
                            <ul class="collapse" id="news" data-parent="#sidebar-menu">
                                <div class="sub-menu">

                                    <li>
                                        <a class="sidenav-item-link" href="{{ route('admin.shownews') }}">
                                            <span class="nav-text">News Manage </span>

                                        </a>
                                    </li>
                                </div>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                data-target="#gallery" aria-expanded="false" aria-controls="gallery">
                                <i class="mdi mdi-image-multiple"></i>
                                <span class="nav-text">Gallery</span> <b class="caret"></b>
                            </a>
                            <ul class="collapse" id="gallery" data-parent="#sidebar-menu">
                                <div class="sub-menu">

                                    <li>
                                        <a class="sidenav-item-link" href="{{ route('admin.galleryshow') }}">
                                            <span class="nav-text">Gallery Manage</span>

                                        </a>
                                    </li>

                                    <li>
                                        <a class="sidenav-item-link" href="{{ route('admin.galleryadd') }}">
                                            <span class="nav-text">Add Gallery </span>
                                        </a>
                                    </li>
                                </div>
                            </ul>
                        </li>

                        <li class="has-sub">
                            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                data-target="#download" aria-expanded="false" aria-controls="download">
                                <i class="mdi mdi-folder-download"></i>
                                <span class="nav-text">Download</span> <b class="caret"></b>
                            </a>
                            <ul class="collapse" id="download" data-parent="#sidebar-menu">
                                <div class="sub-menu">

                                    <li>
                                        <a class="sidenav-item-link" href="{{ route('admin.showdownload') }}">
                                            <span class="nav-text">Show Files</span>

                                        </a>
                                    </li>
                                    <li>
                                        <a class="sidenav-item-link" href="{{ route('admin.adddownload') }}">
                                            <span class="nav-text">Add Files</span>

                                        </a>
                                    </li>
                                </div>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                data-target="#contact" aria-expanded="false" aria-controls="contact">
                                <i class=" mdi mdi-contacts"></i>
                                <span class="nav-text">Contact</span> <b class="caret"></b>
                            </a>
                            <ul class="collapse" id="contact" data-parent="#sidebar-menu">
                                <div class="sub-menu">

                                    <li>
                                        <a class="sidenav-item-link" href="{{route("admin.contact")}}">
                                            <span class="nav-text">Manage Contact</span>

                                        </a>
                                    </li>

                                </div>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </aside>



        <div class="page-wrapper">
            <!-- Header -->
            <header class="main-header " id="header">
                <nav class="navbar navbar-static-top navbar-expand-lg">
                    <!-- Sidebar toggle button -->
                    <button id="sidebar-toggler" class="sidebar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                    </button>
                    <!-- search form -->
                    <div class="search-form d-none d-lg-inline-block" style="visibility:hidden">
                        <div class="input-group">
                            <button type="button" name="search" id="search-btn" class="btn btn-flat">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                            <input type="text" name="query" id="search-input" class="form-control"
                                placeholder="Search" autofocus autocomplete="off" />
                        </div>
                        <div id="search-results-container">
                            <ul id="search-results"></ul>
                        </div>
                    </div>

                    <div class="navbar-right ">
                        <ul class="nav navbar-nav">
                            <li class="dropdown notifications-menu">

                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li class="dropdown-header">You have notifications</li>
                                    <li style="margin-top: -18px; margin-bottom: 10px">

                                    </li>



                                </ul>
                            </li>
                            <!-- User Account -->
                            <li class="dropdown user-menu">
                                <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <img src="{{ asset('admin_asset/img/user/user.png') }}" class="user-image"
                                        alt="User Image" />
                                    <span class="d-none d-lg-inline-block">Sushil KC</span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">


                                    <li>
                                        <a href="{{ route('admin.profile') }}">
                                            <i class="mdi mdi-account"></i> My Profile
                                        </a>
                                    </li>


                                    <li class="dropdown-footer">
                                        <a class="mdi mdi-logout" href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>


            </header>
            <div class="content-wrapper">
                <div class="content">
