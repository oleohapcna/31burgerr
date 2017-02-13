<?php  
	$username = $_POST["username"];
	$password = $_POST["password"];
	$cus_fname = $_POST["cus_fname"];
	$cus_lname = $_POST["cus_lname"];
	$cus_address = $_POST["cus_address"];
	$cus_phone = $_POST["cus_phone"];
	$cus_email = $_POST["cus_email"];
	$cus_birthday = $_POST["cus_birthday"];
	$cus_age = $_POST["cus_age"];
	$cus_allergies = $_POST["cus_allergies"];
	$cus_vegetable = $_POST["cus_vegetable"];
	$cus_friut = $_POST["cus_friut"];
	$imageURL = $_POST["imageURL"];

	include "config.php";

	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	}
	else{
		echo "success";
		$sql = "INSERT INTO customer(cus_fname, cus_lname, cus_address, cus_phone, cus_email, username, password, cus_birthday, cus_age, cus_allergies, cus_vegetable, cus_friut, imageURL) VALUES ('".$cus_fname."','".$cus_lname."','".$cus_address."','".$cus_phone."','".$cus_email."','".$username."','".$password."','".$cus_birthday."','".$cus_age."','".$cus_allergies."','".$cus_vegetable."','".$cus_friut."','".$_FILES["imageURL"]["name"]."');";


		$target_folder = "img/";
            $target_filename = $target_folder . basename($_FILES["imageURL"]["name"]);
			$imageFileType = pathinfo($target_filename,PATHINFO_EXTENSION);

			$uploadStatus = 0;
			if ($imageFileType == "jpg") {
				$uploadStatus = 1;
			}
			else{
				echo "Only jpg can upload or file image should be less than 200k";
			}

			if($uploadStatus == 1){

				if ($conn->query($sql)==TRUE) {
					echo "Hi";
				}
				else{
					echo "try again";
				}
				if (move_uploaded_file($_FILES["imageURL"]["tmp_name"], $target_filename)){
				header("Location:home.php");
				echo "This file was uploaded.";
					echo "<img src= ".$target_filename." style='width:100px, height:100px;'>";
				}else {
					echo "This file was not uploaded.";
				}
			}
		
			return array($target_filename,$target_folder);

		
	}
?>