<?php
include 'db.php';
$sql = "SELECT * FROM siswa";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Pendaftar</title>
    <style>
        body {
            background-color: #ffe6f0;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 50px auto;
            background-color: #ffc0cb;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 2px 2px 10px #aaa;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ff69b4;
        }

        th, td {
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #ff69b4;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        a {
            background-color: #ff69b4;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 6px;
            margin-top: 20px;
            display: inline-block;
        }

        a:hover {
            background-color: #ff1493;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Data Pendaftar</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Telepon</th>
            <th>Alamat</th>
        </tr>

        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['telepon']; ?></td>
                <td><?php echo $row['alamat']; ?></td>
            </tr>
        <?php } ?>
    </table>

    <a href="form.php">Tambah Pendaftar</a>
</div>

</body>
</html>
