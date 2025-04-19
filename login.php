<!-- Name: Ariana Hrlic, Fiona Ang, Smriti Kohli
Author: Fiona Ang
Section: CST 8285 300_301
File: login.php
Date: April 8, 2025
Description: This is a php file for Assignment2 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="This is a html file for Lab Assignment 1">
    <meta name="keywords" content="CST8285 - Assignment 1">
    <meta name="author" content="Fiona Ang">
    <title>SignIn - Pet Adoption</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
    <!-- This is the main body -->
    <main>
        <!-- First Section -->
        <section id="section1">
            <div class="login-side">
                <h1>Sign In</h1>
                <p>Don't have an account? <a href="signupUser.php">Create One!</a></p>
                <form action="users.php" method="post" onsubmit="return validate();">                    
                    <!-- First div for username -->
                    <div class="username-email">
                        <label for="usernameAndEmail">Username/Email Address: </label>
                        <input type="text" id="usernameAndEmail" name="usernameAndEmail">
                        <span id="usernameAndEmailErr" class="blank-error"></span>
                    </div>
                    
                    <div class="textfield">
                        <label for="pass">Password</label>
                        <input type="password" name="pass" id="pass">
                        <span id="PassErr" class="blank-error"></span>
                    </div>
                    
                    <!-- Fourth div for buttons -->
                    <div class="buttons">
                        <button type="submit" id="send" value="Send">Send</button>
                        <button type="reset" id="reset" value="Clear Information">Clear Information</button>
                    </div>
                </form>
            </div>
            <!-- Image from Pinterest -->
             <div id="el-gato-image">
                 <img src="pics/catWavin.png" alt="hi.">
             </div>
        </section>
    </main>
    
    <!-- Footer -->
    <footer>
        <p>&copy; 2025 do we even need this footer??</p>
    </footer>

    <!-- Javascript -->
    <script src="login.js" defer></script>
</body>
</html>