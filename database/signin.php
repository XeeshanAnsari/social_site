<?php

         mysql_connect("localhost","root","");
         mysql_select_db("manage"); 
            
            
            if(isset($_POST['signUp'])){
                $name = $_POST['userNameUp'];
                $email = $_POST['userEmailUp'];
                $password = $_POST['userPasswordUp'];
        
              $query_search ="SELECT * from signup where u_name = '$name' and email = '$email' ";
                echo "check is complet";
            if(mysql_query($query_search)){
               echo"<script> window.open('../signUp.php?massaged=Massaged Send','_self')</script>";
             } 
              
         
                
                
 }
       
         
       
 ?>