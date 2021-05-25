<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/web app project new/login.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" 
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">



    

    <title>Forgot Password</title>
  </head>
  <body>

  	{{View::make('login-register-header')}}

<br><br>

<!--body-->
    <section>
      <div class="container">
        <div class="user singinBx">
        <div class="imgBx">

          <img src="/web app project new/images/3.png">

        </div>
          <div class="formBx">
            <form action="forgot-password" method="POST">
              @if(session('error'))
                <div>
                {{session('error')}}
              </div>
              @endif

              @if(session('success'))
              <div>
                {{session('success')}}
              </div>
              @endif

            	<div class="form-group">
            		@csrf
              <h2>Forgot Your Password?</h2>

              <h4 style="font-size: 16px; padding-left: 15px">We get it, stuff happens. Just enter your email address below and we'll send you a link to reset your password!</h4>
              <br>
              <!-- <label for="exampleinputemail">Email Address</label> -->
              <input type="email" name="email" placeholder="Email" class="form-control" id="exampleinputemail" required>
              <!-- <br> -->
          </div>
          <div class="form-group" >

          </div>
          <!-- <button type="button" class="btn btn-primary btn-sm">Send Password Reset Link</button> -->
              <input type="submit" name="" value="Send Link">
              <!-- <button type="submit" class=btn btn-default">Send Password Reset Link</button> -->
              <p class="signup">Don't have an account? <a href="register">Sign Up</a></p>
              <p class="signup">Already have an account? <a href="">Sign In</a></p>
            </form>
          </div>
        </div>
      </div>
    </section>

<!--footer-->
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify">Scanfcode.com <i>CODE WANTS TO BE SIMPLE </i> is an initiative  to help the upcoming programmers with the code. Scanfcode focuses on providing the most efficient code or snippets as the code wants to be simple. We will help programmers build up concepts in different programming languages that include C, C++, Java, HTML, CSS, Bootstrap, JavaScript, PHP, Android, SQL and Algorithm.</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Categories</h6>
            <ul class="footer-links">
              <li><a href="#">Clothes</a></li>
              <li><a href="#">Furniture</a></li>
              <li><a href="#">Electornics</a></li>
              <!-- <li><a href="#">Java</a></li>
              <li><a href="#">Android</a></li>
              <li><a href="#">Templates</a></li> -->
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Contact Us</a></li>
              <li><a href="#">Categories</a></li>
              <li><a href="#">Privacy Policy</a></li>
              <!-- <li><a href="#">Sitemap</a></li> -->
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2021 All Rights Reserved by 
         <a href="#">Jubekas</a>.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="github" href="#"><i class="fa fa-github"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
</footer>



  </body>
</html>





<!-- <!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" 
integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<link rel="stylesheet" type="text/css" href="/web app project new/style.css">

</head>
<body>
<h1>Login page</h1>

@if(count($errors))
<div class="alert alert-danger" role="alert">
	<ul>
		@foreach($errors->all() as $error)
			<li>{{$error}}</li>
		@endforeach
	</ul>
</div>
@endif

<div class="container">
	<div class="row">
		<div class="col-sm-4">
			<form action="login" method="POST">
				<div class="form-group">
					@csrf
					<label for="exampleinputemail">Email address</label>
					<input type="email" name="email" placeholder="input email" class="form-control" id="exampleinputemail">
				</div>
				<div class="form-group">
					<label for="exampleinputpassword">Password</label>
					<input type="password" name="password" placeholder="input password" class="form-control" id="exampleinputpassword">
				</div>
				<button type="submit" class="btn btn-default">Login</button>

			</form>
		</div>
	</div>
</div>
</body>
</html>
 -->

 