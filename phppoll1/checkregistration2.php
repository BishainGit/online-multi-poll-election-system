<!DOCTYPE html>
<html>
<head>
    <title>Welcome To online voting </title>
</head>
<body>


<?php
 if(isset($_POST["userid"]) || isset($_POST["password"])||isset($_POST["name"])  ){
  $userid = $_POST['userid'] ;
  $passwd = $_POST['password'];
  $name = $_POST['name'];
 
   
   $conn  = new mysqli("localhost","root","","website");
   if($conn->connect_error){
      die("Connection failed" .$conn->connect_error);
   }
   $sql = "INSERT INTO users (userid,passward,username)
           VALUES ('$userid','$passwd','$name')";
		   
	
	  if($conn->query($sql) === true){
		  
		  echo "you are registered successfully";
	  }else{
		  echo "Error:" .$sql. "<br>" .$conn->error ;
	  }
		   
    		   
   $conn->close();
   echo "next voter will register:-";
    header("location:pollregistration1.php");
 }
else{
	echo "put correct userid and passward";
    header("location:checkregistration2.php");
}	

?>

</body>
</html> 