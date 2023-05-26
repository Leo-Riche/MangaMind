<?php
if (isset($_SESSION["user_id"])) {
    $data = ["user_id" => $_SESSION["user_id"]];

    $userRequest = $database->prepare("SELECT user_name, user_nickname, user_picture FROM user WHERE user_id = :user_id");

    $userRequest->execute($data);
    $USER = $userRequest->fetch(PDO::FETCH_ASSOC);
} else {
    $USER = null;
}