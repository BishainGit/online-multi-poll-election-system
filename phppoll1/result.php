<?php

  require_once 'app/init.php';
  $id = $_POST["pollid"];
 //get the poll result
   $answersQuery = $db->prepare( "SELECT polls_choices.name,
	 COUNT(polls_answers.id) * 100 / (
	  SELECT COUNT(*)
	 FROM polls_answers
	 where polls_answers.poll = :poll) AS percentage
	 FROM polls_choices
	 LEFT JOIN polls_answers
	 ON polls_choices.id = polls_answers.choice
	 WHERE polls_choices.poll = :poll
	 group by polls_choices.id                                 
	 
	 ");
	 $answersQuery->execute([
        
		'poll' => $id 
   ]);
   
    while($row = $answersQuery->fetchObject()){
		  $answers[] = $row;
	  } 
	  
	  //sql8 ="select ";
   
 ?>
   
   <!DOCTYPE html>
<html lang="en">
   <head>
       <meta charset="UTF-8">
	   <title>Document</title>
	   <style>
	    body{
			background-image : url("result2.jpg");
		}
	   </style>
	   
	   <link rel="stylesheet" href="css/main.css">
	</head>
	<body>
	
			    <h2 style="color:rgb(0,250,0);">THE ELECTION IS COMPLETED , THANKS TO USE THIS ELECTION SYSTEM.</h2>
				<ul>
				<?php foreach ($answers as $answer) : ?>
				   <li> <?php echo $answer->name ;?>  --(<?php echo number_format($answer->percentage,2) ;?>%)</li>  <br><br>
				   
				<?php endforeach ;?>
				</ul><br>
				
<p><a href = "checkresult.html">NextPollResult</a></p>
<p><a href = "over.php">Over</a></p>
<p><a href = "reset.php">Reset</a></p>
        		
	 </body>
</html>
   