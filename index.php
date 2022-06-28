

<?php include "header.php";
 
$posts = $conn->query("SELECT * FROM Post");
 
while($post = $posts->fetch_object()) {
 ?>
   <div class="card">
   <div style="max-width: 900px;">
   <a href="post.php?id=<?php echo $post->id ?>"><h2><?php echo $post->title; ?></h2>
       <img src ="uploads/<?php echo $post->image ?>"width= "100%" height="100%" style="border-radius: 45%;">  
    </a>
   </div>
   </div>
   <?php
}
?>
<?php include "footer.php" ?>