<?php
include('koneksi.php');
//get id
$id = $_GET['id'];
$query = "DELETE FROM data_admin WHERE id = '$id'";
if($connection->query($query)) {
    header("location: data_admin.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>
