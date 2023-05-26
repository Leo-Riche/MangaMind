<?php
require_once "./index.php";

if (!$USER): {
        header('Location: home.php');
        exit;
    }
else:
    $data = ["user_id" => $_SESSION["user_id"]];

    $userRequest = $database->prepare("SELECT user_name, user_nickname, user_picture FROM user WHERE user_id = :user_id");

    $userRequest->execute($data);
    $USER = $userRequest->fetch(PDO::FETCH_ASSOC);
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Manga Mind Profil</title>
        <link rel="stylesheet" href="css/style.css">
        <script src="js/sidebar.js" defer></script>
        <script src="./js/deleteButton.js" defer></script>
    </head>

    <body>
        <?php require_once "./conf/database.php"; ?>
        <header>
            <img class="ProfilPicture" src="./images/PPLeo.png" alt="Photo de profil Clubs">
            <h1 class="TitleMangaMind">Manga Mind</h1>
            <section class="Menu">
                <div class="Bars">
                    <div class="bar bar1"></div>
                    <div class="bar bar2"></div>
                    <div class="bar bar3"></div>
                </div>
            </section>
        </header>
        <section class="Sidebar Slide">
            <a href="home.php">
                <h3 class="ElementSidebar">Accueil</h3>
            </a>
            <a href="profil.php">
                <h3 class="ElementSidebar">Profil</h3>
            </a>
            <a href="logout.php">
                <h3 class="ElementSidebar" class="LogoutSidebar">Se déconnecter</h3>
            </a>
        </section>
        <section class="UserProfilArea">
            <div class="UserProfil">
                <?php
                echo "<h2 class='User'>@" . $USER["user_nickname"] . "</h2>";
                ?>
            </div>
        </section>
        <div class="HorizontalBar"></div>
        <section class="PostArea">
            <?php require_once('./templates/postsProfil.template.php'); ?>
        </section>
    </body>

    </html>
<?php endif; ?>