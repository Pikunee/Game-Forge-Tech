<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Update Data Admin</title>
    <link rel="stylesheet" href="styleT.css">
</head>
<body>
<div class="container" style="margin-top: 80px">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    UPDATE DATA ADMIN
                </div>
                <div class="card-body">
                <?php
                    include("koneksi.php");

                    // Periksa apakah parameter ID ada
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];

                        // Ambil data berdasarkan ID
                        $query = mysqli_query($connection, "SELECT * FROM data_admin WHERE id = '$id'");
                        $row = mysqli_fetch_array($query);

                        // Jika data tidak ditemukan, tampilkan pesan error
                        if (!$row) {
                            echo "Data tidak ditemukan!";
                            exit;
                        }
                    } else {
                        echo "ID tidak ditemukan!";
                        exit;
                    }

                    // Proses update data jika form disubmit
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $id = $_POST['id'];
                        $nama = $_POST['nama'];
                        $email = $_POST['email'];
                        $username = $_POST['username'];
                        $password = $_POST['password'];

                        // Validasi data
                        if (empty($nama) || empty($email) || empty($username)) {
                            echo "Nama, Email, dan Username harus diisi!";
                        } else {
                            // Jika password tidak kosong, update juga password
                            if (!empty($password)) {
                                $hashed_password = password_hash($password, PASSWORD_BCRYPT);
                                $query = "UPDATE data_admin SET nama = ?, email = ?, username = ?, password = ? WHERE id = ?";
                                $stmt = $connection->prepare($query);
                                $stmt->bind_param("ssssi", $nama, $email, $username, $hashed_password, $id);
                            } else {
                                // Jika password kosong, jangan update password
                                $query = "UPDATE data_admin SET nama = ?, email = ?, username = ? WHERE id = ?";
                                $stmt = $connection->prepare($query);
                                $stmt->bind_param("sssi", $nama, $email, $username, $id);
                            }

                            try {
                                $stmt->execute();
                                echo "Data berhasil diupdate!";
                                header("Location: data_admin.php");
                                exit;
                            } catch (mysqli_sql_exception $e) {
                                echo "Error: " . $e->getMessage();
                            }

                            $stmt->close();
                            $connection->close();
                        }
                    }
                    ?>

                    <form action="update_dataadmin.php?id=<?php echo $id; ?>" method="POST">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" value="<?php echo $row['nama']; ?>" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" value="<?php echo $row['email']; ?>" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" value="<?php echo $row['username']; ?>" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>Password (Kosongkan jika tidak ingin mengubah)</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        
                        <button type="submit" class="btn btn-success">UPDATE</button>
                        <a href="data_admin.php" class="btn btn-secondary">BATAL</a>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
