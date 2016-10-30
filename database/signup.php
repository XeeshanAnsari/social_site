<?php

    mysql_connect("localhost","root","");
    mysql_select_db("manage");
   if(isset($_POST['signUp'])){
      $name = $_POST['userNameIp'];
      $email = $_POST['userEmailIp'];
      $password = $_POST['userPasswordIp'];
     
      


     $query = "insert into signup (u_name,email,pass) value('$name','$email','$password')";  
     
     if(mysql_query($query)){
         echo"<script> window.open('../signUp.php?reg=Registration SuccessFull ','_self')</script>";
         
     }   

   }
   
?>