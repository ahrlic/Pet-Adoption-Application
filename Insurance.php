<!--Name: Smriti Kohli, Fiona Ang, Ariana Hrilic
File: Insurance.php
Author: Smriti Kohli
Date: April 8,2025
Description: This is the index page among the Insurance web pages.-->

<!DOCTYPE html>
<html lang="en">
<!--This is the meta header.-->
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Index page of the Insurance web pages">
  <meta name="keywords" content="HTML, CSS, JavaScript, php">
  <meta name="author" content="Smriti Kohli">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adoptly.-Index</title>
  <link rel="stylesheet" href="Insurance.css"><!--This is the link to the external css-->
</head>

<!--The body tag starts here-->
<body class="page-background">
    <!-- This is the header -->
    <header>
        <!--This is where this php file gets connected to nav.php to have the nav of other web pages of Adotly.-->
        <?php include 'UpperNavInsurance.php'; ?>
    </header>

<!--This is where this php file gets connected to navInsurnce.php to have the nav.-->   
    <?php include 'navInsurance.php'; ?>
<!--This is the first div.-->
    <div class="hero-section">
        <h1 class="hero-title">Your Pet's Well-Being, Our Priority 🐾❤️</h1>
        <p class="hero-text">Because They're Family, Too!</p>
        <img src="Images/OIP (8).jpg" alt="Image" id="insurance-img1">
    </div>
        <p id="InnArticle">Pet insurance is your steadfast companion in caring for your furry friends, ensuring that you're never caught off guard by unexpected medical expenses. It provides the assurance that no matter what life throws your pet’s way, their well-being is prioritized. From routine check-ups to unforeseen emergencies, pet insurance allows you to focus on sharing joyful moments with your beloved pet, instead of worrying about the cost of care. After all, every bark, chirp, or whisker twitch is a reminder of the love and loyalty they bring into your life. Safeguard their happiness, because their unconditional love deserves nothing less!</p>
<!--This is the first section which contains three images.-->
    <section id="insurance-imgs">
        <img src="Images/OIP (2).jpg" alt="Image" class="insurance-img2">
        <img src="Images/OIP.jpg" alt="Image" class="insurance-img2">
        <img src="Images/OIP (3).jpg" alt="Image" class="insurance-img2">
    </section>
<!--This is where this php file gets connected to footerInsurance.php to have the footer.-->
    <?php include 'footerInsurance.php'; ?>
</body>
<!--The body tag ends here.-->
</html>
<!--The class ends here.-->