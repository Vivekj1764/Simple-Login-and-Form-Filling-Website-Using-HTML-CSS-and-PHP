
   <html>
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
    border: 2px solid teal;
    border-radius: 50px;
    /* align-items: center; */
    text-align: center;
}
}
</style>
<?php
    $done=false;
    $showerr=false;
    $con=mysqli_connect('localhost','root','','jiad');
    if (isset($_POST['sb']))
    {
   $cname=$_POST['nm'];
   $ceoname=$_POST['cnm'];
   $email=$_POST['em'];
   $country1=$_POST['Country'];
   $number=$_POST['num'];
   $add1=$_POST['addree'];
   $slogan=$_POST['yr'];
   $ctype=$_POST['ct'];
   $rtype=$_POST['type'];
  
   $reuireds=$_POST['req'];
  




   $query="INSERT INTO forum (companyname,CEO_Name, Email, Phone_no, Addressofc, Nation, Slogan, Req_type, Com_type, Com_sug) VALUES ( '$cname',' $ceoname', '$email', '$number', '$add1', '$country1', '$slogan', '$rtype', '$ctype', '$reuireds')";
   $run=mysqli_query($con,$query);

   if ($run) {
        $done=true;
     }
   else
   {
        $showerr= "Opps Something wents wrong with your Life.......!";
 
   
   }
}


?>
   <body style="background-color: teal;">

    <?php
        if($done)
        {
            echo '<script>alert("We are recived data, we conatct you soon by your provided email ")</script>';
        }
     if($showerr)
        {
            echo '<script>alert("Something wrong with your life.......! please pray for get things to be good....:)")</script>';
        }

    ?>

    <div class="container">
        
 <br>
        <form method="POST" >
            <div style="display: block;align-items: center;text-align: center;width: 1069px;height: 1000px;margin-left: 138px;background-color: #A5CFE3;margin-top: -36px; color:teal;" class="loginf" >
                <h1 style="padding-top: 35px;font-size: 50px;color: teal;" >Company Information Form </h1>
               <br>

            
                <br> 

               <label for="date">Company Name:</label>  <input type="text" name="nm">
  
                <label for="username">CEO Name:</label> <input type="text" name="cnm">
                 <br> <br> <br>

                <label for="password">Company Email: </label>  <input type="text" name="em" >

                <label for="cpassword"> Phone No.</label>  <input type="number" name="num" >
                <br><br> <br>

                <label for="date">Company Address :</label> <input type="text" name="addree" id="">
  
                <label for="cpassword">Country</label> 
               
                <select  name="Country" >
                    <option value="">Select Your Comapny Nation</option>
                    <option value="India" >India</option>
                    <option value="China" >China</option>
                    <option value="Pakistan">Pakistan</option>
                    <option value="Shrilanka">Shrilanka</option>
                    
                </select> 
                   <select  name="type" >
                
                    <option value="Logo design" >Logo design</option>
                    <option value="Ad design" >Ad design</option>
                    <option value="Video Ad">Video Ad</option>
                    <option value="Publish">Publish</option>
                    
                </select> 
                <br>

                   



      
               
                 <br> <br> <br>

           
                
  
                <label for="username">Your Company Slogan</label> <input type="text" name="yr">
                 <br> <br> <br>
                <label for="username">Company type</label> <input type="text" name="ct" placeholder="eg. in IT, Mini-shop, big-malls,hotels...etc">
                 <br> <br> <br>
                
                 
                <label for="username">write comment or suggestions </label> <br>
                <textarea class="input1" type="text" name="req" placeholder="write comment or suggestions" style="border-radius: 2px solid teal;"></textarea>
                 <br> <br> <br>

              
         
               
                <br> <br>
                <br>

               

                <button type="submit" name="sb" >submit</button> 

                <button type="reset">reset</button> <a href="welcome.php"  class="forgot" >GO back to home </a>
                <br> <br>
           
            </div>
            <br>
            <br>
        </form>

        

    </div>


    </body>
       <html>