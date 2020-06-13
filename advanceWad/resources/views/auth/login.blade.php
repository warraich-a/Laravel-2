@extends('layouts.header')
@section('title', "Login")


@section('header')
    @parent
@endsection

@section('container')
    <div id="login_page">
        <form method="post" action="{{ route('home') }}" >
            {{ csrf_field() }}
            <center>
                <h2>Member Login </h2> <br>
                <label><p>Username</p></label><br>
                <input type="text" name="email" class = "login_input"> <br>
                <label><p>Password</p></label><br>
                <input type="password" name="password_login" class="login_input">
                <br>
                <button type="submit" class="btn" name="login_user" id="btn_log"><p>Login<p></button>   <br>  <br>
                <a href="Email.php">Forget Password </a>
            </center>
        </form>

        <div class="registeration">
            <li>
                <p>Not yet a member? <a href="register">Sign up</a></p>
                <br>
                <br>
            </li>
        </div>
    </div>
@endsection
