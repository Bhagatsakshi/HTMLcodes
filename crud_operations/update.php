<?php
include 'db_config.php';
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$sql = "UPDATE emp SET name='$name', email='$email' WHERE id=$id";
if ($conn->query($sql) === TRUE) {
echo "Record updated successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>