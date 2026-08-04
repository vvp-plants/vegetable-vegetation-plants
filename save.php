<?php
// Get form data
$name = $_POST['name'];
$email = $_POST['email'];

// File path (creates file if it doesn't exist)
$file = "data.csv";

// Open file for appending
$handle = fopen($file, "a");

// Write data as a new row
fputcsv($handle, [$name, $email, date("Y-m-d H:i:s")]);

// Close file
fclose($handle);

// Confirmation message
echo "Your information has been saved!";
?>
