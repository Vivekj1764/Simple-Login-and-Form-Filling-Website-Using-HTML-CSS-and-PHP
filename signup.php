<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <title>www.ji-software.com</title>
</head>
<style>
 input{
    padding: 10px;
    width: 350px;
    border: 1px solid teal;
    border-radius: 12px;
    color: teal;
    font-size: 15px;
    font-family: 'Roboto Condensed', sans-serif;
    text-align: center
}
button{
    background-color: teal;
    /* padding: 12px; */
    border: 1px solid teal;
    width: 90px;
    height: 35px;
    /* align-items: center; */
    /* display: block; */
    text-align: center;
    font-family: 'Roboto Condensed', sans-serif;
    font-size: 19px;
    color: wheat;
}

button:hover{
    background-color: white;
    border: 1px solid teal;
    color: teal
}

 .forgot{
    color: teal;
    font-size: 20px;
}
.fb{
    background-color: #3B5998;
    color: white;
    font-family: 'Roboto Condensed', sans-serif;
}
.twitter {
    background-color: #55ACEE;
    color: white;
    font-family: 'Roboto Condensed', sans-serif;
}
.google {
    background-color: #dd4b39;
    color: white;
    font-family: 'Roboto Condensed', sans-serif;
}
 
.btn {
    width: 300px;
    padding: 12px;
    border: none;
    border-radius: 4px;
    margin: 8px 520px;
    opacity: 0.85;
    display: inline-block;
    font-size: 17px;
    line-height: 20px;
    text-decoration: none;
    text-align: center;
    font-family: 'Roboto Condensed', sans-serif;

}
</style>1v

<?php
 $showAlert= false;
  $showError=false;
$con=mysqli_connect('localhost','root','','jiad');

if (isset($_POST['reg'])) 
{
    $cname1=$_POST['Cname'];
    $username=$_POST['usname'];
 
    $password=$_POST['Password'];
    $cpassword=$_POST['CPassword'];

    if (($password== $cpassword))
     {
   
        $qurey = "INSERT INTO login (cname,username,password) VALUES('$cname1','$username','$password')";

        $result=mysqli_query($con,$qurey);
       
   

     if($result)
     {
              $showAlert = true;
     }
    }
     else
     {
         $showError='password not matched with comfirm password.....!';
     }
    

}


?>
<body style="background: #00AEAE; overflow-x:hidden; " >
    <?php require 'parials/_nav.php' ?>

<?php
 if($showAlert)
 {echo '<script>alert("Register sucessfully please go to login...!")</script>';}

 if($showError){
    echo '<script>alert("Check password and comfirm password once again")</script>';
    }

?>
    <div class="container">
        <p style="    font-family: 'Roboto Condensed', sans-serif; display: block; align-items: center; text-align: center; margin: 68px;  font-size: 36px;     color: wheat; " >
           You are few steps away to grab the benifits.....!
        </p>
 <br>
        <form method="POST" >
            <div  style= "    display: block; align-items: center; text-align: center;  width: 500px; height: 730px; margin-left: 396px; background-color: #A5CFE3;     margin-top: -36px; " class="loginf">
                <h1 style="padding-top: 51px;font-size: 50px;color: teal;" >Register Now </h1>
               <br> <br> 
               <label for="date" >Company Name</label><br> <br>
                <input type="text" name="Cname" required>
                <br> <br> <br>

                <label for="username" >Username</label> <br> <br>
                <input type="text" name="usname" required>

                 <br> <br> <br>
                <label for="password" >Password</label> <br> <br>
                <input type="password" name="Password" required>
                <br>
                <br>
                <label for="cpassword"> Comfirm Password</label> <br> <br>
                <input type="password" name="CPassword" required>
                <br> <br>
              
                <label for="warning"> Check the Password and Comfirm password are same </label>
                <br> <br>
                <br>

               

                <button type="submit" name="reg">Register</button> <button type="reset">reset</button> 
                <a href='index.php' class="forgot">Back To Login </a>
                <br> <br>
            
              <a href="index.php"  class="forgot" >I alredy have a account </a>
            </div>

        </form>
    </div>

    <br>
    <br>
    <br><br><br>

    <div class="contact" id="contact" style="height: 300px;background-color: #00221C; color:wheat; ">
        <h1 style="padding: 30px;text-align: center;">Contact us </h1>
        <div class="col">
        <a href="#" class="fb btn">
          <i class="fa fa-facebook fa-fw"></i> on  Facebook
         </a>
         <br>
        <a href="#" class="twitter btn">
          <i class="fa fa-twitter fa-fw"></i> on Twitter
        </a>
        <br>
        <a href="#" class="google btn"><i class="fa fa-google fa-fw">
          </i> on Google
        </a>
        <br>
      </div>
    </div>





</body>
</html>
