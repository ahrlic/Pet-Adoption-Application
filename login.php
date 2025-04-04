<!--Name: Fiona Ang, Smriti Kohli, Ariana Hrlic-->
<!--File: login.html-->
<!--Date: March 30, 2025-->
<!--Description: This is a html file for Assignment 2 - login.html -->

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
    <?php if (isset($_SESSION['error'])): ?>
        <div class="error-message" style="
            color: red;
            background:rgb(119, 46, 46);
            padding: 10px;
            margin: 10px;
            border: 1px solid red;
            border-radius: 5px;
        ">
            <?php 
            echo $_SESSION['error']; 
            unset($_SESSION['error']); // Clear the error after showing it
            ?>
        </div>
    <?php endif; ?>

    <!-- This is the main body -->
    <main>
        <!-- First Section -->
        <section id="section1">
            <div class="login-side">
                <h1>Sign In</h1>
                <p>Don't have an account? <a href="signupUser.html">Create One!</a></p>
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
