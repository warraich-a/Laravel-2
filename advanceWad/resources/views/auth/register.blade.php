@extends('layouts.header')


@section('title', "Register.request")


@section('header')
    @parent
@endsection

@section('container')

    <form name = "validationForm" method="post" onsubmit="return Validation()" action="{{ route('register1') }}">
        {{ csrf_field() }}
        <center>
            <label><p>Name</p></label>
            <input type="text" required   placeholder="Your Name"name="name" id="name" class="login_input"><br>

            <label><p>Email</p></label>
            <input type="email" required placeholder="Your Email" name="email" id="email" class="login_input"> <br>

            <label><p>Password</p></label>
            <input type="password" placeholder="....." name="password_1" id="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" class="login_input"><br>

            <label><p>Confirm password</p></label>
            <input type="password" placeholder="....." name="password_2" id="psw" class="login_input"> <br>

            <label><p>Country</p></label>
            <input type="text" placeholder="Your Country" name="country" id="login_input" class="login_input"> <br>
            <br>
            <button type="submit" class="btn" value="Submit" name="reg_user" id="btn_log">Register</button>

            <p>
                <br>
                Already a member? <a href="login">Sign in</a>
            </p>
            <br>
        </center>

    </form>

    <div id="message">
        <h3>Password must contain the following:</h3>
        <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
        <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
        <p id="number" class="invalid">A <b>number</b></p>
        <p id="length" class="invalid">Minimum <b>8 characters</b></p>
    </div>
    <script src="JS\jsFormValidation.js"></script>
    <!-- // <script src="JS\jslbrary.js"></script> -->

@endsection
