<?php

include "db_conn.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sql = "INSERT INTO users (name, username, password) VALUES ({$_POST['name']}, {$_POST['username']}, {$_POST['password']})";

    if ($conn->query($sql)) {
        echo "Success!";
    } else {
        echo "Error: " . $sql . $conn->error;
    }
} else {
    echo http_response_code(405);
    echo "Invalid Request";
}
