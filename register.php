<?php
	include "config.php";
								
?>

<html>
<head>
	<title></title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/registerstyle2.css">
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

    <!-- input register -->
   <!--  <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.2/css/bootstrap.css" rel="stylesheet">
  	<link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'> -->
	<link rel="stylesheet" href="css/inputRegister.css">

	<!-- upload image -->
	<link href='https://fonts.googleapis.com/css?family=Quicksand:400,700' rel='stylesheet' type='text/css'>
<!--   	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
 -->  	<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
	<link rel="stylesheet" href="css/styleUploadImage.css">

	<!-- resigter submit -->
	<link rel='stylesheet prefetch' href='https://www.dropbox.com/s/udfqeb2pkbcv3be/styles.css'>
	<link rel="stylesheet" href="css/styleSubmit.css">
	
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

	<div class="wrapper">
		<div class="wrap-register">
			<div class="container">
					<div class="register">
						<h1>REGISTER</h1>
						<form action="register_api2.php" method="POST" enctype="multipart/form-data">
							<input type="text" placeholder="Username" class="input" name="username" id="username">
							<input type="password" placeholder="Password" class="input" name="password" id="password">
							<input type="text" placeholder="Firstname" class="input" name="cus_fname" id="cus_fname">
							<input type="text" placeholder="Lastname" class="input" name="cus_lname" id="cus_lname">	
							<input type="text" placeholder="Address" class="input_address" name="cus_address" id="cus_address">	
							<input type="email" placeholder="Email" class="input" name="cus_email" id="cus_email">	
							<input type="number" placeholder="Phonenumber" class="input" name="cus_phone" id="cus_phone">
							<input type="number" placeholder="Age" class="input" name="cus_age" id="cus_age">	

						<!-- upload image -->
						<div class="upload-image preview-img-upload">
      						<div class="preview-img-holder"><span class="remove-image fa fa-times"></span>
        						<div class="img-holder"><img class="preview-img" src="" alt="image" draggable="false"/></div>
      						</div>
      						<label class="input-holder"><span class="icon fa fa-camera"></span>
        						<input class="hide" type="file" accept="image/*" name="imageURL" />
      						</label>
    					</div>

    					<!-- submit -->
    					<div class="wrap">
    						<button type="submit" onclick="return submit_data();">CREATE YOUR ACCOUNT</button>
    						<img src="https://www.dropbox.com/s/qfu4871umzhlcfo/check_arrow_2.svg?dl=1" alt="">
    						<svg width="66px" height="66px">
      						<circle class="circle_2" stroke-position="outside" stroke-width="3" fill="none" cx="34" cy="33" r="29" stroke="#1ECD97"></circle>
    						</svg>
  						</div>

  							<!-- <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  							<script src="js/styleSubmit.js"></script>
    						<script src="js/styleUploadImage.js"></script>
  							<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
							<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
							<script src="js/inputRegister.js"></script> -->
						</form>
					</div><!-- wrap-register -->
					</form>
				</div><!-- container -->
		</div><!-- register -->

	</div><!-- wrapper -->
	

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














