<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "form"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create the "formdata" table if it doesn't exist
$sqlCreateTable = "CREATE TABLE IF NOT EXISTS formdata (
    id INT AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(50) NOT NULL,
    lastname VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    contactno VARCHAR(20) NOT NULL,
    gender VARCHAR(10) NOT NULL
)";

if ($conn->query($sqlCreateTable) !== TRUE) {
    echo "Error creating table: " . $conn->error;
}

// Retrieve form data
$fname = $_GET['firstname'];
$lname = $_GET['lastname'];
$email = $_GET['email'];
$contactno = $_GET['contactnum'];
$gender = $_GET['gender'];

// SQL query to insert form data into the table
$sql = "INSERT INTO formdata (firstname, lastname, email, contactno, gender)
        VALUES ('$fname', '$lname', '$email', '$contactno', '$gender')";

if ($conn->query($sql) === TRUE) {
    echo "Form submitted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
