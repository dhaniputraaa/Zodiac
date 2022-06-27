<?php include "header.php";
$id    = $_GET['id'];
$blog  = $conn->query("SELECT * FROM post where id='$id'");
$row   = mysqli_fetch_array($blog);
?>
<div class="card3">
<h1>Edit Content</h1>
<form action="index.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="submit" value="update">
    <input type="hidden" value="<?php echo $row['id'];?>" name="id">
    <label for="title">Ganti judul artikel:</label><br>
    <input type="hidden"name="submit" value="update">
    <input type="text"placeholder="<?php echo $row['title'];?>" name="title"><br><br>
    <input type="file" name="image"><br><br>
    <label for="content">Ganti deskripsi:</label></br>
    <textarea name="content" placeholder="<?php echo $row['content'];?>" rows="20" cols="65"></textarea><br>
    <button type="submit">Kirim</button>
</form>
<br>
    <a href="index.php">Kembali</a>
</div>

<?php include "../footer.php"?>
