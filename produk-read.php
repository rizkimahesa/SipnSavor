<?php
include 'conn.php';

$sql = "SELECT * FROM produk";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekomendasi Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Daftar Menu</h2>
    <div class="d-flex justify-content-end mb-3">
        <a href="produk-add.php" class="btn btn-primary mb-3">Tambah Menu</a>
    </div>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        <?php
        if ($result->num_rows > 0) {
            $counter = 1;
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$counter}</td>
                        <td>{$row['name']}</td>
                        <td>Rp. {$row['price']}</td>
                        <td><img src='res/menu/{$row['image']}' alt='{$row['name']}' width='100'></td>
                        <td>
                            <a href='produk-edit.php?id={$row['id']}' class='btn btn-warning'>Edit</a>
                            <a href='produk-delete.php?id={$row['id']}' class='btn btn-danger'>Delete</a>
                        </td>
                      </tr>";
                $counter++;
            }
        } else {
            echo "<tr><td colspan='5'>Belum ada menu yang terdaftar!</td></tr>";
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>

<?php
$conn->close();
?>
