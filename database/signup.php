<?php

    mysql_connect("localhost","root","");
    mysql_select_db("manage");
   if(isset($_POST['signUp'])){
      
      $name = $_POST['userNameUp'];
      $email = $_POST['userEmailUp'];
      $password = $_POST['userPasswordUp'];
     
      


     $query = "insert into signup (u_name,email,pass) value('$name','$email','$password')";  
     
     if(mysql_query($query)){
         mysql_connect("localhost","root","");
         $query1 = "CREATE TABLE 'collage' "; 
            echo"<script> window.open('../signUp.php?','_self')</script>";
         
     }   

   }
   
?>