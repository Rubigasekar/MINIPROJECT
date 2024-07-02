<?php
   $server="localhost";
   $name="root";
   $pass="";
   $db="food_management";
   $connect=new mysqli($server,$name,$pass,$db);
   if($connect->connect_error) {
      die("connection failed");
   }
   if ($_SERVER["REQUEST_METHOD"] =="POST") {
   $myname1=$_POST['myname1'];
   $myemail=$_POST['myemail'];
   $myphone=$_POST['myphone'];
   $myadd=$_POST['myadd'];
   $myfood=$_POST['myfood'];
   $quantity=$_POST['quantity'];
   $fooddate=$_POST['fooddate'];
   $sql= "INSERT INTO bad_food (Name, email, phone, address, foodtype, quantity, date) VALUES ( '$myname1','$myemail','$myphone','$myadd','$myfood','$quantity','$fooddate')";
   if ($connect->query($sql)===TRUE) {
      echo "Thank you for registering! Your generous contribution means so much. Our team will be there soon to collect your food and make a difference!";

      echo '
      <p align="center">
      <img src="edited_image_with_scraps.png" width="950" height="520" img align="center" alt="Registration Successful">
      </p>';
   } 
else {
   echo"There is a problem";
}
$connect->close();
   }
?>