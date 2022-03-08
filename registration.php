<?php
if(isset($_POST['Create'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $mname = $_POST['mname'];
    $regno = $_POST['regno'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $col = "Computer and Information Sciences";
    $program = $_POST['program'];
    $conn = @mysqli_connect("localhost", "root", "");
    $select = @mysqli_select_db($conn, "studentreg");
    $sql = "INSERT INTO details SET RegNo='$regno', Password='$pass', FirstName='$fname', MiddleName='$mname', LastName='$lname', College = '$col', Email ='$email', Program = '$program'";
    $result = @mysqli_query($conn,$sql);
    if($result){
        echo '<script>alert("Successfully Registered")</script>';
    }
    else
        echo '<script>alert("Fill all fields")</script>';
}
?>
<!DOCTYPE html>    
<html xmlns="http://www.w3.org/1999/xhtml">
<style>
<?php include "C:/Users/pc/Desktop/Jane/CIS Website/regstyle.css"?>
</style>
<?php?>
<head>    
    <title>SignUp</title>    
    <link rel="stylesheet" type="text/css" href="C:/Users/pc/Desktop/Jane/CIS Website/regstyle.css">    
</head>   
    <br><br><br><br><br><br><br>   
    <h1 style="margin-top: -50px; margin-right: -18px;">Sign Up Page</h1><br>
    <div class="container">    
    <div class="login" style="justify-content: center;"> 
        <header>
            
            <img style=" display: block; margin-right: auto; margin-left: auto; width: 100px;" src="image/CU_LOGO.jpg">
        </header>
    </header>
    <fieldset style="border:0;">
    <form id="login" name="frmlogin" method="post" style="text-align: justify; color: black; margin-top: -20px;">   
        <br><br><br> 
        <label style="color: #4d0b36;" for="fname"><b>First Name:   
        </b>    
        </label>   
        <br> 
        <input type="text" name="fname" placeholder="Enter first name">    
        <br><br>    

        <label style="color: #4d0b36;" for="mname"><b>Middle Name:   
        </b>    
        </label>   
        <br> 
        <input type="text" name="mname" placeholder="Enter Middle name">    
        <br><br>

        <label style="color: #4d0b36;" for="lname"><b>Last Name:   
        </b>    
        </label>   
        <br> 
        <input type="text" name="lname" placeholder="Enter Last name">    
        <br><br>    

        <label style="color: #4d0b36;" for="regno"><b>Registration Number:   
        </b>    
        </label>   
        <br> 
        <input type="text" name="regno" placeholder="Enter Reg. No">    
        <br><br>    

        <label style="color: #4d0b36;" for="email"><b>Email:   
        </b>    
        </label>   
        <br> 
        <input type="email" name="email" placeholder="Enter email address">    
        <br><br>  

        <label for="password" style="color: #4d0b36;"><b>Password:     
        </b>    
        </label><br>
        <input type="Password" name="pass" placeholder="Enter new Password">    
        <br><br>

        <label style="color: #4d0b36;" for="dept"><b>Department   
        </b>    
        </label>   
        <br> 
        <input type="text" name="dept" placeholder="Computer and Information Sciences" value="Computer and Information Sciences" disabled>    
        <br><br>    

        <label style="color: #4d0b36;" for="program"><b>Program:   
        </b>    
        </label>   
        <br> 
        <select type="text" name="program" placeholder="Enter name" style="width: 310px; height: 30px; border-radius: 3px;">   
            <option value = "Computer Science">Computer Science</option>
            <option value ="MIS">MIS</option>
        </select> 
        <br><br>    
        <button id = "btn" value = "Create" name = "Create">Create</button>
                <br><br>     
        <a href="loginpage.php">Already have an account? <br>Sign In</a>  
        <br><br> 
    </form>     
    </fieldset>
</div>  
</div>  

</html>     

