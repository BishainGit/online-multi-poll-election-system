<?php

 	  $conn = new mysqli("localhost","root","","website");
	  if($conn->connect_error){
		   die("Conection Failed :".$conn->connect_error);
	  }
   
      $sql1 = "TRUNCATE TABLE polls_answers";
	   if($conn->query($sql1) === true){
		  
		  echo "";
	  }else{
		  echo "Error:" .$sql1. "<br>" .$conn->error ;
	  } 
	  
	   $sql2 = "TRUNCATE TABLE polls_answers";
	   if($conn->query($sql2) === true){
		  
		  echo "";
	  }else{
		  echo "Error:" .$sql2. "<br>" .$conn->error ;
	  } 
	  
	   $sql3 = "TRUNCATE TABLE polls_answers";
	   if($conn->query($sql3) === true){
		  
		  echo "";
	  }else{
		  echo "Error:" .$sql3. "<br>" .$conn->error ;
	  } 
	  
	  $conn->close();
	  
	  
 ?>
   
   <!DOCTYPE html>
<html lang="en">
   <head>
       <meta charset="UTF-8">
	   <title>Document</title>
	   <style>
	    body{
			background-image : url("thankyou.jpg");
		}
	   </style>
	   
	  
	</head>
	<body>
	        
			 <h style="color:rgb(0,240,0);">The online election system has reseted for new election</h>


			 <p><a href = "over.php">Over</a></p>

        		
	 </body>
</html>
   