<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Employee Information</title>
<style>
body {
font-family: Arial, sans-serif;
background-color: #f0f0f0;
}
.container {
max-width: 800px;
margin: 20px auto;
padding: 20px;
background-color: #fff;
border-radius: 8px;
box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
table {
width: 100%;
border-collapse: collapse;
border: 1px solid #ddd;
border-radius: 8px;
overflow: hidden;
}
th, td {
padding: 12px;
text-align: left;
border-bottom: 1px solid #ddd;
}
th {
background-color: #f2f2f2;
}
tr:hover {
background-color: #f5f5f5;
}
.btn {
background-color: #4CAF50;
color: white;
padding: 10px 20px;
border: none;
border-radius: 4px;
cursor: pointer;
text-decoration: none;
display: inline-block;
transition: background-color 0.3s;
}
btn:hover {
background-color: #45a049;
}
</style>
</head>
<body>
<div class="container">
<?php
include 'db_config.php';
$sql = "SELECT * FROM emp";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
echo "<table><tr><th>ID</th><th>Name</th><th>Email</th></tr>"; 
while($row = $result->fetch_assoc()) {
echo
"<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["email"]."</td>
</tr>";
}
echo "</table>";
} else {
echo "0 results";
}
$conn->close();
?>
</div>
</body>
</html>