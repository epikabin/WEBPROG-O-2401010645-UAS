<?php
include "config.php";

$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama_barang'];
    $desc = $_POST['deskripsi'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    $sql = "UPDATE barang SET nama_barang=?, deskripsi=?, harga=?, stok=? WHERE id_barang=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssdii", $nama, $desc, $harga, $stok, $id);
    $stmt->execute();

    header("Location: index.php");
    exit;
}

$sql = "SELECT * FROM barang WHERE id_barang=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$barang = $result->fetch_assoc();

if (!$barang) {
    echo "Data tidak ditemukan!";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h2>Edit Barang</h2>

<form method="post" action="">
    <div class="mb-3">
        <label>Nama Barang</label>
        <input type="text" name="nama_barang" class="form-control" required value="<?=htmlspecialchars($barang['nama_barang'])?>">
    </div>
    <div class="mb-3">
        <label>deskripsi</label>
        <textarea name="deskripsi" class="form-control" required><?=htmlspecialchars($barang['deskripsi'])?></textarea>
    </div>
    <div class="mb-3">
        <label>Harga</label>
        <input type="number" step="0.01" name="harga" class="form-control" required value="<?=$barang['harga']?>">
    </div>
    <div class="mb-3">
        <label>Stok</label>
        <input type="number" name="stok" class="form-control" required value="<?=$barang['stok']?>">
    </div>
    <button type="submit" class="btn btn-success">Update</button>
    <a href="index.php" class="btn btn-secondary">Batal</a>
</form>

</body>
</html>
