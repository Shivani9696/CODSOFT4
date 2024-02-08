<?php
// Database connection settings
$host = "localhost:3306";
$user = "root";
$password = "";
$dbname = "csm";

// Create database connection
$conn = mysqli_connect($host, $user, $password, $dbname);

// Check for database connection errors
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get form data
$cname = $_POST['cname'];
$addr = $_POST['addr'];
$mno = $_POST['mno'];
$email = $_POST['email'];
$password = $_POST['password'];

// Insert customer data into database
$sql = "INSERT INTO customers (cust_name, addr, mno, email, password) VALUES ('$cname', '$addr', '$mno', '$email', '$password')";

if (mysqli_query($conn, $sql)) {
    echo "Customer registered successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close database connection
mysqli_close($conn);
?>