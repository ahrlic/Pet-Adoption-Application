<!--Name: Smriti Kohli, Fiona Ang, Ariana Hrilic
Author: Smriti Kohli
File: WhyUs.php
Date: April 8, 2025
Description: This is the Why Choose Us page among the Insurance web pages.-->

<!DOCTYPE html>
<html lang="en">
<!--This is the meta header.-->
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Why Choose Us page of the Insurance web pages">
  <meta name="keywords" content="HTML, CSS, JavaScript, php">
  <meta name="author" content="Smriti Kohli">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adoptly.-WhyChooseUs</title>
  <link rel="stylesheet" href="Insurance.css"><!--This is the link to the external css-->
</head>

<!--The body tag starts here.-->
<body>
    <!-- This is the header -->
    <header>
        <!--This is where this php file gets connected to nav.php to have the nav of other web pages of Adotly.-->
        <?php include 'UpperNavInsurance.php'; ?>
    </header>
<!--This is where this php file gets connected to navInsurnce.php to have the nav.-->   
    <?php include 'navInsurance.php'; ?>
<!--This is the first section.-->
    <section id="why-choose-us" class="why-choose-section">
        <h2 class="section-title">Why Choose Us</h2>
        <div class="choose-content">
            <img src="Images/maxresdefault.jpg" alt="Happy pet owners" class="choose-image">
            <ul class="why-list">
                <li class="why-item"><strong>#</strong> 24/7 Support from our experts</li>
                <li class="why-item"><strong>#</strong> Customizable plans tailored to your pet's needs</li>
                <li class="why-item"> <strong>#</strong>Affordable and transparent pricing</li>
                <li class="why-item"><strong>#</strong> Access to certified and experienced veterinarians</li>
                <li class="why-item"><strong>#</strong> Fast claims process to ensure timely care</li>
            </ul>
        </div>
    </section>
<!-- Testimonials Section -->
    <section id="testimonials" class="testimonials-section">
        <h2 class="section-title">What Our Customers Say</h2>
        <div class="testimonial">
            <p class="testimonial-text">"Thanks to Pet Insurance, I never had to worry about covering emergency costs for my Labrador, Bella. The process was smooth, and the support team is always helpful!"</p>
            <p class="testimonial-author">- Emily R., Proud Dog Owner</p>
        </div>
        <div class="testimonial">
            <p class="testimonial-text">"This insurance gave me peace of mind knowing my cat, Max, is covered for wellness checks and more. I highly recommend it!"</p>
            <p class="testimonial-author">- Sarah M., Cat Lover</p>
        </div>
    </section>
<!-- Call to Action Section -->
    <section id="cta" class="cta-section">
        <h2 class="section-title">Protect Your Pet Today</h2>
        <p class="cta-text">Join thousands of happy pet owners 🐾🐕🐈 who trust us with their beloved companions ❤️.</p>
    </section>
<!--This is where this php file gets connected to footerInsurance.php to have the footer.-->
    <?php include 'footerInsurance.php'; ?>
</body>
<!--The body tag ends here.-->
</html>
<!--The class ends here.-->