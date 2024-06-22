<?php
include('koneksi.php');
//get id
$id = $_GET['id'];
$query = "DELETE FROM kostumer WHERE id = '$id'";
if($connection->query($query)) {
    header("location: manajemen_kostumer.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>
