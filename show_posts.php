<?php

include "config/mysql.php";
echo "<h3>Daftar Post </h3>";
echo "<a href='index.php?page=create_posts'>Create New Posts</a><br><br>";
$sql = "SELECT * FROM posts";
if ($result = $mysqli->query($sql)) {
    if ($result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr>";
        echo "<th>id</th>";
        echo "<th>Title</th>";
        echo "<th>Body</th>";
        echo "<th>Tags</th>";
        echo "<th>Action</th>";
        echo "</tr>";
        while ($row = $result->fetch_array()) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['title'] . "</td>";
            echo "<td>" . $row['body'] . "</td>";
            echo "<td>" . $row['tags'] . "</td>";
            echo "<td><a href='index.php?page=edit_posts&id=" . $row['id'] . "'>Edit</a> | <a href='delete_posts.php?id=" . $row['id'] . "'>Delete</a></td>";
            echo "</tr>";
        }
        echo "</table>";
        $result->free();
    } else {
        echo "Data tidak tersedia.";
    }
} else {
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}

$mysqli->close();
