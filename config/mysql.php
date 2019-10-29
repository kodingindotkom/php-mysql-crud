<?php

$host = "localhost";
$username = "root";
$password = "DIDIKprabowo_1995";
$database = "blog_php_mysql";

$mysqli = new mysqli($host, $username, $password, $database);

if ($mysqli === false) {
    die("Maaf, Gagal Konek ke Database" .  $mysqli->connect_error);
}
