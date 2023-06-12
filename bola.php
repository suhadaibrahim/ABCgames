<?php
// Connect to MySQL database
$host = 'localhost';
$user = 'username';
$password = "";
$database = 'abc';

$conn = mysqli_connect($host, $user, $password, $database);
if (!$conn) {
  die('Connection failed: ' . mysqli_connect_error());
}

// Get form data
$selected_object = $_POST['object'];
$is_true = 'Salah!';
if ($selected_object === 'object3') {
  $is_true = 'Betul!';
}

// Insert form data into database
$sql = "INSERT INTO testtable (selected_object, is_true) VALUES ('$selected_object', '$is_true')";
if (mysqli_query($conn, $sql)) {
  echo 'Data inserted successfully';
} else {
  echo 'Error inserting data: ' . mysqli_error($conn);
}

// Close database connection
mysqli_close($conn);
?>
