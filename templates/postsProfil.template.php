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

            if ($USER["user_nickname"]): {
                    $userNickname = $USER["user_nickname"];

                    if ($user["user_nickname"] === $userNickname) {
                        echo "<div class='ProfilPosts'><h2 class='User'>@" . $user["user_nickname"] . "</h2>";
                        echo "<h3 class='PostContent'>" . $post["post_content"] . "</h3>";
                        if ($post["post_image_url"]):
                            ?>
                            <img src="uploads/<?php echo $post["post_image_url"]; ?>" alt="image du post" width="200px">
                            <?php
                        endif;
                        echo "<p class='PostContent'>Post publié le " . date("d/m/Y", strtotime($post["post_date"])) . " à " . date("H:i", strtotime($post["post_date"])) . "</p>";
                        ?>
                        <button class="deleteButton">Supprimer</button>
                        <section class="delete">
                            <form action="delete.php" method="POST">
                                <input type="hidden" name="form" value="formulaire_suppression_post">
                                <input type="hidden" name="post_id" value="<?= $post["post_id"] ?>">
                                <button class="confirmDelete" type="submit">Oui</button>
                                <span class="cancelDelete">Non</span>
                            </form>
                        </section>
                        <?php
                        echo "</div>";
                    }
                }
            endif;
        }
        ?>
    </div>
</section>