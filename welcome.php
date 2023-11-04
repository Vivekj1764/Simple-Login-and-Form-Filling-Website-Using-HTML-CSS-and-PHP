<!DOCTYPE html>
<html lang="en">
 <head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
   <title></title>
 </head>
 <style>
        /* UTILITIES */
        * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        }
        body {
            font-family: 'Roboto Condensed', sans-serif;
            background-color: #E7F6FC;
        }
        a {
        text-decoration: none;
        }
        li {
        list-style: none;
        }

        /* NAVBAR STYLING STARTS */
        .navbar {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 10px;
        background-color: #0A0A00;
        color: #fff;
        position: fixed;
        top: 0;
        width: 100%;
        }
        .nav-links a {
        color: #fff;
        }
        /* LOGO */
        .logo {
        font-size: 32px;
        }
        /* NAVBAR MENU */
        .menu {
        display: flex;
        gap: 1em;
        font-size: 18px;
        }
        .menu li:hover {
        background-color: red;
        border-radius: 5px;
        transition: 0.3s ease;
        }
        .menu li {
        padding: 5px 14px;
        }
        /* DROPDOWN MENU */
        .services {
        position: relative; 
        }
        .dropdown {
        background-color: rgb(1, 139, 139);
        padding: 1em 0;
        position: absolute; /*WITH RESPECT TO PARENT*/
        display: none;
        border-radius: 8px;
        top: 35px;
        }
        .dropdown li + li {
        margin-top: 10px;
        }
        .dropdown li {
        padding: 0.5em 1em;
        width: 8em;
        text-align: center;
        }
        .dropdown li:hover {
        background-color: #4c9e9e;
        }
        .services:hover .dropdown {
        display: block;
        }

        /*RESPONSIVE NAVBAR MENU STARTS*/
        /* CHECKBOX HACK */
        input[type=checkbox]{
        display: none;
        } 
        /*HAMBURGER MENU*/
        .hamburger {
        display: none;
        font-size: 24px;
        user-select: none;
        }
        
        
        /* APPLYING MEDIA QUERIES */
        @media (max-width: 768px) {
        .menu { 
        display:none;
        position: absolute;
        background-color:teal;
        right: 0;
        left: 0;
        text-align: center;
        padding: 16px 0;
        }
        .menu li:hover {
        display: inline-block;
        background-color:#4c9e9e;
        transition: 0.3s ease;
        }
        .menu li + li {
        margin-top: 12px;
        }
        input[type=checkbox]:checked ~ .menu{
        display: block;
        }
        .hamburger {
        display: block;
        }
        .dropdown {
        left: 50%;
        top: 30px;
        transform: translateX(35%);
        }
        .dropdown li:hover {
        background-color: #4c9e9e;
        }
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

.container{
    height: 800px;
}
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}
.row2{
    margin-top: 20px;
}
.column2{
  float: left;
  width: 25%;
  padding: 0 10px;
}
.card2 {
    box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%);
    padding: 90px;
    text-align: center;
    background-color: #A5CFE3;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */

.button{
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
    border-radius: 12px;
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
    /* height: 999px; */
}
}

.title {
  color: grey;
  font-size: 18px;
}

.button1{
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

.button1:hover, .a:hover  {
  opacity: 0.7;
  background-color: teal;
}

</style>


 <body>
   <nav class="navbar" id="navbar">
     <!-- LOGO -->
     <div class="logo">JI-AD MANAGEMENT PVT LTD</div>
     <!-- NAVIGATION MENU -->
     <ul class="nav-links">
       <!-- USING CHECKBOX HACK -->
       <input type="checkbox" id="checkbox_toggle" />
       <label for="checkbox_toggle" class="hamburger">&#9776;</label>
       <!-- NAVIGATION MENUS -->
       <div class="menu">
         <li><a href="welcome.php">Home</a></li>
         <li><a href="#contact">About</a></li>
        
         <li><a href="#contact">Contact</a></li>
         <li><a href="logout.php">logout</a></li>
        
       </div>
     </ul>
   </nav>

<div class="container" >
        <p style="    font-family: 'Roboto Condensed', sans-serif; display: block; align-items: center; text-align: center; margin: 68px;  font-size: 36px;     color: black; " >
            Welcome to our company dear '$username!';
        </p>


        <br>
<div class="row">
        <div class="card coulmn" style=" font-family: 'Roboto Condensed', sans-serif;">
          
          <img src="img/desgin.jpg" width="300px">
          <br>

          <h1> <b>AD Design</b></h1>
          <br>

          <p class="title"><b>Poster or Banner ad designs<b></p>
          <br>

          <p style="background: teal; height: 26px; text-align: center; color:wheat; font-size: 22px;" ><b>Start @ 250 <b></p>
         
         <br>
          <p><button class="button1" onclick="document.location='addesign.php'" >Contact</button></p>
        </div>

        <div class="card coulmn tyle=" style="font-family: 'Roboto Condensed', sans-serif;">
          
          <img src="img/logo design.jpg" width="300px" height="200px">
          <br>
          <h1><b> Logo Design </b></h1>
            <br>
            <p class="title">Logo for your business make attractive look</p>
          <br>
          <p style="background: teal; height: 26px; text-align: center; color:wheat; font-size: 22px;" ><b>Start @ 500 <b></p>
          <br>
          <p><button class="button1" onclick="document.location='logodesign.php'" >Contact</button></p>
        </div>

        <div class="card coulmn tyle=" style="font-family: 'Roboto Condensed', sans-serif;">
          
          <img src="img/video.png" width="300px" height="200px">
          <br>
          <h1><b> Video Ad Design </b></h1>
            <br>
            <p class="title">Video ad is more effective than other.</p>
          <br>
          <p style="background: teal; height: 26px; text-align: center; color:wheat; font-size: 22px;" ><b>Start @ 5000 <b></p>
          <br>
          <p><button class="button1" onclick="document.location='videoad.php'" >Contact</button></p>
        </div>

        <div class="card coulmn tyle=" style="font-family: 'Roboto Condensed', sans-serif;">
          
          <img src="img/publish.png" width="300px" height="200px">
          <br>
          <h1><b> Publish </b></h1>
            <br>
            <p class="title">Publish Ad on various social network.</p>
          <br>
          <p style="background: teal; height: 26px; text-align: center; color:wheat; font-size: 22px;" ><b>Start @ 5000 <b></p>
          <br>
          <p><button class="button1" onclick="document.location='publish.php'" >Contact</button></p>
        </div>




</div>


<br>

   <?php require 'parials/contact.php'?>
 </body>
</html >