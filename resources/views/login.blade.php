<!--
    #view-name :  view_login.blade.php
    #view-description : display login page
    #input : user_email, user_password
    #output : dialog box
    #author : Apirati Kottharin 65160365
    #create-date : 2024-02-19
-->
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Online Exhibition | Login</title>
        <link rel="stylesheet" href="{{ url('assets/css/login.css') }}">
        <script src="https://kit.fontawesome.com/a87b92189d.js" crossorigin="anonymous"></script>
        <script src="https://apis.google.com/js/platform.js" async defer></script>
        <meta name="google-signin-client_id" content="201955031781-vmjepq48hontk7v6svrpu549ipd4u5p5.apps.googleusercontent.com">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">
    </head>
    <body> 
        <img src="assets/img/system/OE_LOGO1.png" class="logo">
        <p class="intro-text">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Welcome to our platform showcasing the exceptional talents of software engineering students! Explore a myriad of innovative projects and impressive works  created by our talented students in the field of software engineering.<br>

            <br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;From cutting-edge applications to robust system solutions, our site is a hub of creativity and technical expertise.</p>
            <div class="login-container">
            <form action="{{ url('/login')}}" method="post">
                @csrf
            <!-- LOGO -->
            <img src="assets/img/system/OE_ICON.png" class="icon" alt="" style="width: 199px; height: 199px"><br>
            <img src="assets/img/system/LOGO_TEXT.png" class="icon-text" alt="" style="width: 230px; height: 28px;">
            <input type="text" name="email" placeholder="Email" id="username-textbox" style="margin-top: 36%;"/>
            <label>
				<div class="passwd-wrap">
					<input type="password" id="password" placeholder="Password" />
					<button  type="button" id="show-passwd">
                        <!-- <i class="fa fa-eye" aria-hidden="true"></i> -->
						<img src="assets/img/users/eye_closed.svg" alt="Show Password" />
					</button>
				</div>
			</label>

        <!-- BUTTON     -->
        <button type="submit" class="login-button" style="margin-top: 17%;">Login</button>
        <!--<div class="g-signin2" data-onsuccess="onSignIn"> -->
        <button type="button" id="google-login-button"><i class="fa-brands fa-google"></i>      Login with Google</button>
        </div>
        </form>
        </div>
        <div id="background-wrap">
    <div class="bubble x1"></div>
    <div class="bubble x2"></div>
    <div class="bubble x3"></div>
    <div class="bubble x4"></div>
    <div class="bubble x5"></div>
    <div class="bubble x6"></div>
    <div class="bubble x7"></div>
    <div class="bubble x8"></div>
    <div class="bubble x9"></div>
    <div class="bubble x10"></div>
</div>
    </body>
    <script>
        function onSignIn(googleUser) {
        var profile = googleUser.getBasicProfile();
        console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
        console.log('Name: ' + profile.getName());
        console.log('Image URL: ' + profile.getImageUrl());
        console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
    }

        const show_pw_btn = document.querySelector('#show-passwd')
        const show_pw_icon = show_pw_btn.querySelector('img')
        const pw_input = document.querySelector('#password')

        show_pw_btn.addEventListener('click', () => {
            pw_input.type = pw_input.type === 'password' 
                ? 'text' 
                : 'password'

            show_pw_icon.src = show_pw_icon.src.includes('open') 
                ? 'assets/img/users/eye_closed.svg' 
                : 'assets/img/users/eye_open.svg'
        })
    </script>

</html>