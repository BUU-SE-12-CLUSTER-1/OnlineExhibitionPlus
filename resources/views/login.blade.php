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
                @csrf<!-- LOGO -->
                <img src="assets/img/system/OE_ICON.png" class="icon" alt="" style="width: 199px; height: 199px"><br>
                <img src="assets/img/system/LOGO_TEXT.png" class="icon-text" alt="" style="width: 230px; height: 28px;">
        
{{-- Email นะครับ--}}
                <div class="box_container">
                    <div class="email_entryarea">
                        <div>
                            <input type="text" required>
                            <div class="email_labelline">Email</div>
                        </div>
                    </div>
{{-- Password นะครับ--}}    
                    <div class="password_entryarea">
                        <div>
                            <input type="password" required>
                            <div class="password_labelline">Password</div>
                        </div>
                    </div>
                </div> 
<!-- BUTTON LOGIN -->
                <div class="email_entryarea">
                    <button type="submit" class="login-button">Login</button>
                </div>
                <div class="btn_GOOGLE_entryarea">
                    <button type="button" id="google-login-button"><i class="fa-brands fa-google"></i>      Login with Google</button>
                </div>
            </div>
        </form>
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
        window.onload = function() {
	
	//Create canvas and initialize it's context
	var canvas = document.getElementById("flying-bubbles");
	var ctx = canvas.getContext("2d");
	
	//Set the dimensions of canvas equal to the window's dimensions
	var W = window.innerWidth, H = window.innerHeight;
	canvas.width = W;
	canvas.height = H;
	
	//Create an array of circles
	var circles = []; 
	for(var i = 0; i < 20; i++ ){
		circles.push(new create_circle());
	}
	
	//Function to create circles with different positions and velocities
	function create_circle() {
		//Random Position
		this.x = Math.random()*W;
		this.y = Math.random()*H;
		
		//Random Velocities
		this.vx = 0.1+Math.random()*1;
		this.vy = -this.vx;
		
		//Random Radius
		this.r = 10 + Math.random()*50;
	}
	
	//Function to draw the background
	function draw() {
		//Create the gradient
		var grad = ctx.createLinearGradient(0, 0, W, H);

		
		
		//Fill the canvas with the gradient
		ctx.globalCompositeOperation = "source-over";
		ctx.fillStyle = grad;
		ctx.fillRect(0,0,W,H);

		//Fill the canvas with the circles
		for(var j = 0; j < circles.length; j++) {
			var c = circles[j];
			
			//Draw the circle and it with the blur grad
			ctx.beginPath();
			ctx.globalCompositeOperation = "lighter";		
			ctx.fillStyle = grad;
			ctx.arc(c.x, c.y, c.r, Math.PI*2, false);
			ctx.fill();
			
			//Lets use the velocity now
			c.x += c.vx;
			c.y += c.vy;
			
			//To prevent the circles from moving out of the canvas
			if(c.x < -50) c.x = W+50;
			if(c.y < -50) c.y = H+50;
			if(c.x > W+50) c.x = -50;
			if(c.y > H+50) c.y = -50;
		}
	}
	
	setInterval(draw, 25);

} 
    </script>

</html>