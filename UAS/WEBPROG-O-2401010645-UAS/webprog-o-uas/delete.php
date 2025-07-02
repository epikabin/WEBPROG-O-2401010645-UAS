<?php
include "config.php";

$id = $_GET['id'];

$sql = "DELETE FROM barang WHERE id_barang=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();

header("Location: index.php");
exit;
?>