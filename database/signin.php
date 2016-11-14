<?php

         mysql_connect("localhost","root","");
         mysql_select_db("manage"); 
            
            
            if(isset($_POST['login'])){
                $name = $_POST['userNameIn'];
                $email = $_POST['userEmailIn'];
                $password = $_POST['userPasswordIn'];
        
              $query_search ="SELECT * from signup where u_name = '$name' and email = '$email' ";
                
            if(mysql_query($query_search)){
               echo"<script> window.open('../index.php?user_name=$name ','_self')</script>";
             } else{
                 echo "some error";
             }
              
         
                
                
 }
       
         
       
 ?>