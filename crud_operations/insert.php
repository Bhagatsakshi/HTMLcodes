<?php
include 'db_config.php';
$name = $_POST['name'];
$email = $_POST['email'];
$sql = "INSERT INTO emp (name, email) VALUES ('$name', '$email')";
if ($conn->query($sql) === TRUE) {
echo "Record inserted successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
