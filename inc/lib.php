<!-- 2213829 -->
<?php

$db_host = "localhost";
$db_user = "js22052"; 
$db_pass = "4ZIGmM7wkGK9t"; 
$db_name = "ce154_" . $db_user; 

// Function to connect to the database
function connect(){
	
	// Set the globals so we can access variables outside of the function
    global $db_host, $db_user, $db_pass, $db_name, $conn;
	
	// Create the database connection using MySQLi Procedural
    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

	// Print out an error message if failed
    if  (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    return $conn;
}
?>