<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign UP</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/jquery.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    
</head>
<body onload="slideA();">
         <!-- Navbar Start -->
        <div class="">
            <nav class="navbar navbar-default">
                <div class="container">
                    <ul class="nav navbar-nav">
                       <li><a href="#">Home</a></li>
                       <li><a href="#">About</a></li>
                     </ul>
                </div>
            </nav>
        </div>
           <!-- Navbar Start -->
           
          <!-- Navbar Start -->
          
        <div id="mainContainer">
            <div class="container" id="center">
                
                <div class="col-md-7">
                   <div class="container">
                       <h2>Wellcome to Public School</h2>
                       <p>jdskudsgviuglaliyafdlvguliua libiygiyvcgd;sligligoihfog;cpgis</p>
                   </div>
                </div>
                <div class="col-md-5"> 
                   
                    <div  id="signInBox">
                        <form action="">
                            <input type="text" name="userNameIn" id="userNameInput" placeholder="Email or user name"><br>
                            <input type="text" name="userPasswordIn" id="userPassInput" placeholder="Password">
                            <button class="btn btn-primary btn-sm signInButton" name="login"  ><b>Log in</b></button>
                            <input type="checkbox" name="rememberMe" id="remember"><label for="remember" id="meRemember"> Remember me . </label>
                            <a href="#" id="forgotPass">Forgot password?</a>
                        </form>
                    </div>
                    
                    <div  id="signUpBox">
                        <form action="./database/signup.php" method="post">
                            <input type="text" name="userNameUp" id="userNameInputUp" placeholder="User name"><br>
                            <input type="text" name="userEmailUp" id="userEmailInputUp" placeholder="Email"><br>
                            <input type="text" name="userPasswordUp" id="userPassInputUp" placeholder="Password"><br>
                            <button class="btn btn-success btn-sm signUpButton" name="signUp"  ><b>Sign up</b></button>
                         </form> 
                    </div>
                   <div>
                       <p></p>
                   </div>
                </div>
            </div>
        </div>    
</body>
</html>