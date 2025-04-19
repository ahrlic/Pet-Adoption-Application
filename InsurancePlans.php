<!--Name: Smriti Kohli, Fiona Ang, Ariana Hrlic
Author: Smriti Kohli
File: InsurancePlans.php
Date: April 8,2025
Description: This is the Insurance Plan page among the Insurance web pages.-->

<!DOCTYPE html>
<html lang="en">
<!--This is the meta header.-->
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Index page of the Insurance web pages">
  <meta name="keywords" content="HTML, CSS, JavaScript, php">
  <meta name="author" content="Smriti Kohli">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adoptly.-InsurancePlans</title>
  <link rel="stylesheet" href="Insurance.css"><!--This is the link to the external css-->
</head>

<!--The body tag starts here.-->
<body id="PlanBdy">
    <!-- This is the header -->
    <header>
        <!--This is where this php file gets connected to nav.php to have the nav of other web pages of Adotly.-->
        <?php include 'UpperNavInsurance.php'; ?>
    </header>
<!--This is where this page gets connected to navInsurance.php to have nav.-->
    <?php include 'navInsurance.php'; ?>
<!--This is the first section.-->
    <section  class="plans-section">
        <h2 class="section-title">Our Plans</h2>
<!--This is the first div.-->
<!--This is the starting of the box which contains the info about basic plan.-->
        <div class="pink-box">
            <h3 class="plantitle">Basic Plan</h3>
            <p class="plan-overview">Perfect for essential protection to keep your pets safe and sound.</p>
            <div class="plan-inline-details">
                <div>
                    <h4>Coverage Includes:</h4>
                    <ul class="plan-coverage">
                        <li>Accidents</li>
                        <li>Illnesses</li>
                        <li>Emergency Vet Visits</li>
                    </ul>
                </div>
                <div>
                    <h4>Eligibility:</h4>
                    <ul class="plan-eligibility">
                        <li>Pets aged 6 months to 12 years</li>
                    </ul>
                </div>
            </div>
            <h4>Plan Highlights:</h4>
            <p class="plan-highlights">Provides essential health protection with affordable monthly rates for peace of mind during emergencies.</p>
            <h4>Benefits:</h4>
            <ul class="plan-benefits">
                <li>Affordable monthly rates</li>
                <li>Fast claims processing</li>
                <li>Accessible network of veterinarians</li>
            </ul>
        </div>
<!--This is the starting of the box which contains the info about standard plan.-->
        <div class="pink-box">
            <h3 class="plantitle">Standard Plan</h3>
            <p class="plan-overview">A balanced choice that provides extra care for your furry friends.</p>
            <div class="plan-inline-details">
                <div>
                    <h4>Coverage Includes:</h4>
                    <ul class="plan-coverage">
                        <li>Accidents</li>
                        <li>Illnesses</li>
                        <li>Wellness Checks</li>
                    </ul>
                </div>
                <div>
                    <h4>Eligibility:</h4>
                    <ul class="plan-eligibility">
                        <li>Pets aged 6 months to 10 years</li>
                    </ul>
                </div>
            </div>
            <h4>Plan Highlights:</h4>
            <p class="plan-highlights">Offers balanced health coverage with added wellness services to ensure your pet’s holistic care.</p>
            <h4>Benefits:</h4>
            <ul class="plan-benefits">
                <li>Comprehensive coverage</li>
                <li>24/7 support</li>
                <li>Wellness and preventive care</li>
            </ul>
        </div>
<!--This is the starting of the box which contains the info about premium plan.-->  
        <div class="pink-box">
            <h3 class="plantitle">Premium Plan</h3>
            <p class="plan-overview">The ultimate protection plan for peace of mind and premium care.</p>
            <div class="plan-inline-details">
                <div>
                    <h4>Coverage Includes:</h4>
                    <ul class="plan-coverage">
                        <li>Accidents</li>
                        <li>Illnesses</li>
                        <li>Wellness Checks</li>
                        <li>Specialized Treatments</li>
                    </ul>
                </div>
                <div>
                    <h4>Eligibility:</h4>
                    <ul class="plan-eligibility">
                        <li>Pets aged 6 months to 8 years</li>
                    </ul>
                </div>
            </div>
            <h4>Plan Highlights:</h4>
            <h4>Benefits:</h4>
            <ul class="plan-benefits">
                <li>Priority claims processing</li>
                <li>Specialized and advanced treatments</li>
                <li>Exclusive partner discounts</li>
            </ul>
        </div>       
    </section>
<!--This is the second section. which is contaning tables for prices of plans for different breeds.-->
    <section id="pricing" class="pricing-section1">
