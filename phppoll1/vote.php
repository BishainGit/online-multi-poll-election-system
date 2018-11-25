<?php
   // require_once 'app/init.php';
   session_start();
 
   $db = new PDO('mysql:host=localhost;dbname=website','root','');  
	
	if(isset($_POST['poll'], $_POST['choice'])){
		  
		  
		  $poll = $_POST['poll'];
		  $choice = $_POST['choice'];
		  
		  $dup1 = $db->prepare("SELECT * FROM polls_answers WHERE user = :uname ");
		  $dup1->execute(array("uname"=> $_SESSION['user_id']));
		  
		    $result1 = !!$dup1->fetch(PDO::FETCH_ASSOC) ;
		   if( $result1){
			       $dup2 = $db->prepare("SELECT * FROM polls_answers WHERE poll = :pname and user = :unamme");
		           $dup2->execute(array("pname"=> $poll,
				                         "unamme"=> $_SESSION['user_id'] ));
		  
		          $result2 = !!$dup2->fetch(PDO::FETCH_ASSOC) ;
				 
				  
			      if($result2){
					  
					  echo "precaution : a member cannot vote more than one for same poll";
				  }
				  else{
					  
					  $statement = $db->prepare("INSERT INTO polls_answers(user,poll,choice)
                                   VALUES(:fname, :sname, :choice)");
	
                         $statement->execute(array("fname" => $_SESSION['user_id'],
                                                   "sname" => $poll,
                                                   "choice" => $choice ));  
					  
				  }
			   
		   } else{
			   
			     $statement = $db->prepare("INSERT INTO polls_answers(user,poll,choice)
                   VALUES(:fname, :sname, :choice)
	                         ");
	
                     $statement->execute(array("fname" => $_SESSION['user_id'],
                                               "sname" => $poll,
                                               "choice" => $choice));  
		   }

 header('Location:poll.php?poll=' . $poll); 
}
   
   header('Location: index.php'); 
?>