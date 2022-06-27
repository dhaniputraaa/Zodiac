<?php
session_start();
if($_SESSION['username']) {
} else {
    header("Location: login.php");
}
?>

<?php include "header.php";
 
if(isset($_POST["submit"]) && $_POST["submit"] == 'update')

if($_POST["submit"] == 'update'){
   $target_dir = "../uploads/";
   $target_file = $target_dir . basename($_FILES["image"]["name"]);
   move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
   $title = $_POST['title'];
   $image = $_FILES["image"]["name"];
   $id = $_POST['id'];
   $content = $_POST['content'];
   $conn->query("UPDATE post set title='$title', content='$content', image='$image' WHERE id='$id'");
}

if(isset($_POST["ngapain"]) && $_POST["ngapain"] == 'insert') {
   $target_dir = "../uploads/";
   $target_file = $target_dir . basename($_FILES["image"]["name"]);
   move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
   $title = $_POST['title'];
   $content = $_POST["content"];
   $image = $_FILES["image"]["name"];
   $conn->query("INSERT INTO Post set title='$title', content='$content', image='$image'");
}

$posts = $conn->query("SELECT * FROM Post");
?>
   <a href="logout.php">Logout</br></br>
   <a href="insert.php">Buat artikel</a>
<?php
while($post = $posts->fetch_object()) {
 ?>
 
   <div class="../card">
      <a href="../post.php?id=<?php echo $post->id ?>"><h2><?php echo $post->title; ?></h2>
      <h5><?php echo $post->createdAt; ?></h5>
      <img src ="../uploads/<?php echo $post->image ?>"width= "50%"></a><br>
      <a href="update.php?id=<?php echo $post->id ?>">Edit</a>
      <a href="delete.php?delete=artikel&id=<?php echo $post->id ?>">delete</a>
   </div>
   <?php
}
?>
<?php include "footer.php" ?>