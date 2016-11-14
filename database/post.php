<?php

    mysql_connect("localhost","root","");
    mysql_select_db("manage");
   if(isset($_POST['post'])){
      
     
      $post_write = $_POST['post_write'];

    $query = "insert into post(post_write) value('$post_write')";  
     
     if(mysql_query($query)){
        
            echo"<script> window.open('../index.php?','_self')</script>";
         
     }   

   }
   
?>