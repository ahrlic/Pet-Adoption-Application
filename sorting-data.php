<!-- Name: Ariana Hrlic, Fiona Ang, Smriti Kohli
Author: Fiona Ang
Section: CST 8285 300_301
File: sorting-data.php
Date: April 8, 2025
Description: This is a php file for Assignment2 -->

<?php
    // Database connection info
    $servername = "localhost";
    $database = "display_pet";
    $username = "root";
    $password = "";

    // Connect to server
    $connection = mysqli_connect($servername, $username, $password, $database);

    // Check connection
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Function to get pet types
    function getPetTypes($connection) {
        $type_query = "SELECT * FROM pet_types";
        $type_query_run = mysqli_query($connection, $type_query);
        
        $types = [];
        if(mysqli_num_rows($type_query_run) > 0) {
            while($row = mysqli_fetch_assoc($type_query_run)) {
                $types[] = $row;
            }
        }
        return $types;
    }

    // Function to get products
    function getProducts($connection, $typechecked = null) {
        if($typechecked) {
            $products = [];
            foreach($typechecked as $rowtype) {
                $query = "SELECT * FROM a_products WHERE type_id IN ($rowtype)";
                $result = mysqli_query($connection, $query);
                if(mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        $products[] = $row;
                    }
                }
            }
            return $products;
        }
        
        else {
            $query = "SELECT * FROM a_products";
            $result = mysqli_query($connection, $query);
            $products = [];
            if(mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    $products[] = $row;
                }
            }
            return $products;
        }
    }

    // Get data
    $types = getPetTypes($connection);
    $checked = isset($_GET['types']) ? $_GET['types'] : [];
    $products = isset($_GET['types']) ? getProducts($connection, $_GET['types']) : getProducts($connection);
?>