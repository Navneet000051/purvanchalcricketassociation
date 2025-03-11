<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>
    <meta charset="utf-8" />
    {{-- <title>Dashboard</title> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="Purvanchalcricketassociation" name="description" />
    <meta content="Themesbrand" name="author" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{url('frontend/images/logo/favicon.png')}}" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" integrity="sha512-rqQltXRuHxtPWhktpAZxLHUVJ3Eombn3hvk9PHjV/N5DMUYnzKPC1i3ub0mEXgFzsaZNeJcoE0YHq0j/GFsdGg==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Bootstrap Css -->
    <link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />


    <link href="{{ url('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ url('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ url('assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ url('plugins\datatables\dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('plugins\datatables\responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('plugins\datatables\buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
   
    <style>
        .btn-close {
            float: right;
        }
        .table.dataTable {
            border:1px solid #e9ebec !important;
            border-collapse: collapse !important;
        }
    </style>
    @yield('external-css')
</head>

<body>
    <!-- Begin page -->
    <div id="layout-wrapper">
        <header id="page-topbar">
            <div class="layout-width">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box horizontal-logo">
                            <a href="{{ url('/') }}" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{ url('assets/images/logo.jpg') }}" alt="" height="22" />
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ url('assets/images/logo.jpg') }}" alt="" height="27" />
                                </span>
                            </a>

                            <a href="{{ url('/') }}" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{ url('assets/images/logo.jpg') }}" alt="" height="22" />
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ url('assets/images/logo.jpg') }}" alt="" height="17" />
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger" id="topnav-hamburger-icon">
                            <span class="hamburger-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </button>

                        <!-- App Search-->
                        <form class="app-search d-none d-md-block">
                            <!--<div class="position-relative">-->
                            <!--    <input type="text" class="form-control" placeholder="Search..." autocomplete="off" id="search-options" value="" />-->
                            <!--    <span class="mdi mdi-magnify search-widget-icon"></span>-->
                            <!--    <span class="mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none" id="search-close-options"></span>-->
                            <!--</div>-->
                            <div class="dropdown-menu dropdown-menu-lg" id="search-dropdown">
                                <div data-simplebar="" style="max-height: 320px">
                                    <!-- item-->
                                    <div class="dropdown-header">
                                        <h6 class="text-overflow text-muted mb-0 text-uppercase">
                                            Recent Searches
                                        </h6>
                                    </div>

                                    <div class="dropdown-item bg-transparent text-wrap">
                                        <a href="index.html" class="btn btn-soft-secondary btn-sm btn-rounded">how to
                                            setup <i class="mdi mdi-magnify ms-1"></i></a>
                                        <a href="index.html" class="btn btn-soft-secondary btn-sm btn-rounded">buttons
                                            <i class="mdi mdi-magnify ms-1"></i></a>
                                    </div>
                                    <!-- item-->
                                    <div class="dropdown-header mt-2">
                                        <h6 class="text-overflow text-muted mb-1 text-uppercase">
                                            Pages
                                        </h6>
                                    </div>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="ri-bubble-chart-line align-middle fs-18 text-muted me-2"></i>
                                        <span>Analytics Dashboard</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="ri-lifebuoy-line align-middle fs-18 text-muted me-2"></i>
                                        <span>Help Center</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="ri-user-settings-line align-middle fs-18 text-muted me-2"></i>
                                        <span>My account settings</span>
                                    </a>

                                    <!-- item-->
                                    <div class="dropdown-header mt-2">
                                        <h6 class="text-overflow text-muted mb-2 text-uppercase">
                                            Members
                                        </h6>
                                    </div>

                                    <div class="notification-list">
                                        <!-- item -->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                            <div class="d-flex">
                                                <img src="assets/images/users/avatar-2.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic" />
                                                <div class="flex-1">
                                                    <h6 class="m-0">Angela Bernier</h6>
                                                    <span class="fs-11 mb-0 text-muted">Manager</span>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- item -->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                            <div class="d-flex">
                                                <img src="{{ url('assets/images/users/avatar-3.jpg') }}" class="me-3 rounded-circle avatar-xs" alt="user-pic" />
                                                <div class="flex-1">
                                                    <h6 class="m-0">David Grasso</h6>
                                                    <span class="fs-11 mb-0 text-muted">Web Designer</span>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- item -->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                            <div class="d-flex">
                                                <img src="{{ url('assets/images/users/avatar-5.jpg') }}" class="me-3 rounded-circle avatar-xs" alt="user-pic" />
                                                <div class="flex-1">
                                                    <h6 class="m-0">Mike Bunch</h6>
                                                    <span class="fs-11 mb-0 text-muted">React Developer</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="text-center pt-3 pb-1">
                                    <a href="pages-search-results.html" class="btn btn-primary btn-sm">View All
                                        Results <i class="ri-arrow-right-line ms-1"></i></a>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="d-flex align-items-center">


                        <div class="dropdown ms-sm-3 header-item ">
                            <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="d-flex align-items-center">
                                    <img class="rounded-circle header-profile-user" src="{{ url('frontend/images/logo/logo.jpg') }}" alt="Header Avatar" />
                                    <span class="text-start ms-xl-2">
                                        <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">{{ Auth::user()->name }}</span>
                                        <span class="d-none d-xl-block ms-1 fs-12 text-muted user-name-sub-text">
                                        </span>
                                    </span>
                                </span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <h6 class="dropdown-header">Welcome {{ Auth::user()->name }}</h6>
                                <a class="dropdown-item" href="{{ url('/manage_profile/profile') }}"><i class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i>
                                    <span class="align-middle">Profile</span></a>
                                <a class="dropdown-item" id="logoutBtn" href="{{ url('/logout_admin') }}"><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i>
                                    <span class="align-middle" data-key="t-logout">Logout</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- removeNotificationModal -->
        <div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="NotificationModalbtn-close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mt-2 text-center">
                            <lord-icon src="../../../gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width: 100px; height: 100px">
                            </lord-icon>
                            <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                <h4>Are you sure ?</h4>
                                <p class="text-muted mx-4 mb-0">
                                    Are you sure you want to remove this Notification ?
                                </p>
                            </div>
                        </div>
                        <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                            <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">
                                Close
                            </button>
                            <button type="button" class="btn w-sm btn-danger" id="delete-notification">
                                Yes, Delete It!
                            </button>
                        </div>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        <!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu" style="position: fixed;">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Dark Logo-->
                <a href="#" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ url('frontend/images/logo/logo.jpg') }}" alt="" height="22" />
                    </span>
                    <span class="logo-lg">

                        <img src="{{ url('frontend/images/logo/logo-admin.png') }}" alt="" height="17" />
                    </span>
                </a>
                <!-- Light Logo-->
                <a href="{{url('dashboard')}}" class="logo logo-light py-2">
                    <span class="logo-sm">
                        <img src="{{ url('frontend/images/logo/logo.jpg') }}" alt="" height="60" />
                    </span>
                    <span class="logo-lg">
                        <img src="{{url('frontend/images/logo/logo-admin.png')}}" alt="" class="mt-4" height="90" />
                        <h5 class="text-white mt-4">Purvanchal Cricket Association</h5>
                    </span>

                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <div id="scrollbar">
                <div class="container-fluid">
                    <div id="two-column-menu"></div>
                    <ul class="navbar-nav" id="navbar-nav">
                       <li class="nav-item p-0">
                            <a class="nav-link menu-link" href="{{ url('/dashboard') }}" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                                <i class="ri-dashboard-2-line"></i>
                                <span data-key="t-dashboards">Dashboard</span>
                            </a>
                        </li>
                        <!-- end Dashboard Menu -->
                        <li class="nav-item p-0">
                            <a class="nav-link menu-link" href="#sidebarApps" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApps">
                                <i class="ri-apps-2-line"></i>
                                <span data-key="t-apps">Manage Content</span>
                            </a>

                            <div class="collapse menu-dropdown {{Request::is('category') || Request::is('amendment') || Request::is('photo') || Request::is('video') || Request::is('news') || Request::is('email') || Request::is('unit') || Request::is('directors') ? 'show' :''}} " id="sidebarApps">
                                <ul class="nav nav-sm flex-column">


                                    <li class=" nav-item {{Request::is('amendment') ? 'active' : '' }}">
                                        <a href="{{url('amendment')}}" class="nav-link " data-key="t-calendar">
                                            PCA OFFICIALS
                                        </a>

                                    </li>

                                    <li class="nav-item {{Request::is('photo') ? 'active' : '' }} ">
                                        <a href="{{url('photo')}}" class="nav-link " data-key="t-calendar">
                                            Photo
                                        </a>

                                    </li>

                                    <li class="nav-item {{Request::is('video') ? 'active' : '' }}">
                                        <a href="{{url('video')}}" class="nav-link " data-key="t-calendar">
                                            Video
                                        </a>

                                    </li>

                                    <li class="nav-item {{Request::is('news') ? 'active' : '' }}">
                                        <a href="{{url('news')}}" class="nav-link " data-key="t-calendar">
                                            News Cutting
                                        </a>

                                    </li>

                                    <li class="nav-item {{Request::is('email') ? 'active' : '' }}">
                                        <a href="{{url('email')}}" class="nav-link " data-key="t-calendar">
                                            Contact Us
                                        </a>

                                    </li>
                                    <li class="nav-item {{Request::is('unit') ? 'active' : '' }}">
                                        <a href="{{url('unit')}}" class="nav-link " data-key="t-calendar">
                                            Unit
                                        </a>

                                    </li>

                                    <li class="nav-item {{Request::is('directors') ? 'active' : '' }}">
                                        <a href="{{url('directors')}}" class="nav-link " data-key="t-calendar">
                                            Directors
                                        </a>

                                    </li>

                                </ul>
                            </div>
                        </li>


                    </ul>
                </div>
                <!-- Sidebar -->
            </div>

            <div class="sidebar-background"></div>
        </div>
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->

        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    @if(Session::has('success'))
                    <p class="alert alert-info mb-5">{{ Session::get('success') }}
                        <button type="button" class="btn-close " data-bs-dismiss="alert" aria-label="Close"></button>
                    </p>
                    @endif
                    @if(Session::has('error'))
                    <p class="alert alert-danger mb-5">{{ Session::get('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </button>
                    </p>
                    @endif
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0"></h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item">
                                            <a href="javascript: void(0);">Admin</a>
                                        </li>
                                        <li class="breadcrumb-item active"></li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    @yield('content')

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            © Copyright
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            Purvanchalcricketassociation.com, All Rights Reserved.
                        </div>
                        <div class="col-sm-6 text-end">
                            Developed with by <a class="copy ms-0" href="https://bfcsofttech.com/" target="_blank">BFC Softtech</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->

    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!--preloader-->
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>


    <!--J Query-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- selct inputtag -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.0.1/ckeditor.js" integrity="sha512-bInPHQYV0tIhTh8G1j1RrFU1616Hi7b/zG9WHXEzljqKkbKvRvuimXKtNxJ2KxB6CIlTzbM8DCdkXbXQBCYjXQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        var host = "{{ url('') }}";
    </script>
    <!-- Layout config Js -->
    <script src="{{ url('assets/js/layout.js') }}"></script> <!-- Icons Css -->
    <script src="{{ url('custom_js/jquery.validate.min.js') }}"></script>
    
    <!-- JAVASCRIPT -->
      <script src="{{ url('plugins\datatables\jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('plugins\datatables\dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ url('plugins\datatables\dataTables.responsive.min.js') }}"></script> 
    <script src="{{ url('plugins\datatables\responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ url('plugins\datatables\dataTables.hideEmptyColumns.min.js') }}"></script>
    <script src="{{ url('plugins\datatables\buttons.colVis.min.js') }}"></script>
    <script src="{{ url('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ url('assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ url('assets/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ url('assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
    <script src="{{ url('assets/js/plugins.js') }}"></script>
    <script src="{{ url('toastr/toastr.min.js') }}"></script>


    <!-- App js -->
    <script src="{{ url('assets/js/app.js') }}"></script>
    <script src="{{ url('custom_js/login.js') }}"></script>
    <!-- <script src="{{ url('custom_js/profile.js') }}"></script> -->
    <script>
        $('input').keypress(function(e) {
            if (this.value.length === 0 && e.which === 32) e.preventDefault();
        });
    </script>
    @yield('external-js')
</body>

</html>