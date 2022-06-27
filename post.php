<?php include "header.php";
 
$id = $_GET["id"];
$result = $conn->query("SELECT * FROM Post WHERE id=$id");
$post = $result->fetch_object();
?>

<div class="card2">
   <h2><?php echo $post->title ?></h2>
   <p><?php echo $post->createdAt ?></p>
   <div ><img src ="uploads/<?php echo $post->image ?>"width= "70%"></div>
   <p><?php echo $post->content ?></p>
</div>
 
<?php include "footer.php" ?>