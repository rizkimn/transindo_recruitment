<!DOCTYPE html>
<html lang="en">
<head>
    {{-- Meta Tag --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    {{-- Title --}}
    <title>@yield('title')</title>

    {{-- CDN Stylesheet --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    {{-- My Stylesheet --}}
    <link rel="stylesheet" href="{{asset('asset/css/template.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/main.css')}}">
    @yield('custom-css')
</head>
<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="d-flex">
            <span style="margin-right: 20px">Hi, {{Auth::user()->username}} </span>
            <div class="header_img"> <img src="{{asset('img/anon-profilepic.jpg')}}" alt=""> </div>
        </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="#" class="nav_logo"> <i class='bx bx-font-color nav_logo-icon'></i> <span class="nav_logo-name">AgenX Admin</span> </a>
                <div class="nav_list">
                    <a href="/admin" class="nav_link {{ request()->is('admin') ? 'active' : ''}}"> <i class='bx bx-list-ul nav_icon'></i> <span class="nav_name">Dashboard</span> </a>
                    <a href="/checkin" class="nav_link {{ request()->is('checkin') ? 'active' : ''}}"> <i class='bx bx-calendar-check nav_icon'></i> <span class="nav_name">Check In</span> </a>
                    <a href="/laporan" class="nav_link {{ request()->is('laporan') ? 'active' : ''}}"> <i class='bx bx-pie-chart-alt-2 nav_icon'></i> <span class="nav_name">Laporan</span> </a>
                </div>
            </div>
            <div>
                <a href="/" class="nav_link"> <i class='bx bx-home nav_icon'></i> <span class="nav_name">Back to Portal</span> </a>
                <a href="/logout" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">Log Out</span> </a>
            </div>
        </nav>
    </div>
    <!--Container Main start-->
    <div class="content-body">
        @yield('body')
    </div>


    {{-- CDN JS --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {{-- My JS --}}
    <script src={{asset('asset/js/main.js')}}></script>
    @yield('custom-js')
</body>
</html>
