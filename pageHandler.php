/*
Milestone 2 - Version 1.0 - Payson Parker - 1/30/2021 - pageHandler.php
*/
<?php

//access DB from our functions.php file
require_once 'functions.php';

// Save our Form Data
$firstName = $_POST["FirstName"];
$lastName = $_POST["LastName"];
$username = $_POST["username"];
$password = $_POST["password"];

// Credentials for accessing the database
$conn = dbconnect();


// Insert HTML Form into User table
$sql = "INSERT INTO users (FIRST_NAME, LAST_NAME, USERNAME, PASSWORD)
        VALUES ('" . $firstName . "', '" . $lastName . "', '" . $username . "', '" . $password . "')";

if ($conn->query($sql) === TRUE)
{
    echo "You are now registered!!<br>your info is saved in:<br>";
}
else
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}
/////////////////////////////////


////// 2/7/2017 Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//echo mysqli_get_server_info($conn);
//echo "System status: <br><br>". mysqli_stat($conn);


// Close the connection
$conn->close();

?>

