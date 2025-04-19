<!--Name: Smriti Kohli, Fiona Ang, Ariana Hrilic
Author: Smriti Kohli
File: sign.php
Date: April 8,2025
Description: This is the sign.php file which prints the receipt after the sign up for the insurance of the pets among the Insurance web pages.-->

<!DOCTYPE html>
<html lang="en">
<!--This is the meta header.-->
<head>
  <meta charset="UTF-8">
  <meta name="description" content="sign.php of the Insurance web pages">
  <meta name="keywords" content="HTML, CSS, JavaScript, php">
  <meta name="author" content="Smriti Kohli">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adoptly.-Receipt</title>
  <link rel="stylesheet" href="ticket.css">
</head>

<!--The body tag starts here-->
<body>
  <!-- This is the header -->
  <header>
        
        <!--This is where this php file gets connected to navInsurnce.php to have the nav.-->  
        <?php include 'navInsurance.php'; ?>
  </header>
  <main>   
  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<div class='success-section'>";
        echo "<h2>🎉 Successful Sign-Up 🎉</h2>";
        echo "<p>Congratulations on taking the first step to protect your furry friend! Your pet is now on their way to a happy, healthy, and insured life with us!</p>";
        echo "<h3>Owner Information</h3>";
        echo "<p><strong>Full Name:</strong> " . htmlspecialchars($_POST["owner-name"]) . "</p>";
        echo "<p><strong>Email:</strong> " . htmlspecialchars($_POST["email"]) . "</p>";
        echo "<p><strong>Phone Number:</strong> " . htmlspecialchars($_POST["phone"]) . "</p>";
        echo "<p><strong>Address:</strong> " . htmlspecialchars($_POST["address"]) . "</p>";

        echo "<h3>Pet Information</h3>";
        echo "<p><strong>Pet Name:</strong> " . htmlspecialchars($_POST["pet-name"]) . "</p>";
        echo "<p><strong>Pet Type:</strong> " . htmlspecialchars($_POST["pet-type"]) . "</p>";
        echo "<p><strong>Pet Breed:</strong> " . htmlspecialchars($_POST["pet-breed"]) . "</p>";
        echo "<p><strong>Pet Age:</strong> " . htmlspecialchars($_POST["pet-age"]) . " years</p>";

        echo "<h3>Selected Plan</h3>";
        echo "<p><strong>Insurance Plan:</strong> " . htmlspecialchars($_POST["plan-type"]) . "</p>";
    } else {
        echo "<p>Error: No data submitted.</p>";
        echo "</div>";
    }
    ?>
  </main>
<!--This is where this php file gets connected to footerInsurance.php to have the footer.-->
<?php include 'footerInsurance.php'; ?>
</body>
<!--The body tag ends here.-->
</html>
<!--The class ends here.-->