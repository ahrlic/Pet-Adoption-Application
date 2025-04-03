<!--Name: Fiona Ang, Smriti Kohli, Ariana Hrlic-->
<!--File: search.html-->
<!--Date: March 30, 2025-->
<!--Description: This is a html file for Assignment 2 -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="This is a html file for Lab Assignment 1">
        <meta name="keywords" content="CST8285 - Assignment 1">
        <meta name="author" content="Fiona Ang">
        <title>Search - Adoptly</title>
        <!-- <meta http-equiv="refresh" content="1"> -->
    <link rel="stylesheet" type="text/css" href="search.css">
</head>
<body id="search">
    <!-- This is the header -->
    <header>
        <a href="Home.php" class="logo">Adoptly<span>.</span></a>
        <!-- This is the navigation to home, page, contact -->
        <?php include 'nav.php';?>
    </header>

    <!-- This is the main body -->
    <main>
        <section class="sidebar">
            <h1>Filter</h1>
            <form id="filter-form">
                <section id="pet-types">
                    <h2>Types of pets</h2>
                    <div class="cat-checkbox">
                        <input type="checkbox" name="type[]" id="cat-checkbox" value="Cat" checked>
                        <label for="cat-checkbox">Cats</label>
                    </div>
        
                    <div class="dog-checkbox">
                        <input type="checkbox" name="type[]" id="dog-checkbox" value="Dog" checked>
                        <label for="dog-checkbox">Dog</label>
                    </div>
        
                    <div class="hamster-checkbox">
                        <input type="checkbox" name="type[]" id="hamster-checkbox" value="Hamster" checked>
                        <label for="hamster-checkbox">Hamster</label>
                    </div>
                </section>
                <section id="adoption-status">
                    <h2>Adoption status</h2>
                    <div class="available-checkbox">
                        <input type="checkbox" name="status[]" id="available-checkbox" value="Available" checked>
                        <label for="available-checkbox">Available</label>
                    </div>
        
                    <div class="adopted-checkbox">
                        <input type="checkbox" name="status[]" id="adopted-checkbox" value="Adopted" checked>
                        <label for="adopted-checkbox">Adopted</label>
                    </div>
                </section>
                
                <button type="submit" id="filter-button">Apply Filters</button>
            </form>
        </section>

        <div class="main-content">
            <section class="section1">
                <h2>Looking for <b>PETS</b> ?</h2>
                <p>They are all very friendly (100% legit) 🐾</p>
            </section>

            <div class="display-data">
            </div>
        </div>
    </main>
    
    <!-- Footer -->
    <?php include 'footerInsurance.php';?>

    <!-- Javascript -->
    <script src="search.js" defer></script>
</body>
</html>
