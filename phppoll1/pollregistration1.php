<!DOCTYPE html>
<html>
 <head> <title> WELCOME TO POLL ELECTION </title>
         <style>
 body {
    background-image: url("register.jpg");
 }
 
 input[type=text] {
    width: 25%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: rgb(240, 240, 240);
    color: white;

 }
 input[type=password] {
    width: 23%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: rgb(240, 240, 240);
    color: white;
}
</style>
 </head>
 <body> 
      <h1 style="color:rgb(60, 179, 113);"> ELECTION REGISTRATION PAGE </h1>
    <form action="checkregistration2.php" method = "post">
	<br><br><br><br><br><br>
    1.USERID   :<input type = "text" name = "userid" title = "enter userid"maxlength="50"><br>
	2.PASSWORD :<input type='password' name='password' id='password' maxlength="50" ><br>
	3.NAME     :<input type="text" name = "name" title = "enter your name"><br>
      
	
<input type="submit" value="Submit"> <input type="reset">

	</form>
	

 </body>
 
</html>