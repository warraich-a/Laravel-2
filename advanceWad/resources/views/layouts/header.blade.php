
    <!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title> @yield('title')</title>
    <script src="//code.jquery.com/jquery-1.12.4.js"></script>
    <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="JS/anime.min.js"></script>


</head>
<body>
<header>
    <div id="main_img">
    </div>
    <div id = "header_menu">
        @section('header')
        <div class="container">
            <ul>
                <li class="test"><a><div id="img_prof"></div></a></li>
                @if(session()->has('data'))
                <li class="test" id="Username_a"> <a id="">
                        <div class="dropdown">
                            <button class="dropbtn">{{$email?? ''}}</button>
                            <div class="dropdown-content">
                                <a href="/logout">Logout</a>
                                <a href="/profile/{{$id??''}}?? ''}}">Profile</a>
                                <a href="/home">Home</a>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="test" style="float: left; padding: 0;"><a href="../index.php"><div id="logo_header"></div></a></li>
                @endif

            </ul>
        </div>
            @show
    </div>
</header>


    <div class="container">
        <div  id="white_block">
            @section('container')
            <div id="registration_page">

            </div>
            @show
        </div>
    </div>


</body>
</html>
