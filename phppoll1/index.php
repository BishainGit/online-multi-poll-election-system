 <?php
 // require_once 'app/init.php';
 session_start();
  //echo $_SESSION["user_id"];
 $db = new PDO('mysql:host=localhost;dbname=website','root',''); 
  
  $pollsQuery = $db->query("
    SELECT id, question
	FROM polls
	WHERE DATE(NOW()) BETWEEN starts AND ends
");
 while($row = $pollsQuery->fetchObject()){
	 $polls[] = $row ;
 }
	 
 // echo '<pre>',print_r($polls),'</pre>';
 ?>

<!DOCTYPE html>
<html lang="en">
   <head>
       <meta charset="UTF-8">
	   <title>Document</title>
	   <style>
	    body {
          background-image: url("poll1.jpg");
            }
        </style>
	   <link rel="stylesheet" href="css/main.css">
	</head>
	<body>
	       
	     
		   <?php if(!empty($polls)): ?>
		    <ul>
			     <?php foreach($polls as $poll): ?>
			<li><a href="poll.php?poll=<?php echo $poll->id; ?>"> <?php echo $poll->question; ?></a></li><br><br>
				 <?php endforeach; ?>
			</ul>
		 <?php else: ?>
		   <p>Sorry, no polls available right now.</p>
		 <?php endif; ?>
		
<p><a href ="polllogin.html"> NewVoter</a></p>
<p><a href ="polllogin.html"> ClickOver</a></p>

	</body>
</html>