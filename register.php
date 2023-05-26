<?php
require_once "./conf/database.php";

if (isset($_POST["signin"])) {

    if (!empty($_POST["user_name"]) AND !empty($_POST["user_nickname"]) AND !empty($_POST["user_mail"]) AND !empty($_POST["user_password"]) AND !empty($_POST["user_picture"])) {
        $user_name = htmlspecialchars($_POST["user_name"]);
        $user_nickname = htmlspecialchars($_POST["user_nickname"]);
        $user_mail = htmlspecialchars($_POST["user_mail"]);
        $user_password = sha1($_POST["user_password"]);
        $user_picture = htmlspecialchars($_POST["user_picture"]);
        
        $data = [$user_name, $user_nickname, $user_mail, $user_password, $user_picture];
    
        $user_insert = $database->prepare("INSERT INTO user(user_name, user_nickname, user_mail, user_password, user_picture)VALUES(?, ?, ?, ?, ?)");
        $user_insert->execute($data);
    
        $last_id = $database->lastInsertId();
    
        $_SESSION["user_id"] = $last_id;
        header("Location: home.php");
        die();
    }
    else {
        echo "Veuillez remplir tous les champs";
        die();
    }
}

require_once "./templates/register.template.php";