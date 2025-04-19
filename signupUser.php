<!-- Name: Ariana Hrlic, Fiona Ang, Smriti Kohli
Author: Fiona Ang
Section: CST 8285 300_301
File: signupUser.php
Date: April 8, 2025
Description: This is a php file for Assignment2 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="This is a html file for Lab Assignment 1">
    <meta name="keywords" content="CST8285 - Assignment 1">
    <meta name="author" content="Fiona Ang">
    <title>Signup - Pet Adoption</title>
    <link rel="stylesheet" type="text/css" href="signup.css">
</head>
<body>
    <!-- This is the main body -->
    <main>
        <!-- First Section -->
        <section id="section1">
            <!-- Image from Pinterest -->
             <div id="doggo-image">
                 <img src="pics/dogLogin.png" alt="hi.">
             </div>
            <div class="login-side">
                <h1>Sign Up</h1>
                <p>Already have an account? <a href="login.php">Sign In</a></p>
                <form action="users.php" method="post" onsubmit="return validate();">
                    <!-- First div for full name -->
                    <div class="full-name">
                        <label for="firstname">First Name: </label>
                        <input type="text" id="firstname" name="firstname">
                        
                        <label for="lastname">Last Name: </label>
                        <input type="text" id="lastname" name="lastname">
                    </div>

                    <div class="error-span">
                        <span id="fullNameErr" class="blank-error"></span>
                    </div>

                    <!-- First div for username -->
                    <div class="username">
                        <label for="username">Username: </label>
                        <input type="text" id="username" name="username">
                        <span id="usernameErr" class="blank-error"></span>
                    </div>

                    <!-- Second div for email address -->
                    <div class="email-address">
                        <label for="email">Email: </label>
                        <input type="email" id="email" name="email">
                        <span id="emailErr" class="blank-error"></span>
                    </div>
                    
                    <!-- Third div for phone number -->
                    <div class="phone-number">
                        <label for="phone-number">Phone Number: </label>
                        <input type="text" id="phone-number" name="phone-number" placeholder="(xxx) xxx-xxxx">
                        <span id="phoneNumberErr" class="blank-error"></span>
                    </div>

                    <!-- Fourth div for password1 -->
                    <div class="textfield">
                        <label for="pass">Password</label>
                        <input type="password" name="pass" id="pass">
                        <span id="PassErr" class="blank-error"></span>
                    </div>
                
                    <!-- Fifth div for password2 -->
                    <div class="textfield">
                        <label for="pass2">Re-type Password</label>
                        <input type="password" id="pass2">
                        <span id="PassErr2" class="blank-error"></span>
                    </div>
                    
                    <!-- Sixth div for newsletter -->
                    <div class="checkbox">
                        <input type="checkbox" name="newsletter" id="newsletter">
                        <label for="newsletter">I agree to receive weekly newsletters</label>
                    </div>
                    
                    <!-- Seventh div for terms -->
                    <div class="checkbox">
                        <input type="checkbox" name="terms" id="terms">
                        <label for="terms">I agree to the terms and conditions</label>
                        <span id="termsErr" class="blank-error"></span>
                    </div>
                    
                    <!-- Eighth div for buttons -->
                    <div class="buttons">
                        <button type="submit" id="send" value="Send">Send</button>
                        <button type="reset" id="reset" value="Clear Information">Clear Information</button>
                    </div>
                </form>
            </div>
        </section>

    </main>
    
    <!-- Footer -->
    <footer>
        <p>&copy; 2025 do we even need this footer??</p>
    </footer>

    <!-- Javascript -->
    <script src="signup.js" defer></script>
</body>
</html>