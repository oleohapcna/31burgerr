<html>
<head>
	<title></title>

	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/homestyle-logined.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<!-- search -->
	<link rel="stylesheet" href="css/style-search.css">
	<!-- login -->
	<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
  	<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700'>
  	<link rel="stylesheet" href="css/style-loginbox.css">
  	<!-- login inside -->
  	<link rel="stylesheet" href="css/style-login2.css">
	
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
				
				<div class="profile">
					<div class="profile-detial">
						<h4>
							<?php 
							    	echo $_COOKIE['stu_fname'];
							?>
						</h4>
					</div>
					<div class="profile-picture">
						
						<img src= "img/<?php echo $_COOKIE["imageURL"];?>" style='width:40px;height:40px;'>
					</div><!-- profile-picture -->
				</div><!-- profile -->


				</div><!-- container -->
			</div><!-- wrap-search-login -->


			<div class="banner">
				<div class="container">
					<div class="wrap-menu">
						<div class="logo">
						</div><!-- logo -->
						<div class="menu">
							<ul>
								<li><div class="active marginleft">HOME</div></li>
								<li><a href="product.php">PRODUCT</a></li>
								<li><a href="salady.php">SALADY</a></li>
								<li><a href="contact.php">CONTACT</a></li>
							
							</ul>
						</div><!-- menu -->
						<a href="product.php">
						<div class="basket">
							<img src="img/basket.png">
						</div><!-- basket -->
						</a>
					</div><!-- wrap-menu -->
					<div class="content-banner">
						<div class="logo-banner">
							<img src="img/logo-big.png">
						</div><!-- logo-banner -->
						<p>Just you register you will get more specail gift or discount for buying menu</p>
						<a href="register.html">
							<div class="button-register">
								REGISTER
							</div><!-- button-register -->
						</a>
					</div><!-- content-banner -->
				</div><!-- container -->
				
			</div><!-- banner -->
			</header>

			
			<div class="menu-promotion">
				<div class="menu-left">
					<div class="content-promotion">
						<p>PROMOTION</p>
						<h1>CLEAN FRIED CHICKEN</h1>
						<h2>B 110</h2>
						<a href="#">
							<div class="button-buy">
								BUY
							</div><!-- button-buy -->
						</a>
					</div><!-- content-recommend -->
				</div><!-- menu-left -->
				<div class="menu-right">
					<div class="content-recomment">
						<p>RECCOMMEND</p>
						<h1>STIR FIRED PANNE</h1>
						<h2>B 140</h2>
						<a href="#">
							<div class="button-buy">
								BUY
							</div><!-- button-buy -->
						</a>
					</div><!-- content-recommend -->
				</div><!-- menu-left -->
			</div><!-- menu-recommend -->

			<div class="product">
				<div class="container">
					<h1>PRODUCT</h1>
					<div class="wrap-product">
						<div class="product-1">
							<div class="favourite">
								<i class="fa fa-heart-o" aria-hidden="true"></i>

							</div><!-- favourite -->
							<?php
								include "config.php";
									if($conn->connect_error){ 
									die("Connection failed: ".$conn->connect_error); 
									}
									$sql = "SELECT * FROM product WHERE p_code = '7'";
										
									$result = $conn->query($sql);
									if($result->num_rows>0)
									{
										while ($row = $result->fetch_assoc()) { 
									?>
									
										<div class="pic-product">

										<img src="img/<?php echo $row["p_img"];?>">
								</div><!-- pic-product -->
								<p><?php echo $row["p_name"];?></p>
								<h2>฿<?php echo $row["p_price"];?></h2>
								<a href="order.php?p_code=<?php echo $row["p_code"];?>" class="btn-buy">BUY</a>
									<?php
										}
										}else{

										echo "login fail";

									}
									$conn->close();

									
								?>
								
						</div><!-- product-1 -->
						<div class="product-2">
							<div class="favourite">
								<i class="fa fa-heart-o" aria-hidden="true"></i>

							</div><!-- favourite -->
							<?php
								include "config.php";
									if($conn->connect_error){ 
									die("Connection failed: ".$conn->connect_error); 
									}
									$sql = "SELECT * FROM product WHERE p_code = '8'";
										
									$result = $conn->query($sql);
									if($result->num_rows>0)
									{
										while ($row = $result->fetch_assoc()) { 
									?>
									
										<div class="pic-product">

										<img src="img/<?php echo $row["p_img"];?>">
								</div><!-- pic-product -->
								<p><?php echo $row["p_name"];?></p>
								<h2>฿<?php echo $row["p_price"];?></h2>
								<a href="order.php?p_code=<?php echo $row["p_code"];?>" class="btn-buy">BUY</a>
									<?php
										}
										}else{

										echo "login fail";

									}
									$conn->close();

									
								?>
						</div><!-- product-2 -->
						<div class="product-1">
							<div class="favourite">
								<i class="fa fa-heart-o" aria-hidden="true"></i>

							</div><!-- favourite -->
							<?php
								include "config.php";
									if($conn->connect_error){ 
									die("Connection failed: ".$conn->connect_error); 
									}
									$sql = "SELECT * FROM product WHERE p_code = '9'";
										
									$result = $conn->query($sql);
									if($result->num_rows>0)
									{
										while ($row = $result->fetch_assoc()) { 
									?>
									
										<div class="pic-product">

										<img src="img/<?php echo $row["p_img"];?>">
								</div><!-- pic-product -->
								<p><?php echo $row["p_name"];?></p>
								<h2>฿<?php echo $row["p_price"];?></h2>
								<a href="order.php?p_code=<?php echo $row["p_code"];?>" class="btn-buy">BUY</a>
									<?php
										}
										}else{

										echo "login fail";

									}
									$conn->close();

									
								?>
						</div><!-- product-1 -->


						<div class="product-1">
							<div class="favourite">
								<i class="fa fa-heart-o" aria-hidden="true"></i>

							</div><!-- favourite -->
							<?php
								include "config.php";
									if($conn->connect_error){ 
									die("Connection failed: ".$conn->connect_error); 
									}
									$sql = "SELECT * FROM product WHERE p_code = '10'";
										
									$result = $conn->query($sql);
									if($result->num_rows>0)
									{
										while ($row = $result->fetch_assoc()) { 
									?>
									
										<div class="pic-product">

										<img src="img/<?php echo $row["p_img"];?>">
								</div><!-- pic-product -->
								<p><?php echo $row["p_name"];?></p>
								<h2>฿<?php echo $row["p_price"];?></h2>
								<a href="order.php?p_code=<?php echo $row["p_code"];?>" class="btn-buy">BUY</a>
									<?php
										}
										}else{

										echo "login fail";

									}
									$conn->close();

									
								?>
						</div><!-- product-1 -->
						<div class="product-2">
							<div class="favourite">
								<i class="fa fa-heart-o" aria-hidden="true"></i>

							</div><!-- favourite -->
							<?php
								include "config.php";
									if($conn->connect_error){ 
									die("Connection failed: ".$conn->connect_error); 
									}
									$sql = "SELECT * FROM product WHERE p_code = '11'";
										
									$result = $conn->query($sql);
									if($result->num_rows>0)
									{
										while ($row = $result->fetch_assoc()) { 
									?>
									
										<div class="pic-product">

										<img src="img/<?php echo $row["p_img"];?>">
								</div><!-- pic-product -->
								<p><?php echo $row["p_name"];?></p>
								<h2>฿<?php echo $row["p_price"];?></h2>
								<a href="order.php?p_code=<?php echo $row["p_code"];?>" class="btn-buy">BUY</a>
									<?php
										}
										}else{

										echo "login fail";

									}
									$conn->close();

									
								?>
						</div><!-- product-2 -->
						<div class="product-1">
							<div class="favourite">
								<i class="fa fa-heart-o" aria-hidden="true"></i>

							</div><!-- favourite -->
							<?php
								include "config.php";
									if($conn->connect_error){ 
									die("Connection failed: ".$conn->connect_error); 
									}
									$sql = "SELECT * FROM product WHERE p_code = '12'";
										
									$result = $conn->query($sql);
									if($result->num_rows>0)
									{
										while ($row = $result->fetch_assoc()) { 
									?>
									
										<div class="pic-product">

										<img src="img/<?php echo $row["p_img"];?>">
								</div><!-- pic-product -->
								<p><?php echo $row["p_name"];?></p>
								<h2>฿<?php echo $row["p_price"];?></h2>
								<a href="order.php?p_code=<?php echo $row["p_code"];?>" class="btn-buy">BUY</a>
									<?php
										}
										}else{

										echo "login fail";

									}
									$conn->close();

									
								?>
						</div><!-- product-1 -->
						

						<div class="product-1">
							<div class="favourite">
								<i class="fa fa-heart-o" aria-hidden="true"></i>

							</div><!-- favourite -->
							<?php
								include "config.php";
									if($conn->connect_error){ 
									die("Connection failed: ".$conn->connect_error); 
									}
									$sql = "SELECT * FROM product WHERE p_code = '13'";
										
									$result = $conn->query($sql);
									if($result->num_rows>0)
									{
										while ($row = $result->fetch_assoc()) { 
									?>
									
										<div class="pic-product">

										<img src="img/<?php echo $row["p_img"];?>">
								</div><!-- pic-product -->
								<p><?php echo $row["p_name"];?></p>
								<h2>฿<?php echo $row["p_price"];?></h2>
								<a href="order.php?p_code=<?php echo $row["p_code"];?>" class="btn-buy">BUY</a>
									<?php
										}
										}else{

										echo "login fail";

									}
									$conn->close();

									
								?>
						</div><!-- product-1 -->
						<div class="product-2">
							<div class="favourite">
								<i class="fa fa-heart-o" aria-hidden="true"></i>

							</div><!-- favourite -->
							<?php
								include "config.php";
									if($conn->connect_error){ 
									die("Connection failed: ".$conn->connect_error); 
									}
									$sql = "SELECT * FROM product WHERE p_code = '14'";
										
									$result = $conn->query($sql);
									if($result->num_rows>0)
									{
										while ($row = $result->fetch_assoc()) { 
									?>
									
										<div class="pic-product">

										<img src="img/<?php echo $row["p_img"];?>">
								</div><!-- pic-product -->
								<p><?php echo $row["p_name"];?></p>
								<h2>฿<?php echo $row["p_price"];?></h2>
								<a href="order.php?p_code=<?php echo $row["p_code"];?>" class="btn-buy">BUY</a>
									<?php
										}
										}else{

										echo "login fail";

									}
									$conn->close();

									
								?>
						</div><!-- product-2 -->
						<div class="product-1">
							<div class="favourite">
								<i class="fa fa-heart-o" aria-hidden="true"></i>

							</div><!-- favourite -->
							<?php
								include "config.php";
									if($conn->connect_error){ 
									die("Connection failed: ".$conn->connect_error); 
									}
									$sql = "SELECT * FROM product WHERE p_code = '15'";
										
									$result = $conn->query($sql);
									if($result->num_rows>0)
									{
										while ($row = $result->fetch_assoc()) { 
									?>
									
										<div class="pic-product">

										<img src="img/<?php echo $row["p_img"];?>">
								</div><!-- pic-product -->
								<p><?php echo $row["p_name"];?></p>
								<h2>฿<?php echo $row["p_price"];?></h2>
								<a href="order.php?p_code=<?php echo $row["p_code"];?>" class="btn-buy">BUY</a>
									<?php
										}
										}else{

										echo "login fail";

									}
									$conn->close();

									
								?>
						</div><!-- product-1 -->
					</div><!-- wrap-product -->
				</div><!-- container -->
			</div><!-- product -->
			<div class="cook-salad">
				<div class="container">
					<h1>COOK A SALAD</h1>
					<p>BY YOURSELF</p>
					<a href="salady.php">
						<div class="btn-cook">
							COOK
						</div><!-- btn-cook -->
					</a>
				</div><!-- container -->
			</div><!-- cook-salad -->
			<footer>
				<div class="container">
					<div class="wrap-menu">
						<div class="logo2">
						</div><!-- logo2 -->
						<div class="menu-footer">
							<ul>
								<li><div class="active">HOME</div></li>
								<li><a href="product.php">PRODUCT</a></li>
								<li><a href="salady.php">SALADY</a></li>
								<li><a href="contact.php">CONTACT</a></li>
							
							</ul>
						</div><!-- menu -->
					</div><!-- wrap-menu -->
				</div><!-- container -->
			</footer>
	</div><!-- wrapper -->
</body>
</html>