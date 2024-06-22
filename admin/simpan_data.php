<?php
include("koneksi.php");

// Periksa apakah formulir telah dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data formulir
    $id = $_POST['id'];
    $nick = $_POST['nick'];
    $no_hp = $_POST['no_hp'];
    $email = $_POST['email'];

    // Validasi data formulir
    // if (empty($id_game) || empty($nick) || empty($no_hp) || empty($email)) {
    //     echo "Semua field harus diisi!";
    //     exit;
    // }

    // Masukkan data ke database
    $query = "INSERT INTO kostumer (id, nick, no_hp, email) VALUES (?, ?, ?, ?)";
    $stmt = $connection->prepare($query);
    $stmt->bind_param("ssss", $id, $nick, $no_hp, $email);

    try {
        $stmt->execute();
        // Jika berhasil, arahkan ke manajemen_kostumer.php
        header("Location: manajemen_kostumer.php");
        exit;
    } catch (mysqli_sql_exception $e) {
        echo "Error: " . $e->getMessage();
    }

    $stmt->close();
    $connection->close();
} else {
    echo "Metode permintaan tidak valid!";
}
?>
