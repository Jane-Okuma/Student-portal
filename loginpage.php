
<!DOCTYPE html>    
<html>
<?php
if(isset($_POST['logintxt'])){
    $regno =$_POST['Unametxt'];
    $pass = $_POST["Passtxt"];

    $conn = @mysqli_connect("localhost", "root", "");
    $select = @mysqli_select_db($conn, "studentreg");
    $sql = "SELECT FirstName FROM details WHERE RegNo='$regno' AND Password='$pass'";
    $result = mysqli_query($conn,$sql);
    while($res = $result->fetch_assoc()){
        $pass1 = $res['FirstName'];
        if(empty($pass1) == FALSE){
            header("Location: WelcomePage.php?id=".$regno);
        }
        else
            echo '<script>alert("Invalid Username or Password")</script>';
    }
        
}
?>
<style>
<?php include "style.css"?>
</style>
<head>    
    <title>Login Form</title>    
    <link rel="stylesheet" type="text/css" href="C:/Users/pc/Desktop/Jane/CIS Website/style.css">    
</head>   
    <br><br><br><br><br><br><br>   
    <h1 style="margin-top: -50px; margin-right: -18px;">Login Page</h1><br>
    <div class="container">    
    <div class="login" style="justify-content: center;"> 
        <header>
            
            <img style=" display: block; margin-right: auto; margin-left: auto; width: 100px;" src="image/CU_LOGO.jpg">
        </header>
    </header>
    <fieldset>
    <form id="login" name="frmlogin" method="post" style="text-align: justify; color: black; margin-top: -20px;">   
        <br><br><br> 
        <?ph
        <label style="color: #4d0b36;" for="uname"><b>UserName     
        </b>    
        </label>   
        <br> 
        <input type="text" name="Unametxt" id="Uname" placeholder="Username">    
        <br><br>    
        <label for="password" style="color: #4d0b36;"><b>Password     
        </b>    
        </label><br>
        <input type="Password" name="Passtxt" id="Pass" placeholder="Password">    
        <br><br><br>
        <input type="submit" name="logintxt" id="log" value="Sign in">       
        <br><br>    
        <input name = "chkboxtxt"type="checkbox" id="check"
        <input type ="hidden" name = "var">    
        <span>Remember me</span>  
        <a href="registration.php">Don't have an account? <br>Register</a>  
        <br><br>    
        <a href="#">Forget Password</a> 
    </form>

    </fieldset>
</div>  
</div>  

</html>  

