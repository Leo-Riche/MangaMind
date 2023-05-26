<form method="POST" enctype="multipart/form-data">
    <img class="CloseButton" src="./images/Close.svg" alt="CloseButton">
    <input type="hidden" name="form" value="formulaire_ajout_post">
    <textarea class="AddNewPost" name="post_content" id="post_content" cols="30" rows="10" required <!--
        placeholder="Partagez vos histoires"></textarea>
    <h3>Choisissez votre tag :</h3>
    <div class="tags">
        <div class="CircleTag">
            <div class="Circles CircleShonen"></div>
            <h5 class="ShonenTag">Shonen</h5>
        </div>
        <div class="CircleTag">
            <div class="Circles CircleShojo"></div>
            <h5 class="ShojoTag">Shojo</h5>
        </div>
        <div class="CircleTag">
            <div class="Circles CircleSeinen"></div>
            <h5 class="SeinenTag">Seinen</h5>
        </div>
        <div class="CircleTag">
            <div class="Circles CircleJosei"></div>
            <h5 class="JoseiTag">Josei</h5>
        </div>
        <div class="CircleTag">
            <div class="Circles CircleNewgen"></div>
            <h5 class="NewgenTag">Newgen</h5>
        </div>
        <div class="CircleTag">
            <div class="Circles CircleOldgen"></div>
            <h5 class="OldgenTag">Oldgen</h5>
        </div>
        <div class="CircleTag">
            <div class="Circles CircleAnime"></div>
            <h5 class="AnimeTag">Anime</h5>
        </div>
        <div>
            <div class="Circles CircleManga"></div>
            <h5 class="MangaTag">Manga</h5>
        </div>
        <div class="CircleTag">
            <div class="Circles CircleNews"></div>
            <h5 class="NewsTag">News</h5>
        </div>
        <div class="CircleTag">
            <div class="Circles CircleElse"></div>
            <h5 class="ElseTag">Else</h5>
        </div>
    </div>
    <select name="post_tag">
        <option value="shonen">Shonen</option>
        <option value="shojo">Shojo</option>
        <option value="seinen">Seinen</option>
        <option value="josei">Josei</option>
        <option value="newgen">Newgen</option>
        <option value="oldgen">Oldgen</option>
        <option value="anime">Anime</option>
        <option value="manga">Manga</option>
        <option value="news">News</option>
        <option value="else">Else</option>
    </select>
    <input type="file" accept="image/png, image/jpeg" name="post_image_url">
    <input type="hidden" name="post_author_id" value="<?php echo $_SESSION['user_id']; ?>">
    <button class="AddPost" type="submit">Partager</button>
</form>