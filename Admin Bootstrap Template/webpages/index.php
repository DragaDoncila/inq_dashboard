<?php
/**
 * Created by PhpStorm.
 * User: donald
 * Date: 29/11/2016
 * Time: 2:55 PM
 */
//include "login.html";

if (!isset($_REQUEST['name'])) {
    include 'register.html.php';
}
if(isset($_POST["username"], $_POST["password"])) {

    $name = $_POST["username"];
    $password = $_POST["password"];

    $result1 = mysqli_query("SELECT username, password FROM users WHERE username = '" . $name . "' AND  password = '" . $password . "'");

    while ($row = mysqli_fetch_assoc($result1)) {
        $check_username = $row['username'];
        $check_password = $row['password'];
    }

    if ($username == $check_username && $password == $check_password) {
        echo "Matches.";
    } else {
        echo "No match.";
    }
}
    ?>