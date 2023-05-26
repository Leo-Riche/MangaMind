<?php
require_once "conf/database.php";
require_once "conf/session.php";

$request = $database->prepare("SELECT * FROM post ORDER BY post_date DESC");
$request->execute();
$posts = $request->fetchAll(PDO::FETCH_ASSOC);

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  if (!empty($_GET["recherche"])) {
    $data = [
      "recherche" => "%" . $_GET["recherche"] . "%",
    ];

    $request_search = $database->prepare("SELECT * FROM post WHERE post_content LIKE :recherche");
    $request_search->execute($data);
    $posts = $request_search->fetchAll(PDO::FETCH_ASSOC);
  }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST["form"]) && $_POST["form"] === "formulaire_ajout_post") {
    if (!empty($_POST["post_content"])) {
      $post_author_id = $_POST["post_author_id"];
      $post_content = $_POST["post_content"];
      $post_image_url = $_FILES["post_image_url"]["name"];
      $post_tag = $_POST["post_tag"];

      $data = [
        "post_author_id" => $post_author_id,
        "post_content" => $post_content,
        "post_image_url" => $post_image_url,
        "post_tag" => $post_tag,
      ];

      $image_name = $_FILES["post_image_url"]["name"];
      $temporary_image_name = $_FILES["post_image_url"]["tmp_name"];
      $upload_image = "uploads/";
      move_uploaded_file($temporary_image_name, $upload_image . $image_name);

      $request_insert = $database->prepare("INSERT INTO post (post_author_id, post_content, post_date, post_image_url, post_tag) VALUES (:post_author_id, :post_content, NOW(), :post_image_url, :post_tag)");
      $post_inserted = $request_insert->execute($data);
      header('Location: ./home.php');
    }
  }
}