<?php
$servername = "127.0.0.1";
$username = "root";
$password = "205891799#La";
$dbname = "team4play";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO player (ID, userName, FirstName, LastName, Password, Email, phoneNum, Age, Gender)
VALUES (ID, Uname, fname, Lname, Password, Email, phoneN, age, gender)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>