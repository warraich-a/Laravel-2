<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="CSS/bootstrap.min.css" />
    <link rel="stylesheet" href="CSS/main.css" />
    <link rel="icon" href="img/chat.png" />
</head>
<body>
<header>
    <div id="bg-img-head">
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link white-a" href="#">Register</a>
            </li>
            <li class="nav-item">
                <a class="nav-link white-a" href="#">Login</a>
            </li>
        </ul>
        <br />
        <br />
        <center>
            <img src="img/icon.png" id="icon-header" class="dis-block" />
            <p class="white-h1 dis-block p-welcom">Forum</p>
        </center>
        <br />
        <br />
        <br />
        <div class="container white-block">
            @section('container')

            @show
        </div>
    </div>
</header>
<main></main>
<footer></footer>
</body>
</html>
