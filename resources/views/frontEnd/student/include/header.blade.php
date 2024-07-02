<header class="edu-header  header-sticky header-transparent header-style-2 header-default ">
    <div class="row align-items-center">
        <div class="col-lg-4 col-xl-3 col-md-6 col-6">
            <div class="logo">
                <a href="index.html">
                    <img class="logo-light" src="{{asset('frontEnd')}}/assets/images/logo/logo.png" alt="Site Logo">
                </a>
            </div>
        </div>
        <div class="col-lg-6 d-none d-xl-block">
            <nav class="mainmenu-nav d-none d-lg-block">
                <ul class="mainmenu">
                    <li class=""><a href="{{route('home')}}">Home</a>
                    <li class=""><a href="#">About</a>
                    <li class=""><a href="#">Courses</a>
                    <li class=""><a href="#">Pages</a>
                    <li class=""><a href="#">Blog</a>
                    <li class=""><a href="#">Shop</a>
                </ul>
            </nav>
        </div>
        <div class="col-lg-8 col-xl-3 col-md-6 col-6">
            <div class="header-right d-flex justify-content-end">
                <div class="header-menu-bar">
                    <div class="quote-icon quote-search">
                        <button class="white-box-icon search-trigger header-search"><i class="ri-search-line"></i></button>
                    </div>
                    @if(Session::get('student_id'))
                        <div class="quote-icon quote-user d-none d-md-block ml--15 ml_sm--5">
                            <div class="dropdown">
                                <button class="edu-btn btn-medium left-icon header-button text-white dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{Session::get('student_name')}}
                                </button>
                                <ul class="dropdown-menu" style="width: 235px;" aria-labelledby="dropdownMenuButton1">
                                    <li><a href="{{route('student.dashboard')}}" class="dropdown-item  ">Profile</a></li>
                                    <li><a href="" class="dropdown-item" onclick="event.preventDefault();document.getElementById('studentLogoutForm').submit();">Logout</a></li>
                                    <form action="{{route('student.logout')}}" method="post" id="studentLogoutForm">
                                        @csrf
                                    </form>
                                </ul>
                            </div>
                        </div>
                    @else
                        <div class="quote-icon quote-user d-none d-md-block ml--15 ml_sm--5">
                            <a class="edu-btn btn-medium left-icon header-button" href="{{route('login.register')}}"><i class="ri-user-line"></i>Login / Register</a>
                        </div>
                        <div class="quote-icon quote-user d-block d-md-none ml--15 ml_sm--5">
                            <a class="white-box-icon" href="{{route('login.register')}}"><i class="ri-user-line"></i></a>
                        </div>
                    @endif
                </div>

                <div class="mobile-menu-bar ml--15 ml_sm--5 d-block d-xl-none">
                    <div class="hamberger">
                        <button class="white-box-icon hamberger-button header-menu">
                            <i class="ri-menu-line"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="popup-mobile-menu">
    <div class="inner">
        <div class="header-top">
            <div class="logo">
                <a href="index.html">
                    <img src="{{asset('frontEnd')}}/assets/images/logo/logo.png" alt="Site Logo">
                </a>
            </div>
            <div class="close-menu">
                <button class="close-button">
                    <i class="ri-close-line"></i>
                </button>
            </div>
        </div>
        <ul class="mainmenu">
            @if(Session::get('student_id'))
                <li><a href="{{route('student.dashboard')}}">{{Session::get('student_name')}}</a></li>
                <li><a href="{{route('student.dashboard')}}">Profile</a></li>
            @endif
            <li class=""><a href="{{route('home')}}">Home</a>
            <li class=""><a href="#">About</a>
            <li class=""><a href="#">Courses</a>
            <li class=""><a href="#">Pages</a>
            <li class=""><a href="#">Blog</a>
            <li class=""><a href="#">Shop</a>
            @if(Session::get('student_id'))
                <li><a href="" class="dropdown-item" onclick="event.preventDefault();document.getElementById('studentLogoutForm').submit();">Logout</a></li>
                <form action="{{route('student.logout')}}" method="post" id="studentLogoutForm">
                    @csrf
                </form>
            @endif
        </ul>
    </div>
</div>
