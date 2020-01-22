<?php
include('functions.php');

// if we're passing in a user key in $_GET superglobal, then go get user

if(isset($_GET["getUser"])) {
    $user = getUser($pdo);

    echo json_encode($user);
}