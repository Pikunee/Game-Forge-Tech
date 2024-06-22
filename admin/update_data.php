<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Update</title>
    <link rel="stylesheet" href="styleT.css">
</head>
<body>
<div class="container" style="margin-top: 80px">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    UPDATE DATA
                </div>
                <div class="card-body">
                <?php
                    include("koneksi.php");

                    // Periksa apakah parameter ID ada
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];

                        // Ambil data berdasarkan ID
                        $query = mysqli_query($connection, "SELECT * FROM kostumer WHERE id = '$id'");
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
                        $nick = $_POST['nick'];
                        $no_hp = $_POST['no_hp'];
                        $email = $_POST['email'];

                        // Validasi data
                        if (empty($nick) || empty($no_hp) || empty($email)) {
                            echo "Semua field harus diisi!";
                        } else {
                            // Update data di database
                            $query = "UPDATE kostumer SET nick = ?, no_hp = ?, email = ? WHERE id = ?";
                            $stmt = $connection->prepare($query);
                            $stmt->bind_param("sssi", $nick, $no_hp, $email, $id);

                            try {
                                $stmt->execute();
                                echo "Data berhasil diupdate!";
                                header("Location: manajemen_kostumer.php");
                                exit;
                            } catch (mysqli_sql_exception $e) {
                                echo "Error: " . $e->getMessage();
                            }

                            $stmt->close();
                            $connection->close();
                        }
                    }
                    ?>

                    <form action="update_data.php?id=<?php echo $id; ?>" method="POST">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        
                        <div class="form-group">
                            <label>Nick</label>
                            <input type="text" name="nick" value="<?php echo $row['nick']; ?>" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>No Handphone</label>
                            <input type="text" name="no_hp" value="<?php echo $row['no_hp']; ?>" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" value="<?php echo $row['email']; ?>" class="form-control">
                        </div>
                        
                        <button type="submit" class="btn btn-success">UPDATE</button>
                        <a href="manajemen_kostumer.php" class="btn btn-secondary">BATAL</a>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
