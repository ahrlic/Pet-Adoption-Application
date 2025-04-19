<!-- Name: Ariana Hrlic, Fiona Ang, Smriti Kohli
Author: Fiona Ang
Section: CST 8285 300_301
File: contact.php
Date: April 8, 2025
Description: This is a php file for Group Assignment 2 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="This is a html file for Lab Assignment 1">
    <meta name="keywords" content="CST8285 - Assignment 1">
    <meta name="author" content="Fiona Ang">
    <title>Contact Us - Adoptly</title>
    <!-- <meta http-equiv="refresh" content="1"> -->
    <link rel="stylesheet" type="text/css" href="contact.css">
</head>
<body>
    <!-- This is the header -->
    <header>
        <!-- This is the navigation to home, page, contact -->
        <?php include 'UpperNavInsurance.php'; ?>
    </header>

    <!-- This is the main body -->
    <main>
        <!-- First Section -->
        <section id="section1">
            <div class="container-image">
                <!-- Image from Pinterest -->
                <img src="pics/gang.png" alt="GANG!" style="width:100%;">
                <div class="centered-text">
                    <h1>Contact Us</h1>
                    <p>We'll try to get back to you :)</p>
                </div>
            </div>
        </section>
        
        <!-- Second Section -->
        <div id="section2">
            <img class="decoration" src="pics/decoration1.png" alt="decoration purpose">
        </div>
        
        <!-- Third Section -->
        <section id="section3">
            <div class="form-side">
                <h1>Got Questions?</h1>
                <h3>↓ filled out the form below ↓</h3>
                <form action="contact2.html" method="post" onsubmit="return validate();">
                    <!-- First div for full name -->
                    <div class="name">
                        <label for="name">Name: </label>
                        <input type="text" id="name" name="name">
                        <span id="nameErr" class="blank-error"></span>
                    </div>
                    
                    <!-- Second div for email address -->
                    <div class="email-address">
                        <label for="email">Email: </label>
                        <input type="email" id="email" name="email">
                        <span id="emailErr" class="blank-error"></span>
                    </div>
                    
                    <!-- Third div for message -->
                    <label for="message">Message: </label>
                    <div class="message">
                        <textarea id="message" name="message" placeholder="Message here >:D" rows="8" cols="40"></textarea>
                        <span id="messageErr" class="blank-error"></span>
                    </div>
                    
                    <!-- Fourth div for buttons -->
                    <div class="buttons">
                        <button type="submit" id="send" value="Send">Send</button>
                        <button type="reset" id="reset" value="Clear Information">Clear Information</button>
                    </div>
                </form>
            </div>
            <!-- Image from Pinterest -->
            <img src="pics/doggo(contact).png" alt="lazy ahh dog">
        </section>

    </main>
    
    <!-- Footer -->
    <?php include 'footerInsurance.php';?>

    <!-- Javascript -->
    <script src="contact.js" defer></script>
</body>
</html>