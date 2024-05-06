<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo ($_POST['username']);
} else {
    echo http_response_code(405);
    echo "Invalid Request";
}
