<?php

$servername = "172.16.101.54";
$username = "mexicox";
$password = "mexicox";
$dbname = "mexicox";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

for ($index = 5; $index < 1614; $index++) {
    $sql = "UPDATE constancias SET enviado='1' WHERE periodo = '2015-09-21' and curso = 'UPEV_IPN/02/2015' and id=" . $index;
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$conn->close();
