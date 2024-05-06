<?php

include "db_conn.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (name, username, password) VALUES ('$name', '$username', '$password')";

    if ($conn->query($sql)) {
        echo "Success!";
    } else {
        echo $conn->errno;
    }
} else {
    echo http_response_code(405);
    echo "Invalid Request";
}
