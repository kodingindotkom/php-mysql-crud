<?php
include "config/mysql.php";

$id = $_GET['id'];

$sql = "DELETE FROM posts WHERE id='$id'";
if ($mysqli->query($sql) === true) {
    header("location: index.php?page=posts");
} else {
    echo "Gagal menghapus data";
}

$mysqli->close();
