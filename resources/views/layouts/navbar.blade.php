<body class="theme-cyan font-montserrat">

    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
            <div class="bar4"></div>
            <div class="bar5"></div>
        </div>
    </div>

    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>

    <div id="wrapper">

        <nav class="navbar top-navbar">
            <div class="container-fluid">

                <div class="navbar-left">
                    <div class="navbar-btn">
                        <a href=""><img src="{{ asset('public/assets/images/icon.svg') }}" alt="Inventory"
                                class="img-fluid logo"></a>
                        <button type="button" class="btn-toggle-offcanvas"><i
                                class="lnr lnr-menu fa fa-bars"></i></button>
                    </div>
                </div>

                @if (auth()->check())
                    <div class="navbar-right">
                        <div id="navbar-menu">
                            <ul class="nav navbar-nav">
                                <li><a href="" class="icon-menu">{{auth()->user()->name}}</a></li>
                            </ul>
                        </div>
                        <div id="navbar-menu">
                            <ul class="nav navbar-nav">
                                <li><a href="{{ asset('logout')}}" class="icon-menu"><i class="icon-power"></i></a></li>
                            </ul>
                        </div>
                    </div>
                @else
                    <div class="navbar-right">
                        <div id="navbar-menu">
                            <ul class="nav navbar-nav">
                                <li><a href="{{ asset('login')}}" class="icon-menu">login</a></li>
                            </ul>
                        </div>
                        <div id="navbar-menu">
                            <ul class="nav navbar-nav">
                                <li><a href="{{ asset('regester')}}" class="icon-menu">Regester</a></li>
                            </ul>
                        </div>
                    </div>
                @endif

            </div>
            <div class="progress-container">
                <div class="progress-bar" id="myBar"></div>
            </div>
        </nav>

        <div id="left-sidebar" class="sidebar">
            <div class="navbar-brand">
                <a href=""><img src="{{ asset('public/assets/images/icon.svg') }}" alt="Oculux Logo"
                        class="img-fluid logo"><span>Inventory System</span></a>
                <button type="button" class="btn-toggle-offcanvas btn btn-sm float-right"><i
                        class="lnr lnr-menu icon-close"></i></button>
            </div>
            <div class="sidebar-scroll">
                <div class="user-account">
                    <div class="user_div">
                        <img src="{{ asset('public/assets/images/user.png') }}" class="user-photo"
                            alt="User Profile Picture">
                    </div>
                    <div class="dropdown">
                        <span>Welcome,</span>
                        <a href="javascript:void(0);" class="dropdown-toggle user-name"
                            data-toggle="dropdown"><strong></strong></a>
                        <ul class="dropdown-menu dropdown-menu-right account vivify flipInY">
                            <li><a href="#"><i class="icon-user"></i>My Profile</a></li>
                            <li><a href="#"><i class="icon-envelope-open"></i>Messages</a></li>
                            <li><a href="javascript:void(0);"><i class="icon-settings"></i>Settings</a></li>
                            <li class="divider"></li>
                            <li><a href=""><i class="icon-power"></i>Logout</a></li>
                        </ul>
                    </div>
                </div>
                <nav id="left-sidebar-nav" class="sidebar-nav">
                    <ul id="main-menu" class="metismenu">
                        <li class="header">Main</li>
                        {{-- <li class="">
                            <a href=""><i class="icon-speedometer"></i><span>Dashboard</span></a>
                        </li> --}}
                        <li class="">
                            <a href=""><i class="icon-users"></i><span>Users</span></a>
                        </li>
                        {{-- <li class="">
                            <a href=""><i class="fa fa-th-large"></i><span>Assets Transfer Form</span></a>
                        </li>

                        <li class="">
                            <a href=""><i class="fa fa-th-large"></i><span>Assets Transfer List</span></a>
                        </li>

                        <li class="">
                            <a href=""><i class="fa-history"></i><span>Activity Log</span></a>
                        </li> --}}
                    </ul>
                </nav>
            </div>
        </div>
