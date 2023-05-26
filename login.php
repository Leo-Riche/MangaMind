<?php
require_once "./conf/database.php";

if (isset($_POST["login"])) {
    if (!empty($_POST["user_name"]) and !empty($_POST["user_password"])) {
        $user_name = htmlspecialchars($_POST["user_name"]);
        $user_password = sha1($_POST["user_password"]);
        $data = [$user_name, $user_password];

        $user_insert = $database->prepare("SELECT * FROM user WHERE user_name = ? AND user_password = ?");
        $user_insert->execute($data);

        if ($user_insert->rowCount() === 0) {
            echo "Votre nom d'utilisateur et/ou mot de passe est/sont incorrect(s).";
            die();
        }

        $_SESSION["user_id"] = $user_insert->fetch()["user_id"];
        header("Location: ./home.php");
        die();
    } else {
        echo "Veuillez compléter tous les champs...";
        die();
    }
}

require_once "./templates/login.template.php";