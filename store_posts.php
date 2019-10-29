<?php
include "config/mysql.php";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $title = $_POST['title'];
    $body  = $_POST['body'];
    $tags  = $_POST['tags'];

    $sql = "INSERT INTO posts (title, body, tags) VALUES ('$title', '$body', '$tags')";

    $save = mysqli_query($mysqli, $sql);

    if ($save) {
        header("location: index.php?page=posts");
        exit();
    } else {
        echo "Gagal Input Data.";
    }
}
