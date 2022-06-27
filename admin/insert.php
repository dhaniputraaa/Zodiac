<?php
include "header.php";
?>
   <div class="card3">
       <h1>Artikel baru</h1>
       <form action="index.php" method="post" enctype="multipart/form-data">
           <input type="hidden" name="ngapain" value="insert">
           <label for="title">Masukkan judul artikel:</label><br>
           <input type="text" name="title"><br><br>
           <input type="file" name="image"><br><br>
           <label for="content">Masukkan deskripsi:</label></br>
           <textarea name="content" rows="20" cols="65"></textarea><br>
           <button type="submit" style="color:blue;">Upload</button>
       </form>
       <br>
       <a href="index.php">Kembali</a>
   </div>
           
<?php include "../footer.php" ?>
