<?php
	include "config.php";
								
?>

<html>
<head>
	<title></title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/homestyle.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<!-- search -->
	<link rel="stylesheet" href="css/style-search.css">
	<!-- login -->
	<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
  	<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700'>
  	<link rel="stylesheet" href="css/style-loginbox.css">
  	<!-- login inside -->
  	<link rel="stylesheet" href="css/style-login2.css">

  	<!-- login script -->
  	<script>
        function login()
        {
            var checkdata=true;
            var msg="please enter your ";
            if (document.getElementById("cus_username").value=="")
            {
                checkdata=false;
                msg+="username,";
            }
            if (document.getElementById("cus_password").value=="")
            {
                checkdata=false;
                msg+="password,";
            }
            if (!checkdata)
            {
                alert(msg);
            }
            return checkdata;
        }
    </script>
	
</head>
<body>
	<div class="wrapper">
		<header>
			<div class="wrap-search-login">
				<div class="container">
					<fieldset class="field-container">
  <input type="text" placeholder="Search..." class="field" />
  <div class="icons-container">
    <div class="icon-search"></div>
    <div class="icon-close">
      <div class="x-up"></div>
      <div class="x-down"></div>
    </div>
  </div>
</fieldset>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
<script src="js/index-searchbox.js"></script>

						  <div class="modal-frame">
  <div class="modal">
		    <div class="modal-inset">
      			<div class="button close"><i class="fa fa-close"></i></div>
            <div class="modal-body">
				        <h3>LOGIN</h3>
                <form action="login_api.php" method="POST">
                  <input type="text" class="text" id="cus_username" name="cus_username" placeholder="username" />
                  <br>
                  <br>
                  <input type="password" class="text" id="cus_password" name="cus_password" placeholder="password" />
                  <br>
                  <input type="checkbox" id="checkbox-1-1" class="custom-checkbox" />
                  <label for="checkbox-1-1">Keep me Signed in</label>
    
                  <button type="submit" class="signin" onclick="return login();">
                    Sign In
                  </button>
                    <hr>
                  <a href="forget-password.html" class="marginleftLogin">Forgot Password?</a> <h1>  or  </h1> <a href="register.html">Don't have an account</a> 
                </form>
            </div>
    		</div>
  	</div>
</div>
<!-- <div class="modal-overlay"></div>
 -->

<button class="fancy-btn open">LOGIN</button>
<div class="basket"><img src="img/basket.png"></div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index-login.js"></script>
<script src="js/index-login2.js"></script>

				</div><!-- container -->
			</div><!-- wrap-search-login -->
			</header>

			

	</div><!-- wrapper -->

	<div class="menu">
		<div class="container">
			<ul>
				<li class="active">HOME</li>
				<li>ABOUT</li>
				<li><img src="img/logo.png"></li>
				<li>PRODUCT</li>
				<li>CONTACT</li>		
			</ul>
		</div><!-- container -->
	</div><!-- menu -->

		
	<div class="banner">
		<img src="img/banner.jpg">
	</div><!-- banner -->

	<div class="recommend">
		<div class="container">
			<h1>RECOMMEND</h1>
			<div class="product">
				<img src="img/p1.png">
				<h2>PORK BURGER</h2>
				<h3>120 .-</h3>
			</div><!-- product -->
			<div class="product">
				<img src="img/p2.png">
				<h2>BEEF BURGER</h2>
				<h3>150 .-</h3>
			</div><!-- product -->
			<div class="product">
				<img src="img/p3.png">
				<h2>PORK BIG BURGER</h2>
				<h3>120 .-</h3>
			</div><!-- product -->
		</div><!-- container -->s
	</div><!-- recommend -->

	<footer>
		<div class="container">
			<img class="logo" src="img/logo.png">
			<ul class="menu-footer">
				<li class="active">HOME</li>
				<li>ABOUT</li>
				<li>PRODUCT</li>
				<li>CONTACT</li>
			</ul>
			<div class="footersmall">
				<div class="social">
					<img class="imgicon" src="img/facebook.png">	
					<img class="imgicon" src="img/twitter.png">	
					<img class="imgicon" src="img/instagram.png">	
				</div><!-- social -->
				<div class="email">
					<h3>31burgerhh@gmail.com</h3>
				</div><!-- email -->
			</div><!-- footersmal -->
		</div><!-- container -->
	</footer>
</body>
</html>














