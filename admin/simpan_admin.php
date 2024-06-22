<?php
require 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    // Validasi data
    if (empty($nama) || empty($email) || empty($username) || empty($password)) {
        echo "Semua field harus diisi!";
    } else {
        $sql = "INSERT INTO data_admin (nama, email, username, password) VALUES (?, ?, ?, ?)";
        $stmt = $connection->prepare($sql);
        $stmt->bind_param("ssss", $nama, $email, $username, $password);

        if ($stmt->execute()) {
            header("Location: data_admin.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $connection->error;
        }

        $stmt->close();
        $connection->close();
    }
}
?>
