<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Tambah</title>
    <link rel="stylesheet" href="styleT.css">
</head>
<body>
<div class="container" style="margin-top: 80px">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    TAMBAH DATA 
                </div>
                <div class="card-body">
                    <form action="simpan_data.php" method="POST">
                        <div class="form-group">
                            <label>Id</label>
                            <input type="text" name="id" placeholder="Masukkan id" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Nick</label>
                            <input type="text" name="nick" placeholder="Masukkan Nick" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>No Handphone</label>
                            <input type="text" name="no_hp" placeholder="Masukkan Nomor Handphone" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" placeholder="Masukkan Email" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-success">SIMPAN</button>
                        <button type="reset" class="btn btn-warning">RESET</button>
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
