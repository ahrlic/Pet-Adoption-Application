<?php
header('Content-Type: application/json');

// Connection info
$servername = "localhost";
$database = "display_pet";
$username = "root";
$password = "";

// Connect to server
$connection = mysqli_connect($servername, $username, $password, $database);

if(mysqli_connect_errno()){
    $msg = "Database connection failed: ";
    $msg .= mysqli_connect_error();
    $msg .= " (" . mysqli_connect_errno() . ")";
    exit($msg);
}

// Base SQL query
$sql = "SELECT * FROM pets WHERE 1=1";

// Add type filter if provided
if (isset($_GET['type'])) {
    $types = explode(',', $_GET['type']);
    $types = array_map(function($type) use ($connection) {
        return mysqli_real_escape_string($connection, $type);
    }, $types);
    $tssypeList = "'" . implode("','", $types) . "'";
    $sql .= " AND type IN ($typeList)";
}

// Add status filter if provided
if (isset($_GET['status'])) {
    $statuses = explode(',', $_GET['status']);
    $statuses = array_map(function($status) use ($connection) {
        return mysqli_real_escape_string($connection, $status);
    }, $statuses);
    $statusList = "'" . implode("','", $statuses) . "'";
    $sql .= " AND adoption_status IN ($statusList)";
}

// Add sorting (you can keep your existing ORDER BY)
$sql .= " ORDER BY id";

$result_set = mysqli_query($connection, $sql);
$pets = [];
while ($result = mysqli_fetch_assoc($result_set)) {
    $pets[] = $result;
}

// Convert to JSON
echo json_encode($pets);

// Close connection
if (isset($connection)) {
    mysqli_close($connection);
}
?>
