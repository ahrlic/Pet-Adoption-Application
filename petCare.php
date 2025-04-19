<!-- Name: Ariana Hrlic, Fiona Ang, Smriti Kohli
Author: Ariana Hrlic
Section: CST 8285 300_301
File: petCare.php
Date: April 8, 2025
Description: This is a php file for Assignment2 -->

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="description" content="A website to adopt pets">
    <meta name="keywords" content="HTML, CSS, JavaScript, PHP">
    <meta name="author" content="Ariana Hrlic">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Care Tips</title>
    <link rel="stylesheet" href="CSS/PetCareStyle.css">
</head>

<body>
    <header> 
        <!--page is a placeholder -->
        <?php include 'UpperNavInsurance.php'; ?>
    </header>

<section class="petCare">
    <div class="info1">
        <h3>Tips to add extra joy into your pets life</h3>
        <span> Our pets deserve love in the correct ways. Sometimes as a first time per owner or an owner of a new kind of pet, 
            we may struggle to know how to properly take care of them. Our goal is to insure that all our pets are taken home and 
            well cared for. A pet is a companion and a best friend! Here are some general tips in order to maintain a long term 
            relationship with your furry friend! <br>

            Note: for more specific questions and/ or concerns, you may send in a form through our contact page and we would be 
            happy to help as much as we can!
        </span>

        <!--Note: these links are borrowed from the Ottawa Human Society for tips to appear legitimite in our fictional website -->
        <ul>
            <li><a href="https://www.ottawahumane.ca/wp-content/uploads/2015/01/allergies.pdf?_gl=1*98j8qj*_ga*MTk1MDI4NjQ4Ni4xNzQyODQxMDY5*_ga_JLNZ53SJ3K*MTc0Mjg0MTA2OS4xLjEuMTc0Mjg0MTgyNC4wLjAuMA..*_gcl_au*MTUyODM2NDYwNC4xNzQyODQxMDY5*_ga_Z8C7JLHLGE*MTc0Mjg0MTA2OS4xLjEuMTc0Mjg0MTgyNC42MC4wLjA.">Dealing With Pet allergies</a></li>
            <li><a href="https://ottawahumane.ca/your-pet/animal-tips/flea-control/?_gl=1*1299enz*_ga*MTk1MDI4NjQ4Ni4xNzQyODQxMDY5*_ga_JLNZ53SJ3K*MTc0Mjg0MTA2OS4xLjEuMTc0Mjg0MTk4NS4wLjAuMA..*_gcl_au*MTUyODM2NDYwNC4xNzQyODQxMDY5*_ga_Z8C7JLHLGE*MTc0Mjg0MTA2OS4xLjEuMTc0Mjg0MTk4NS42MC4wLjA.">Flea Control</a></li>
            <li><a href="https://www.ottawahumane.ca/wp-content/uploads/2015/01/multi-pet.pdf?_gl=1*1y9kyv*_ga*MTk1MDI4NjQ4Ni4xNzQyODQxMDY5*_ga_JLNZ53SJ3K*MTc0Mjg0MTA2OS4xLjEuMTc0Mjg0MjMyNS4wLjAuMA..*_gcl_au*MTUyODM2NDYwNC4xNzQyODQxMDY5*_ga_Z8C7JLHLGE*MTc0Mjg0MTA2OS4xLjEuMTc0Mjg0MjMyNi42MC4wLjA.">Multi-Pet HouseHold</a></li>
            <li><a href="https://www.ottawahumane.ca/wp-content/uploads/2015/01/petsandbabies.pdf?_gl=1*13899v2*_ga*MTk1MDI4NjQ4Ni4xNzQyODQxMDY5*_ga_JLNZ53SJ3K*MTc0Mjg0MTA2OS4xLjEuMTc0Mjg0MjU0MS4wLjAuMA..*_gcl_au*MTUyODM2NDYwNC4xNzQyODQxMDY5*_ga_Z8C7JLHLGE*MTc0Mjg0MTA2OS4xLjEuMTc0Mjg0MjU0MS41Ni4wLjA.">Pets and Babies</a></li>
            <li><a href="https://ottawahumane.ca/your-pet/animal-tips/vaccinating-your-pet/">Pet Vaccination</a></li>
            <li><a href="https://ottawahumane.ca/your-pet/animal-tips/summer-safety-for-pets/?_gl=1*fz39m8*_ga*MTk1MDI4NjQ4Ni4xNzQyODQxMDY5*_ga_JLNZ53SJ3K*MTc0Mjg0MTA2OS4xLjEuMTc0Mjg0MjYzNy4wLjAuMA..*_gcl_au*MTUyODM2NDYwNC4xNzQyODQxMDY5*_ga_Z8C7JLHLGE*MTc0Mjg0MTA2OS4xLjEuMTc0Mjg0MjYzNy42MC4wLjA.">Summer Outdoor Safety</a></li>
            <li><a href="https://ottawahumane.ca/your-pet/animal-tips/spay-or-neuter-your-pets/?_gl=1*1f1i0d5*_ga*MTk1MDI4NjQ4Ni4xNzQyODQxMDY5*_ga_JLNZ53SJ3K*MTc0Mjg0MTA2OS4xLjEuMTc0Mjg0MjY3Ny4wLjAuMA..*_gcl_au*MTUyODM2NDYwNC4xNzQyODQxMDY5*_ga_Z8C7JLHLGE*MTc0Mjg0MTA2OS4xLjEuMTc0Mjg0MjY3Ny4yMC4wLjA.">Neuter or Spay</a></li>
        </ul>
    </div>
</section>

</body>
    <footer>
        <?php include 'footerInsurance.php';?>
    </footer>
</html>