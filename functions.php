/*
Milestone 2 - Version 1.0 - Payson Parker - 1/30/2021 - functions.php
*/
<?php

function dbconnect(){
    // Credentials for accessing the database
    
    $dbservername = "localhost";
    $dbusername = "root";
    $dbpassword = "root";
    $dbname = "Payson's Database";
    
    // Create connection
    $conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
    
    // Check connection
    if ($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    }
    
    return $conn;
}


// new functions for saving session data

function saveUserId($id)
{
    session_start();
    $_SESSION["USER_ID"] = $id;
}

function getUserId()
{
    //session_start();
    return $_SESSION["USER_ID"];
}


/*show first name.
 function saveUserName($name)
 {
 $_SESSION["USERNAME"] = $name;
 }
 
 function getUserName()
 {
 session_start();
 return $_SESSION["USERNAME"];
 }
 
 ?>
 */


