<?php include "../koneksi.php";
$id = $_GET['id'];
$conn->query("DELETE from Post  WHERE id='$id'");
header("location: index.php");
?>



