<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<?php
// $stu_username=$_POST["stu_username"];
// $stu_password=$_POST["stu_password"];



$cus_username=$_POST["cus_username"];
$cus_password=$_POST["cus_password"];

include "config.php";
mysqli_query("SET character_set_results=utf8");
mysqli_query("SET character_set_client=utf8");
mysqli_query("SET character_set_connection=utf8");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else
{
    $sql = "SELECT * FROM customer";
    $sql = $sql . " WHERE username='" . $cus_username . "'";
    $sql = $sql . " And password='" . $cus_password ."'";
    $result = $conn->query($sql);
        if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {
            // print_r($row);exit();
            setcookie("stu_id", $row['cus_id'], time() + 3600);
            setcookie("stu_fname", $row['cus_fname'], time() + 3600);
            setcookie("stu_lname", $row['cus_lname'], time() + 3600);
            setcookie("stu_email", $row['cus_email'], time() + 3600);
            setcookie("imageURL", $row['imageURL'], time() + 3600);


        }
            // เรียกใช้ค่า หน้าอื่นๆ ก็ ทำแบบนี้//
             echo $_COOKIE['stu_id'];
             echo $_COOKIE['stu_fname'];
             echo $_COOKIE['stu_lname'];
             echo $_COOKIE['stu_email'];
             echo $_COOKIE['imageURL'];
             // exit(); // <<  อันนี้ไม่เกี่ยว แค่ให้มันหยุดทำงานแค่บรรทัดนนี้เฉยๆ
            // ---------//
            header("Location:index-logined2.php");

    } else {
        header("Location:index.php");
    }

    $conn->close();

}




?>