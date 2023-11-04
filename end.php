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
    align-items: center;
    /* display: block; */
    text-align: center;
    font-family: 'Roboto Condensed', sans-serif;
    font-size: 19px;
    color: wheat;
    margin-left: 396px;
    margin-bottom: 10px
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




</style>
<body style="background: #00AEAE; overflow-x:hidden; " >
    <?php require 'parials/_nav.php' ?>

    <div class="container">
        <p style="    font-family: 'Roboto Condensed', sans-serif; display: block; align-items: center; text-align: center; margin: 68px;  font-size: 36px;     color: wheat; " >
           Thanks for visiting, we conatact with you soon by your enterd email and phone no.
        </p>
    <br>
      
    <button onclick="document.location='welcome.php'">Back</button>
    <button onclick="document.location='welcome.php'">logout</button>


</div>

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
