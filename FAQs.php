<!--Name: Smriti Kohli, Fiona Ang, Ariana Hrilic
File: FAQs.php
Author: Smriti Kohli
Date: April 8,2025
Description: This is the Frequent Answer Questions page among the Insurance web pages.-->

<!DOCTYPE html>
<html lang="en">
<!--This is the meta header.-->
<head>
  <meta charset="UTF-8">
  <meta name="description" content="FAQs page of the Insurance web pages">
  <meta name="keywords" content="HTML, CSS, JavaScript, php">
  <meta name="author" content="Smriti Kohli">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adoptly.</title>
  <link rel="stylesheet" href="Insurance.css"><!--This is the link to the external css-->
</head>

<!--The body tag starts here-->
<body id="FaqBdy">
    <!-- This is the header -->
    <header>
        <!--This is where this php file gets connected to nav.php to have the nav of other web pages of Adotly.-->
        <?php include 'UpperNavInsurance.php'; ?>
    </header>
        
<!--This is where this php file gets connected to navInsurnce.php to have the nav.-->   
    <?php include 'navInsurance.php'; ?>
<!--This is the first section-->
    <section id="faq" class="faq-section">
        <h2 class="sectionTitle">Frequently Asked Questions</h2>
        <p class="faq-tagline">🐾 Got questions? We've got you covered! Find all the answers below. 🐶🐱</p>

        <!--This is the first question button-->
        <button class="faq-question">What does pet insurance cover? 🐾</button>
        <div class="faq-answer">
            <p>Pet insurance is designed to help pet owners manage the costs of unexpected medical expenses for their furry friends. Coverage typically includes:</p>
            <ul>
                <li><strong>Accidents:</strong> Injuries from mishaps such as broken bones, sprains, or accidental ingestion of harmful substances.</li>
                <li><strong>Illnesses:</strong> Diagnosis and treatment of conditions like infections, digestive issues, respiratory problems, and more.</li>
                <li><strong>Chronic Conditions:</strong> Long-term illnesses such as diabetes, arthritis, and allergies that may require ongoing care and medication.</li>
                <li><strong>Surgeries:</strong> Procedures for both emergencies and non-critical issues, including spaying/neutering, tumor removal, and fracture repairs.</li>
                <li><strong>Emergency Care:</strong> Unexpected visits to the veterinarian or pet ER due to sudden health concerns.</li>
                <li><strong>Medications:</strong> Prescription drugs needed to treat specific conditions, including pain relievers, antibiotics, or other specialized medicines.</li>
            </ul>
            <p>Some comprehensive plans may also offer optional add-ons for:</p>
            <ul>
                <li><strong>Wellness Care:</strong> Routine services like annual check-ups, vaccinations, and dental cleanings.</li>
                <li><strong>Alternative Therapies:</strong> Acupuncture, physiotherapy, or other holistic treatments to improve your pet's quality of life.</li>
                <li><strong>Behavioral Therapy:</strong> Training or treatment for pets with behavioral challenges, such as anxiety or aggression.</li>
            </ul>
            <p>It's important to note that coverage varies by plan and provider. Certain policies may have exclusions for pre-existing conditions, 
                breed-specific issues, or cosmetic procedures. Always review your policy details carefully to ensure it meets your pet's specific needs!</p>
        </div>

        <!--This is the second question button-->
        <button class="faq-question">How do I file a claim? 📋</button>
        <div class="faq-answer">
            <p>Filing a claim with us is quick and easy. Follow these simple steps to get started:</p>
            <ol>
                <li><strong>Log in to your account:</strong> Access your pet insurance account using your registered email and password on our secure portal.</li>
                <li><strong>Navigate to the claims section:</strong> Once logged in, go to the "Claims" or "File a Claim" tab in your account dashboard.</li>
                <li><strong>Provide claim details:</strong> Fill out the required fields, including the reason for the claim, date of the incident, and any 
                relevant medical information.</li>
                <li><strong>Upload necessary documents:</strong> Attach any required supporting documents, such as:
                    <ul>
                        <li>Veterinarian receipts or invoices</li>
                        <li>Detailed medical records from your veterinarian</li>
                        <li>A completed claim form (if applicable)</li>
                    </ul>
                </li>
                <li><strong>Review and submit:</strong> Double-check all the information provided and click "Submit Claim" to send it to our team.</li>
            </ol>
            <p>Once submitted, you will receive a confirmation email with a tracking ID to monitor the progress of your claim.</p>
            <h4>What happens next?</h4>
            <p>Our claims team will review your submission and validate the documents provided. This process typically takes 5-7 business days, but we 
                strive to process claims as quickly as possible. If additional information is needed, we'll reach out to you via email or phone.</p>
            <p>After approval, you'll be reimbursed based on your policy's coverage terms. The reimbursement will be sent directly to your bank account or 
                as a check, depending on your chosen payment method.</p>
            <h4>Need help?</h4>
            <p>If you have any questions or encounter issues while filing your claim, our support team is here to assist. Contact us via phone, email, or 
                live chat for personalized guidance.</p>
        </div>

        <!--This is the third question button-->
        <button class="faq-question">Are pre-existing conditions covered? ⚕️</button>
        <div class="faq-answer">
            <p>Pre-existing conditions are a common concern for pet owners when considering insurance coverage. Unfortunately, most pet insurance policies do not cover pre-existing conditions. Let’s dive deeper into what this means and what options might be available:</p>
            
            <h4>What are pre-existing conditions?</h4>
            <p>Pre-existing conditions refer to any illness, injury, or medical issue that your pet experienced before the start date of your insurance policy. These could include chronic diseases like diabetes or arthritis, previous injuries such as fractures, or hereditary conditions specific to certain breeds.</p>
            
            <h4>Why are pre-existing conditions excluded?</h4>
            <p>Pet insurance is designed to provide coverage for unforeseen events, not for medical issues that were known or diagnosed prior to the policy's start date. Covering pre-existing conditions would make it challenging for insurance providers to maintain affordable plans for all pet owners.</p>
            
            <h4>What happens if my pet develops a new condition?</h4>
            <p>Once your policy is active, coverage generally includes treatment for new illnesses or injuries. For example, if your pet is diagnosed with a condition like heart disease after the policy begins, the treatments and medications for managing the condition may be covered.</p>
            
            <h4>Are there exceptions?</h4>
            <ul>
                <li>Some providers may offer limited coverage for pre-existing conditions that are considered "curable." This means that if your pet has been symptom-free for a specific period (e.g., 6 or 12 months), coverage might be available for related issues.</li>
                <li>Hereditary or congenital conditions may be covered by certain plans, provided they were not diagnosed before the policy began.</li>
            </ul>
            
            <h4>What are my options?</h4>
            <p>If your pet has a pre-existing condition, you can still benefit from pet insurance by enrolling in a plan to cover future unexpected issues. Additionally, some providers offer specialized plans or add-ons for managing chronic conditions that develop after enrollment.</p>
            
            <h4>Need guidance?</h4>
            <p>Our team is here to help you explore the best policy options for your pet's unique needs. Contact us for personalized recommendations or assistance with reviewing exclusions and coverage limits.</p>
        </div>
        
        <!--This is the fourth question button-->
        <button class="faq-question">What's the best plan for my pet? 🐕🐈</button>
        <div class="faq-answer">
            <p>Choosing the best plan for your pet depends on several factors, including their breed, age, lifestyle, and medical history. Let's break it down:</p>
            
            <h4>Factors to Consider:</h4>
            <ul>
                <li><strong>Breed:</strong> Certain breeds are prone to specific health conditions. For example, large dog breeds like Golden Retrievers may benefit from a plan that includes orthopedic coverage, while cats may need coverage for kidney issues.</li>
                <li><strong>Age:</strong> Younger pets typically require plans focused on vaccinations, wellness check-ups, and preventive care. Older pets may need more comprehensive coverage for chronic conditions or frequent medical visits.</li>
                <li><strong>Medical History:</strong> If your pet has a history of illnesses or conditions, it's important to choose a plan that offers ongoing care for related treatments.</li>
                <li><strong>Lifestyle:</strong> Active pets or those frequently outdoors may benefit from plans that include accident coverage for injuries or emergency care.</li>
            </ul>

            <h4>Our Recommended Plans:</h4>
            <ul>
                <li><strong>Basic Plan:</strong> Ideal for essential needs like vaccinations, annual check-ups, and routine care. This plan is perfect for young, healthy pets who need minimal medical interventions.</li>
                <li><strong>Premium Plan:</strong> Provides comprehensive protection, including coverage for accidents, illnesses, surgeries, and alternative therapies such as acupuncture or physiotherapy. Recommended for pets with specific health concerns or older pets needing ongoing care.</li>
                <li><strong>Wellness Add-On:</strong> Perfect for owners looking to expand routine care options like dental cleaning, grooming, and behavioral therapy. This add-on enhances both Basic and Premium plans.</li>
            </ul>

            <h4>How to Choose:</h4>
            <p>Take time to assess your pet's current health and potential future needs. For younger pets, a Basic Plan with Wellness Add-Ons might be sufficient. For older or high-risk pets, the Premium Plan ensures peace of mind with broader coverage.</p>
            
            <h4>Need Help Deciding?</h4>
            <p>Our experts are here to guide you! Contact us for personalized recommendations based on your pet's unique circumstances.</p>
        </div>

        <!--This is the fifth question button-->
        <button class="faq-question">How do I cancel my policy? ✂️</button>
        <div class="faq-answer">
            <p>We understand that circumstances change, and cancelling your policy is a straightforward process. Here's how to proceed:</p>
            <ol>
                <li><strong>Contact Our Support Team:</strong> Reach out to our customer service via phone, email, or live chat. Our team is available to assist you during business hours.</li>
                <li><strong>Provide Policy Details:</strong> Have your policy number or account information handy to help us locate your account quickly.</li>
                <li><strong>Complete Cancellation Request:</strong> We may ask you to confirm some details, such as the reason for cancellation, to finalize the process.</li>
                <li><strong>Cancellation Confirmation:</strong> Once the cancellation is processed, you'll receive a confirmation email with the cancellation date and any remaining details.</li>
            </ol>
            <p>Keep in mind:</p>
            <ul>
                <li>If there are outstanding payments, those must be cleared before cancellation.</li>
                <li>Refund policies may vary depending on your plan, so it's best to review the terms or ask our team for clarification.</li>
            </ul>
            <p>If you ever decide to rejoin, we'll be happy to welcome you and your pet back!</p>
        </div>

        <!--This is the sixth question button-->
        <button class="faq-question">Does pet insurance cover routine care? 🩺</button>
        <div class="faq-answer">
            <p>Yes, many pet insurance providers offer routine care coverage as part of their plans or as an optional add-on. Routine care focuses on 
                preventive healthcare to keep your pet healthy throughout the year. Here's what is typically included:</p>
            <ul>
                <li><strong>Vaccinations:</strong> Coverage for essential shots to protect your pet from diseases such as rabies, distemper, or feline leukemia.</li>
                <li><strong>Annual Check-Ups:</strong> Regular wellness exams to monitor your pet's overall health and detect potential issues early.</li>
                <li><strong>Dental Cleaning:</strong> Maintaining your pet's oral hygiene can help prevent infections, gum disease, and tooth decay.</li>
                <li><strong>Flea, Tick, and Heartworm Prevention:</strong> Coverage for preventive treatments and medications to safeguard your pet 
                against pests and parasites.</li>
                <li><strong>Nutritional Consultations:</strong> Guidance from a vet on the best diet for your pet's age, breed, and lifestyle.</li>
                <li><strong>Spaying/Neutering:</strong> Some plans may include these procedures to promote long-term health and prevent breeding-related issues.</li>
            </ul>
            <p>Note: Routine care is typically part of a wellness plan and may not be included in standard accident or illness policies. Be sure to explore our wellness add-ons for a more comprehensive coverage option!</p>
        </div>

        <!--This is the seventh question button-->
        <button class="faq-question">What happens if I miss a payment? 💳</button>
        <div class="faq-answer">
            <p>We understand that life can be unpredictable, and missing a payment occasionally happens. Here's what you can expect if a payment is missed:</p>
            <ol>
                <li><strong>Policy Suspension:</strong> If a payment is overdue, your policy may be temporarily suspended. During this period, claims may 
                not be processed until the balance is settled.</li>
                <li><strong>Grace Period:</strong> Most policies include a grace period (typically 7-14 days) to allow you to make the payment without 
                penalties. Check your policy terms for details about your grace period.</li>
                <li><strong>Reinstatement:</strong> Once the payment is made, your policy will be reinstated, and coverage will resume. If the payment is 
                significantly delayed, you may need to contact our billing team to ensure smooth reinstatement.</li>
            </ol>
            <p>To avoid missing future payments, consider setting up automatic payments via your debit/credit card or bank account. If you're facing 
                financial challenges, don't hesitate to reach out to our support team for assistance in finding a solution.</p>
        </div>
    </section>
<!-- Call to Action Section -->
    <section id="cta" class="cta-section">
        <h2 class="cta-title">Still have questions? Let's get started! 🐾</h2>
        <p class="cta-text">Don't let uncertainty stop you. Reach out to us to explore all the benefits of pet insurance.</p>
    </section>
<!--This is where this php file gets connected to footerInsurance.php to have the footer.-->
    <?php include 'footerInsurance.php'; ?>
</body>
<!--The body tag ends here.-->
</html>
<!--The class ends here.-->