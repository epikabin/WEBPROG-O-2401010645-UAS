<?php
include "config.php";

$result = $conn->query("SELECT * FROM barang ORDER BY id_barang DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h2>Daftar Barang</h2>

<a href="create.php" class="btn btn-primary mb-3">Tambah Barang Baru</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>deskripsi</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no=1;
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$no++."</td>";
            echo "<td>".$row['nama_barang']."</td>";
            echo "<td>".$row['deskripsi']."</td>";
            echo "<td>".$row['harga']."</td>";
            echo "<td>".$row['stok']."</td>";
            echo "<td>
                    <a href='edit.php?id=".$row['id_barang']."' class='btn btn-warning btn-sm'>Edit</a>
                    <a href='delete.php?id=".$row['id_barang']."' onclick='return confirm(\"Yakin ingin hapus?\")' class='btn btn-danger btn-sm'>Delete</a>
                  </td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

</body>
</html>
<?php