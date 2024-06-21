<?php
session_start();
require '../config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Siapkan pernyataan select
    $sql = "SELECT username, password FROM data_users WHERE username = ?";
    if ($stmt = $conn->prepare($sql)) {
        // Bind variabel ke pernyataan yang disiapkan sebagai parameter
        $stmt->bind_param("s", $username);
        
        // Coba jalankan pernyataan yang disiapkan
        if ($stmt->execute()) {
            // Simpan hasil
            $stmt->store_result();
            
            // Periksa apakah username ada, jika ya maka verifikasi password
            if ($stmt->num_rows == 1) {
                // Bind variabel hasil
                $stmt->bind_result( $db_username, $hashed_password);
                if ($stmt->fetch()) {
                    if (password_verify($password, $hashed_password)) {
                        // Password benar, mulai sesi baru
                        session_start();
                        
                        // Simpan data dalam variabel sesi
                        $_SESSION['loggedin'] = true;
                        $_SESSION['username'] = $db_username;                            
                        
                        // Arahkan pengguna ke halaman yang dilindungi
                        header("location: ../dashboard.php");
                    } else {
                        // Tampilkan pesan error jika password tidak valid
                        echo "Password yang Anda masukkan tidak valid.";
                    }
                }
            } else {
                // Tampilkan pesan error jika username tidak ada
                echo "Tidak ada akun yang ditemukan dengan username tersebut.";
            }
        } else {
            echo "Oops! Terjadi kesalahan. Silakan coba lagi nanti.";
        }

        // Tutup pernyataan
        $stmt->close();
    }
}

// Tutup koneksi
$conn->close();
?>
