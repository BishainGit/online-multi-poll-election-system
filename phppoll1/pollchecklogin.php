<?php
session_start();
?>

<html>
<body>

<?php
// Start the session
if( isset($_POST["userid"]) || isset($_POST["password"])){
  $userid = $_POST['userid'] ;
  $password = $_POST['password'];


$conn  = new mysqli("localhost","root","","website");
   if($conn->connect_error){
      die("Connection failed" .$conn->connect_error);
   }
   $sql = "select * from users where userid = '$userid' and passward = '$password'";
		   
	$result = $conn->query($sql);
    $row = mysqli_fetch_assoc($result);
	if($row){
	     
		 
		$sql1 = "select id from users where userid = '$userid'";
		$result = $conn->query($sql1);
		$row = mysqli_fetch_array($result,MYSQLI_NUM);
		
		
        $_SESSION["user_id"]= $row[0];
        header("location: index.php");
	}else{
	
		session_destroy();
		header("location: polllogin.html");
		
	}
}else
{
	  session_destroy();
		header("location: polllogin.html");
}
   
?>

   
</body>
</html> 
