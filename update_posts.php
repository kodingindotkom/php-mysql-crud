<?php
include "config/mysql.php";

$title = $_POST['title'];
$body  = $_POST['body'];
$tags  = $_POST['tags'];

$id = $_POST['id'];

$sql = "UPDATE posts SET title='$title', body = '$body', tags ='$tags' WHERE id= '$id'";

if (mysqli_query($mysqli, $sql)) {
    header("location: index.php?page=posts");
} else {
    echo "Gagal Update Data $sql. " . mysqli_error($mysqli);
}
mysqli_close($link);
