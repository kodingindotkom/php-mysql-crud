<?php
include "config/mysql.php";
$id = $_GET['id'];
$sql = "SELECT * FROM posts where id = " . $id;

$result = $result = $mysqli->query($sql);
$data = $result->fetch_array();

if ($result->num_rows < 1) {
    die("data tidak tersedia");
    return;
}
?>
<h1>Update Data Selected </h1>
<form action="update_posts.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $data['id']; ?>" required>
    <p>Title</p>
    <input type="text" name="title" placeholder="Masukkan Title" value="<?php echo $data['title']; ?>" required>
    <p>Body</p>
    <textarea name="body" id="" cols="30" rows="6" placeholder="Enter Body" required><?php echo $data['body']; ?></textarea>
    <p>Tags</p>
    <input type="text" name="tags" placeholder="Masukkan Tag" required value="<?php echo $data['tags']; ?>">
    <br><br>
    <input type="Submit" value="Perbarui">
</form>