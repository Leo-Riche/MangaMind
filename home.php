<?php require_once "./index.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manga Mind Home</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="./js/sidebar.js" defer></script>
    <script src="./js/modal.js" defer></script>
    <script src="./js/filterTag.js" defer></script>
</head>

<body>
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
        <?php if (isset($_SESSION['user_id'])) { ?>
            <a href="profil.php">
                <h3 class="ElementSidebar">Profil</h3>
            </a>
            <a href="logout.php">
                <h3 class="ElementSidebar" class="LogoutSidebar">Se déconnecter</h3>
            </a>
            <?php
        } else { ?>
            <a href="login.php">
                <h3 class="ElementSidebar">Se connecter</h3>
            </a>
            <a href="register.php">
                <h3 class="ElementSidebar">S'inscrire</h3>
            </a>
        <?php } ?>
    </section>
    <div class="tags">
        <h5 class="buttonTag tag1">shonen</h5>
        <h5 class="buttonTag tag2">shojo</h5>
        <h5 class="buttonTag tag3">seinen</h5>
        <h5 class="buttonTag tag4">josei</h5>
        <h5 class="buttonTag tag5">newgen</h5>
        <h5 class="buttonTag tag6">oldgen</h5>
        <h5 class="buttonTag tag7">anime</h5>
        <h5 class="buttonTag tag8">manga</h5>
        <h5 class="buttonTag tag9">news</h5>
        <h5 class="buttonTag tag10">else</h5>
    </div>
    <div class="Search">
        <form method="get">
            <input class="searchBar" type="text" name="recherche" id="recherche" placeholder="Recherche">
        </form>
    </div>
    <section class="HomeArea">
        <div class="heighter"></div>
        <div class="signUp" id="SignUp">
            <div class="signUpBack"></div>
            <div class="signUpContainer">
                <a class="login" href="./login.php">Se connecter</a>
                <br>
                <a href="#" id="SignUpClose">Fermer</a>
            </div>
        </div>
        <section class="Post">
            <div class="News">
                <?php
                foreach ($posts as $post) {
                    $data = [
                        "post_author_id" => $post["post_author_id"]
                    ];

                    $request_user = $database->prepare("SELECT user_nickname FROM user WHERE user_id = :post_author_id");
                    $request_user->execute($data);
                    $user = $request_user->fetch(PDO::FETCH_ASSOC);
                    echo "<div class='ProfilPosts $post[post_tag]'><h2 class='User'>@" . $user["user_nickname"] . "</h2>";
                    echo "<h3 class='PostContent'>" . $post["post_content"] . "</h3>";
                    if ($post["post_image_url"]):
                        ?>
                        <img src="uploads/<?php echo $post["post_image_url"]; ?>" alt="image du post" width="200px">
                        <?php
                    endif;
                    echo "<p class='PostContent'>Post publié le " . date("d/m/Y", strtotime($post["post_date"])) . " à " . date("H:i", strtotime($post["post_date"])) . "</p></div>";
                }
                ?>
            </div>
        </section>
        <?php if (isset($_SESSION['user_id'])) { ?>
            <img class="ButtonNewPost" src="./images/plus.svg" alt="Bouton Nouveau Post">
            <section class="NewPost">
                <?php require_once "./templates/modal.template.php" ?>
            </section>
        <?php } ?>
    </section>
    <?php if (!isset($_SESSION['user_id'])) { ?>
        <script src="./js/signup.js" defer></script>
    <?php } ?>
</body>

</html>