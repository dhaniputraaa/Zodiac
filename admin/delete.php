<?php include "../koneksi.php";
$id = $_GET['id'];
$blog  = $conn->query("select * from post where id='$id'");
$row    = mysqli_fetch_array($blog);
$conn->query("DELETE from Post  WHERE id='$id'");
header("location: index.php");
?>



