<?php
include "views/header.php";
?>
<link href="views/style.css" rel="stylesheet" type="text/css"/>
        <div class="input-form">
            <p class="title">SINGUP</p>
            <form method="POST" action="models/signup_account.php">
                <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Khatty@gmai.com" >
                <label for="firstname">First Name</label>
                    <input type="text" name="firstname" id="firstname" placeholder=Khatty >
                <label for="lastname">Last Name</label>
                    <input type="text" name="lastname" id="lastname" placeholder="Ybanez" >
                <label for="password">Password</label>
                    <input type="password" name="password" id="password" >
                <label for="cpassword">Confirm Password</label>
                    <input type="password" name="cpassword" id="cpassword">
                <input type="submit" value="Signup" >
             
                
            </form>          
        </div>
   
<?php
include "views/footer.php";
