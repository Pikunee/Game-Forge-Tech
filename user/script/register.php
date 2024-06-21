<?php
require '../config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    // Periksa apakah username atau email sudah ada
    $sql = "SELECT username FROM data_users WHERE username = ? OR email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        echo "Username atau Email sudah terdaftar. Silakan pilih yang lain.";
    } else {
        // Masukkan pengguna baru ke database
        $sql = "INSERT INTO data_users (username, email, password) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $username, $email, $password);

        if ($stmt->execute()) {
            header("Location: ../signin.php");
            exit();
        } else {
            echo "Terjadi kesalahan. Silakan coba lagi nanti.";
        }
    }

    $stmt->close();
    $conn->close();
}
?>
