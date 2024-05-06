<?php

include "db_conn.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sql = "SELECT * FROM users WHERE username = '{$_POST['username']}' ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        if ($user['password'] !== $_POST['password']) {
            echo "Wrong password";
            exit();
        }

        $_SESSION['username'] = $user['username'];
        $_SESSION['online'] = true;

        $htmlContent = '<div class="default-margin">Welcome to Dashboard</div>';

        header('Content-Type: text/html');
        echo $htmlContent;
        exit();
    } else {
        echo "user not found";
    }
} else {
    echo http_response_code(405);
    echo "Error";
}
