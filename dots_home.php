<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
<title>dots HOME</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="homefont.css">
<script src="jquery.min.js" type="text/javascript"></script>
<script src="jquery.validate.js" type="text/javascript"></script>
<script src="additional-methods.js" type="text/javascript"></script>
<script src="form.js" type="text/javascript"></script>

    
<style>
    
body,h1 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
.bgimg {
    background-image: url('images/cc2.jpg');
    min-height: 100%;
    background-position: center;
    background-size: cover;
}
</style>
    </head>
 <body>

<div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
  <div >
      <img src="images/logo .jpg" style="position: absolute;top:3%;left:5%;height: 22%;width: 13% ;  "/>
<!--      style="position:absolute;height: 50%;width: 5%;top: 3%;left: 2%;"/>-->
    
  </div>
  <div class="w3-display-middle">
    <h1 class="w3-jumbo w3-animate-top">COME, BE A DOT</h1>
    <hr class="w3-border-grey" style="margin:auto;width:40%">
    <p class="w3-large w3-center">Together let's bridge the gap and celebrate CEK</p>
    
  </div>
<!--    <div >
        <p><a href="#abt" class="w3-btn w3-green w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off  " style="position: absolute;top: 62%;left: 40%;">SIGN UP</a></p>
        <p><a href="#signin" class="w3-btn w3-green w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off  " style="position: absolute;top: 62%;left: 50%;">LOG IN</a></p>
    </div>-->
    <p><button onclick="document.getElementById('signup').style.display='block'" class="w3-btn  w3-green w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off  " style="position: absolute;top: 62%;left: 40%;">SIGN UP</button></p>
     <p><button onclick="document.getElementById('login').style.display='block'" class="w3-btn  w3-green w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off  " style="position: absolute;top: 62%;left: 50%;">LOG IN</button></p>
    
</div>

<!-- SIGN UP Modal -->
<div id="signup" class="w3-modal">
    <div class="w3-modal-content  w3-animate-zoom w3-display-top" style="max-width: 500px; ">
    <div class="w3-container w3-black ">
      <span onclick="document.getElementById('signup').style.display='none'" class="w3-closebtn w3-xxlarge w3-hover-text-grey">x</span>
      <h1>SIGN UP</h1>
    </div>
    <div class="w3-section">

        <form action="insert_user.php" method="POST" name="signupform" id="signupform">
            <label><b>&nbsp;&nbsp;NAME</b></label>
            <p><input class="w3-input  w3-border" type="text" placeholder="ENTER FULL NAME"  name="Name" required/></p>
        <label><b>&nbsp;&nbsp;EMAIL ID</b></label>
        <p><input class="w3-input  w3-border" type="text" placeholder="ENTER EMAIL ID"  name="email"required></p>
        <label><b>&nbsp;&nbsp;PASSWORD</b></label>
        <p><input class="w3-input  w3-border" type="password" placeholder="ENTER PASSWORD" name="pass"required></p>
        <label><b>&nbsp;&nbsp;GENDER</b></label>
            <select class="w3-select" name="gender">
                <option value="" disabled selected>SELECT GENDER</option>
                <option value="MALE">MALE</option>
                <option value="FEMALE">FEMALE</option>
            </select>
        <label><b>&nbsp;&nbsp;BIRTHDAY</b></label>
        <p><input class="w3-input  w3-border" type="date" placeholder="BIRTHDAY" required name="bdate" value="BIRTHDAY"></p>

        <p><button class="w3-btn w3-light-green w3-padding " type="submit">&nbsp;&nbsp;&nbsp;&nbsp;SIGN UP</button></p>
      </form>
    </div>
  </div>
</div>
<!--- LOGIN MODAL-->
<div id="login" class="w3-modal">
    <div class="w3-modal-content w3-card-8 w3-animate-zoom" style="max-width:600px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('login').style.display='none'" class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright" title="Close Modal">&times;</span>

      </div>

        <form class="w3-container" action="login.php" method="POST">
        <div class="w3-section">
          <label><b>EMAIL ID</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="email" required>
          <label><b>PASSWORD</b></label>
          <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="password" required>
          <button class="w3-btn-block w3-green w3-section w3-padding" type="submit">Login</button>

        </div>
      </form>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('login').style.display='none'" type="button" class="w3-btn w3-red">Cancel</button>
        <span class="w3-right w3-padding w3-hide-small">Forgot <a href="#">password?</a></span>
      </div>

    </div>
  </div>

</body>
</html>


