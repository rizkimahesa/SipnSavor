<?php
include 'conn.php';

$id = $_GET['id'];
$sql = "DELETE FROM produk WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: produk-read.php");
    exit();
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
