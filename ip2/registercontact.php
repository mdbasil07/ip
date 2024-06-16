<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include the database connection file
include 'contactconnect.php';

// Check if the form is submitted and the message is not empty
if(isset($_POST['message']) && !empty($_POST['message'])) {
    // Sanitize and store the message from the form
    $message = $conn->real_escape_string($_POST['message']);
    
    // Insert the message into the database
    $insertQuery = "INSERT INTO complains (message) VALUES ('$message')";

    if($conn->query($insertQuery) === TRUE) {
        echo "Message sent successfully!";
    } else {
        echo "Error: " . $insertQuery . "<br>" . $conn->error;
    }
} else {
    echo "Error: Message is empty or not set.";
}

// Close the database connection
$conn->close();
?>
