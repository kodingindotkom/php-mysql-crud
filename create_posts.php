<h1>Create A New Post</h1>
<form action="store_posts.php" method="POST">
    <p>Title</p>
    <input type="text" name="title" placeholder="Masukkan Title" required>
    <p>Body</p>
    <textarea name="body" id="" cols="30" rows="6" placeholder="Enter Body" required></textarea>
    <p>Tags</p>
    <input type="text" name="tags" placeholder="Masukkan Tag" required>
    <br><br>
    <input type="Submit" value="Simpan">
</form>