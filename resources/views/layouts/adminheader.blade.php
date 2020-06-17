<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts --> 
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
</head>
<body>
    <div id="app">
        <aside>
            <div class="side-menu">
    
                <nav class="navbar navbar-default" role="navigation">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <div class="brand-wrapper">    
                            <button type="button" class="navbar-toggle menu-btn">
                                <span class="navbar-toggler-icon"></span>
                            </button>    
                            <!-- Brand -->
                            <div class="brand-name-wrapper">
                                <a class="navbar-brand" href="{{ url('/admin/dashboard') }}">
                                  BRAND NAME
                                </a>
                            </div>    
                        </div>    
                    </div>    
                    <!-- Main Menu -->
                    <div class="side-menu-container">
                        <ul class="nav navbar-nav">    
                            <li class="active"><a href="{{ url('admin/dashboard') }}"><i class="material-icons">home</i> Dashboard</a></li>
                            <li><a href="table.html"><i class="material-icons">table_chart</i> Table</a></li>
                            <li><a href="form.html"><i class="material-icons">dynamic_form</i> Form</a></li>    
                            <!-- Dropdown-->
                            <li class="panel panel-default" id="dropdown">
                                <a data-toggle="collapse" href="#dropdown-lvl1">
                                    <i class="material-icons">settings_input_svideo</i> Sub Menu <span
                                        class="material-icons caret">
                                        keyboard_arrow_down
                                    </span>
                                </a>    
                                <!-- Dropdown level 1 -->
                                <div id="dropdown-lvl1" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul class="nav navbar-nav submenu">
                                            <li><a href="#">item 1.1</a></li>
                                            <li><a href="#">Link 1.2 </a></li>
                                            <li><a href="#">Link 1.3 </a></li>    
                                            <!-- Dropdown level 2 -->
                                            <li class="panel panel-default" id="dropdown">
                                                <a data-toggle="collapse" href="#dropdown-lvl2">
                                                    <span class="glyphicon glyphicon-off"></span> Sub to sub <span
                                                        class="material-icons caret">
                                                        keyboard_arrow_down
                                                    </span>
                                                </a>
                                                <div id="dropdown-lvl2" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <ul class="nav navbar-nav submenutosub">
                                                            <li><a href="#">Link 2.1</a></li>
                                                            <li><a href="#">Link 2.2</a></li>
                                                            <li><a href="#">Link 2.3</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>    
                            <li><a href="#"><i class="material-icons">settings_input_svideo</i> Link</a></li>    
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </nav>    
            </div>
        </aside>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark nabvar-bg bg-gradiand">    
            <!-- Links -->
            <ul class="navbar-nav ml-auto top-menu">    
                <!-- Dropdown -->
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle c-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        <span class="material-icons">
                            notifications_none
                            </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right notifi-box">
                        <div class="noti-header">Notification</div>
                        <div class="dropdown-divider"></div>
                        <ul class="list-unstyled noti-list">
                            <li><a href="">
                                <span class="icon"> B</span>
                                A new order has been placed!
                            </a></li>
                            <li>
                                <a href="">
                                    <span class="icon"> A</span>
                                    A new order has been placed!
                                </a>
                            </li>
                            <li><a href="">
                                <span class="icon"> B</span>
                                A new order has been placed!
                            </a></li>
                            <li>
                                <a href="">
                                    <span class="icon"> A</span>
                                    A new order has been placed!
                                </a>
                            </li>
                            <li><a href="">
                                <span class="icon"> B</span>
                                A new order has been placed!
                            </a></li>
                            <li>
                                <a href="">
                                    <span class="icon"> A</span>
                                    A new order has been placed!
                                </a>
                            </li>
                            <li><a href="">
                                <span class="icon"> B</span>
                                A new order has been placed!
                            </a></li>
                            <li>
                                <a href="">
                                    <span class="icon"> A</span>
                                    A new order has been placed!
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle c-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        <img src="{{url('assets/image/avatar.png')}}" class="img-fluid nav-dp" alt="">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right icon-profile">
                        <a class="dropdown-item" href="#"><span class="material-icons">
                            person_outline
                            </span> Profile   {{ Auth::user()->name }}</a>
                        <a class="dropdown-item" href="#"><span class="material-icons">
                            lock_open
                            </span> Change Password</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                           
                                   
                            <span class="material-icons">
                            power_settings_new
                            </span> 
                             {{ __('Logout') }}
                         </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                       
                    </div>
                </li>
              
            </ul>
        </nav>
        
{{-- 
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> --}}
        <main class="">
            @yield('content')
        </main>
    </div>
    
    <div class="clearfix"></div>
    <footer class="bg-gradiand">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex">
                        <div>© 2020 All rights reserved.</div>
                        <div class="ml-auto ">Design and developed by Altsols</div>
                    </div>
                </div>
            </div>
        </div>
    <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/js/popper.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/js/custom.js')}}"></script>
</body>
</html>