<!--This is where the pricing table for cats starts.-->
        <h2 class="section-title">Pricing Table of Cats</h2>
        <table class="pricing-table">
            <thead>
                <tr>
                    <th>Breed</th>
                    <th>Basic Price</th>
                    <th>Standard Price</th>
                    <th>Premium Price</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Orange Tabby</td>
                    <td>$250</td><!-- Basic Plan -->
                    <td>$350</td><!-- Standard Plan -->
                    <td>$500</td><!-- Premium Plan -->
                </tr>
                <tr>
                    <td>Exotic Shorthair</td>
                    <td>$100</td><!-- Basic Plan -->
                    <td>$150</td><!-- Standard Plan -->
                    <td>$200</td><!-- Premium Plan -->
                </tr>
                <tr>
                    <td>American Shorthair</td>
                    <td>$200</td><!-- Basic Plan -->
                    <td>$300</td><!-- Standard Plan -->
                    <td>$500</td><!-- Premium Plan -->
                </tr>
                <tr>
                    <td>Tabby Cat</td>
                    <td>$600</td><!-- Basic Plan -->
                    <td>$650</td><!-- Standard Plan -->
                    <td>$700</td><!-- Premium Plan -->
                </tr>
                <tr>
                    <td>Devon Rax</td>
                    <td>$150</td><!-- Basic Plan -->
                    <td>$200</td><!-- Standard Plan -->
                    <td>$400</td><!-- Premium Plan -->
                </tr>
                <tr>
                    <td>Abyssinian</td>
                    <td>$500</td><!-- Basic Plan -->
                    <td>$560</td><!-- Standard Plan -->
                    <td>$900</td><!-- Premium Plan -->
                </tr>
                <tr>
                    <td>Scottish Fold</td>
                    <td>$690</td><!-- Basic Plan -->
                    <td>$750</td><!-- Standard Plan -->
                    <td>$800</td><!-- Premium Plan -->
                </tr>
                <tr>
                    <td>Ragdoll</td>
                    <td>$700</td><!-- Basic Plan -->
                    <td>$750</td><!-- Standard Plan -->
                    <td>$800</td><!-- Premium Plan -->
                </tr>
                <tr>
                    <td>Devon Rex</td>
                    <td>$300</td><!-- Basic Plan -->
                    <td>$500</td><!-- Standard Plan -->
                    <td>$700</td><!-- Premium Plan -->
                </tr>
            </tbody>
        </table>
<!--This is where the table for pricing of dogs start.-->
        <h2 class="section-title">Pricing Table of Dogs</h2>
        <table class="pricing-table">
            <thead>
                <tr>
                    <th>Breed</th>
                    <th>Basic Price</th>
                    <th>Standard Price</th>
                    <th>Premium Price</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Labrador Retriever</td>
                    <td>$400</td><!-- Basic Plan -->
                    <td>$500</td><!-- Standard Plan -->
                    <td>$750</td><!-- Premium Plan -->
                </tr>
                <tr>
                    <td>Golden Retriever</td>
                    <td>$600</td><!-- Basic Plan -->
                    <td>$850</td><!-- Standard Plan -->
                    <td>$1000</td><!-- Premium Plan -->
                </tr>
                <tr>
                    <td>Siberian Husky</td>
                    <td>$550</td><!-- Basic Plan -->
                    <td>$580</td><!-- Standard Plan -->
                    <td>$600</td><!-- Premium Plan -->
                </tr>
                <tr>
                    <td>Shetland Sheepdog</td>
                    <td>$300</td><!-- Basic Plan -->
                    <td>$400</td><!-- Standard Plan -->
                    <td>$500</td><!-- Premium Plan -->
                </tr>
                <tr>
                    <td>Pembroke Welsh Corgi</td>
                    <td>$440</td><!-- Basic Plan -->
                    <td>$560</td><!-- Standard Plan -->
                    <td>$700</td><!-- Premium Plan -->
                </tr>
                <tr>
                    <td>Dachshund</td>
                    <td>$200</td><!-- Basic Plan -->
                    <td>$300</td><!-- Standard Plan -->
                    <td>$400</td><!-- Premium Plan -->
                </tr>
            </tbody>
        </table>
<!--This is the where the table for pricing of hamsters start.-->
        <h2 class="section-title">Pricing Table of Hamster</h2>
        <table class="pricing-table">
            <thead>
                <tr>
                    <th>Breed</th>
                    <th>Basic Price</th>
                    <th>Standard Price</th>
                    <th>Premium Price</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Golden Hamster</td>
                    <td>$50</td><!-- Basic Plan -->
                    <td>$90</td><!-- Standard Plan -->
                    <td>$150</td><!-- Premium Plan -->
                </tr>
                <tr>
                    <td>Winter White Dwarf Hamster</td>
                    <td>$250</td><!-- Basic Plan -->
                    <td>$270</td> <!-- Standard Plan -->
                    <td>$300</td><!-- Premium Plan -->
                </tr>
                <tr>
                    <td>Syrian Hamster</td>
                    <td>$50</td><!-- Basic Plan -->
                    <td>$90</td><!-- Standard Plan -->
                    <td>$160</td><!-- Premium Plan -->
                </tr>
            </tbody>
        </table>
    </section>
<!--This is where this file gets connected to the footerInsurance.php to have the footer.-->
    <?php include 'footerInsurance.php'; ?>   
</body>
<!--The footer ends here.-->
</html>
<!--The file ends here.-->