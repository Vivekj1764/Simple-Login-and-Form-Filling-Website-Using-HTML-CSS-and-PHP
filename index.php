<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Reem+Kufi+Ink&display=swap" rel="stylesheet">

    <title>www.ji-adverisment.com</title>
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
.insta{
    background-color: #bc2a8d;
    color: white;
    font-family: 'Roboto Condensed', sans-serif;
}
.twitter {
    background-color: #55ACEE;

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
.row{
    text-align: center;
    margin: 1px;
}


.column{
       width: 243px;
    height: 66px;
    font-size: 25px;
    display: inline-flex;
    /* margin: 32px; */
    text-align: center;
    align-items: center;
    color: #fff5f5;
    font-family: 'Reem Kufi Ink', sans-serif;
    margin-left: 100px;

}

.card {
      box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%);
    max-width: 300px;
    margin: auto;
    text-align: center;
    display: inline-grid;
    font-family: arial;
    padding: 90;
    margin: 18px;
    width: 1000px;
       background-color: white;
    /* height: 999px; */
}

</style>

<?php
$login=false;
$showError=false;
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $con=mysqli_connect('localhost','root','','jiad');

    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql="SELECT * FROM login where username='$username' AND password='$password'";

    $result=mysqli_query($con,$sql);

    $num=mysqli_num_rows($result);
    if ($num == 1){
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("location: welcome.php");

    } 
    else{
        $showError = "Invalid Credentials";
        }

   }





?>


<body style="background: #00AEAE; overflow-x:hidden; " >
    <?php require 'parials/_nav.php' ?>
<?php
if($login)
 {echo '<script>alert("login sucessfully Enjoy")</script>';}

 if($showError){
    echo '<script>alert("Check password or username once again")</script>';
    }

?>
    <div class="container">
        <p style="    font-family: 'Roboto Condensed', sans-serif; display: block; align-items: center; text-align: center; margin: 68px;  font-size: 26px; color: wheat;" >
            adverisment is backbound your business without advertisement you<br>
            can't grow your business. so we are provide your business advertisement design <br> 
            , crate , shooting and publish on vaious network.<br>
                                                      <h3  style="text-align: center; margin: -54px; color:white"> - ji - adverisment ptv. ltd. </h3> 

        </p>
 <br><br>
 <br>
 <br>
<br>
 <h1 style="color:wheat;     font-family: 'Reem Kufi Ink', sans-serif; text-align:center;">We have widly established on social network</h1>
 <br>
 <br>
 <div class="row">
    <div class="card coulmn" style=" font-family: 'Roboto Condensed', sans-serif;">
          
          <img src="img/fb.png" width="300px">
          <br>

          <h1> <b>70M+</b></h1>
          <br>

         
     </div>
      <div class="card coulmn" style=" font-family: 'Roboto Condensed', sans-serif;">
          
          <img src="img/yt.png" width="300px">
          <br>

          <h1> <b>100M+</b></h1>
          <br>

         
     </div>
      <div class="card coulmn" style=" font-family: 'Roboto Condensed', sans-serif; ">
          
          <img src="img/insta.png" width="280px" style="margin-top: 37px;">
          <br>

          <h1> <b> 90M+ </b></h1>
          <br>

         
     </div>

 
 
 
 
 
 
 <br><br><br>
        <form method="POST">
            <div  style= "    display: block; align-items: center; text-align: center;  width: 500px; height: 500px; margin-left: 396px; background-color: #A5CFE3; " class="loginf">
                <h1 style="padding-top: 51px;font-size: 50px;color: teal;" >login</h1>
               <br> <br> 
                <label for="username">Username</label> <br> <br>
                <input type="text" name="username" required>
                 <br> <br> <br>
                <label for="password">Password</label> <br> <br>
                <input type="password" name="password">
                <br> <br>
                <button type="submit">login</button> <button type="reset">reset</button>
                <br> <br>
              <a href="#" class="forgot" > forgot password | </a>
              <a href="signup.php"  class="forgot" >I  don't have account </a>
            </div>

        </form>
    </div>

    <br>
    <br>
    <br><br><br>

     <?php require 'parials/contact.php'?>





</body>
</html>
