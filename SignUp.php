<!--Name: Smriti Kohli, Fiona Ang, Ariana Hrlic
Author: Smriti Kohli
File: SignUp.php
Date: April 8, 2025
Description: This is the Sign up page for the insurance of the pets among the Insurance web pages.-->

<!DOCTYPE html>
<html lang="en">
<!--This is the meta header.-->
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Index page of the Insurance web pages">
  <meta name="keywords" content="HTML, CSS, JavaScript, php">
  <meta name="author" content="Smriti Kohli">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adoptly.-InsuranceSignUp</title>
  <link rel="stylesheet" href="Insurance.css"><!--This is the link to the external css-->
</head>

<!--The body tag starts here-->
<body>
    <!-- This is the header -->
    <header>
        <!--This is where this php file gets connected to nav.php to have the nav of other web pages of Adotly.-->
        <?php include 'UpperNavInsurance.php'; ?>
    </header>
<!--This is where this php file gets connected to navInsurnce.php to have the nav.-->   
    <?php include 'navInsurance.php'; ?>
<!-- This is the Sign-Up Section -->
    <section id="signup" class="signup-section">
        <h2 class="section-title">Sign Up for Pet Insurance</h2>
        <p class="section-text">Protect your furry friends today! Fill out the form below to get started. 🐾</p>
        <div class="signup-image">
            <img src="Images/benefits-of-pets-scaled-1.jpg" alt="Happy pets and owners" class="form-image">
        </div>
<!--This is where the form tag starts which is connected to the sign.php through the action tag.-->
        <form id="signupForm" class="signup-form" action="sign.php" method="POST">
<!-- This is the Owner Information fieldset-->
            <fieldset>
                <legend>Owner Information</legend>
<!--This the column for the Full Name.-->
                <label for="owner-name">Full Name:</label>
                <input type="text" id="owner-name" name="owner-name" placeholder="Enter your full name" required>
<!--This the column for the Email.-->
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
<!--This the column for the Phone Number.-->
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>
<!--This the column for the Address.-->
                <label for="address">Address:</label>
                <textarea id="address" name="address" placeholder="Enter your address" rows="3" required></textarea>
            </fieldset>
<!-- This is the Pet Information fieldset -->
            <fieldset>
                <legend>Pet Information</legend>
<!--This the column for the Pet Name.-->
                <label for="pet-name">Pet Name:</label>
                <input type="text" id="pet-name" name="pet-name" placeholder="Enter your pet's name" required>
<!--This the column for the Pet Type.-->
                <label for="pet-type">Pet Type:</label>
                <select id="pet-type" name="pet-type" required>
                    <option value="">Select pet type</option>
                    <option value="dog">Dog</option>
                    <option value="cat">Cat</option>
                    <option value="hamster">Hamster</option>
                    <option value="other">Other</option>
                </select>
<!--This the column for the Pet Breed.-->
                <label for="pet-breed">Pet Breed:</label>
                <input type="text" id="pet-breed" name="pet-breed" placeholder="Enter your pet's breed" required>

                <label for="pet-age">Pet Age:</label>
                <input type="number" id="pet-age" name="pet-age" placeholder="Enter your pet's age (in years)" required>
            </fieldset>
<!-- This is the Insurance Plan fieldset -->
            <fieldset>
                <legend>Insurance Plan Selection</legend>
                <label for="plan-type">Select a Plan:</label>
                <select id="plan-type" name="plan-type" required>
                    <option value="">Choose a plan</option>
                    <option value="basic">Basic Plan</option>
                    <option value="standard">Standard Plan</option>
                    <option value="premium">Premium Plan</option>
                </select>
            </fieldset>
<!-- Ths is the Submit Button -->
            <input type="submit" class="signup-button" value="Submit Application">
<!-- Ths is the reset Button -->
            <button type="reset" class="signup-button"> Reset Application</button>
        </form>
    </section>
<!--This is where this php file gets connected to footerInsurance.php to have the footer.-->
    <?php include 'footerInsurance.php'; ?>
</body>
<!--The body tag ends here.-->
</html>
<!--The class ends here.-->