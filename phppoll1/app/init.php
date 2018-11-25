<?php
session_start();
    
   //$userid = select userid from user where uniqueid = $providedbyauthority
  $_SESSION['user_id']=4;
$db = new PDO('mysql:host=localhost;dbname=website','root','');
