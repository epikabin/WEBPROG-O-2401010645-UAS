<!DOCTYPE html>
<html>
<head>
    <title>Tambah Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h2>Tambah Barang Baru</h2>

<form method="post" action="">
    <div class="mb-3">
        <label>Nama Barang</label>
        <input type="text" name="nama_barang" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>deskripsi</label>
        <textarea name="deskripsi" class="form-control" required></textarea>
    </div>
    <div class="mb-3">
        <label>Harga</label>
        <input type="number" step="0.01" name="harga" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Stok</label>
        <input type="number" name="stok" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
    <a href="index.php" class="btn btn-secondary">Batal</a>
</form>

</body>
</html>
 