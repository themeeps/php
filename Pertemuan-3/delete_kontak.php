<?php 
//1. Koneksi
include ("koneksi.php");

$id = $_GET['id'];

//2. Query 
$query = "DELETE FROM kontak
		  WHERE id=$id";

mysqli_query($db, $query);

header('Location: kontak.php');