<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($username)) {
        echo 'Please enter Username';
    } elseif (empty($email)) {
        echo 'Please enter Email';
    } elseif (empty($password)) {
        echo 'Please enter Password';
    } else {
        echo 'Success';
    }
}
