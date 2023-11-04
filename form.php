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
 input {
    padding: 10px;
    width: 350px;
    border: 1px solid teal;
    border-radius: 12px;
    color: teal;
    font-size: 15px;
    font-family: 'Roboto Condensed', sans-serif;
    text-align: center;
    margin: 10px;
    
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

select{

    padding: 8px;
    border: 2px solid teal;
    border-radius: 10px;
}
.input1{
    height: 20%;
    width: 90%;
}
</style>

<?php
    session_start();
    $con=mysqli_connect('localhost','root','','demo');
    if (isset($_POST['sb']))
    {
   $name=$_POST['nm'];
   $email=$_POST['em'];
   $country1=$_POST['Country'];
   $number=$_POST['num'];
   $add=$_POST['add'];
   $ceoname=$_POST['cnm'];
   $years=$_POST['yr'];
   $reuireds=$_POST['req'];
   $soft1=$_POST['software'];



   $query="INSERT INTO forum (Name,Email,nation,num1,Addressofc,CEO_Name,Year_of_est,Requirement,software_selection)VALUES('$name','$email','$country1','$number','$add','$ceoname','$years','$reuireds','$soft1')";

   $run=mysqli_query($con,$query);

   if ($run) {
        $_SESSION['status'] = "Your Information stored suceessfully we contact you soon.......!";
        header("location: form.php");
   }
   else
   {
        $_SESSION['status'] = "Opps Something wents wrong with your Life.......!";
        header("location: form.php");
   
   }
}


?>
<body style="background: #00AEAE; overflow-x:hidden; " >

  <?php require 'parials/_nav.php' ?>

        

    <div class="container">
        <p style="    font-family: 'Roboto Condensed', sans-serif; display: block; align-items: center; text-align: center; margin: 68px;  font-size: 20px;     color: wheat; " >
          fill following form correctly. We are contact soon after your summition of form & start work on it.
        </p>
 <br>
        <form method="POST">
            <div style="display: block;align-items: center;text-align: center;width: 1069px;height: 1000px;margin-left: 138px;background-color: #A5CFE3;margin-top: -36px;" class="loginf">
                <h1 style="padding-top: 35px;font-size: 50px;color: teal;" >Company Requirement form </h1>
               <br>

            <?php
                if (isset($_SESSION['status'])) {
                    echo "<h3>".$_SESSION['status']."<h3>";
                    unset($_SESSION['status']);
                }


            ?>
                <br> 

               <label for="date">Company Name:</label>  <input type="text" name="nm">
  
                <label for="username">CEO Name:</label> <input type="text" name="cnm">
                 <br> <br> <br>

                <label for="password">Company Email: </label>  <input type="text" name="em" >

                <label for="cpassword"> Phone No.</label>  <input type="number" name="num" >
                <br><br> <br>

                <label for="date">Company Address :</label> <input type="text" name="add" id="">
  
                <label for="cpassword">Country</label> 
               
                <select  name="Country" >
                    <option value="India" >India</option>
                    <option value="China" >China</option>
                    <option value="Pakistan">Pakistan</option>
                    <option value="Shrilanka">Shrilanka</option>
                    
                </select> 
                <br>

                    <label for="cpassword">Select privious page selctio again </label> 
                <select  name="software" >
                    <option value="For Small Shop" >For Small Shop</option>
                    <option value="CFor Comapany" > For Comapany</option>
                    <option value="For Dairy Farm">For Dairy Farm</option>
                    <option value="For Hotel,Room">For Hotel,Room</option>
                    <option value="IFor Hospital" >For Hospital</option>
                    <option value="Institution" >Institution</option>
                    <option value="For bank">For bank</option>
                    <option value="For other">For other</option>
                    
                </select> 



      
               
                 <br> <br> <br>

           
                
  
                <label for="username">Company Establish in (Year)</label> <input type="number" name="yr">
                 <br> <br> <br>
                
                 
                <label for="username">Your Requirement about your software</label> <br>
                <input class="input1" type="text" name="req" placeholder="write here your requiements about your required software.">
                 <br> <br> <br>

              
         
               
                <br> <br>
                <br>

               

                <button type="submit" name="sb" >submit</button> 

                <button type="reset">reset</button> <a href="welcome.php"  class="forgot" >GO back to home </a>
                <br> <br>
           
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
        <a href="#" class="google btn"><i class="fa fa-google ">
          </i> on Google
      </a>
        <br>
      </div>
    </div>







</body>
</html>
