<?php include 'db.php'; ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Menangkap data dari form
    $nama     = $_POST['nama'];
    $email    = $_POST['email'];
    $telepon  = $_POST['telepon'];
    $alamat   = $_POST['alamat'];

    // Menyimpan data ke database
    $sql = "INSERT INTO siswa (nama, email, telepon, alamat)
            VALUES ('$nama', '$email', '$telepon', '$alamat')";

    if (mysqli_query($conn, $sql)) {
        // Redirect ke halaman terima kasih setelah sukses
        header("Location: hasil.php");
        exit;
    } else {
        // Jika ada error saat insert data
        echo "<p style='color:red;'>Error: " . mysqli_error($conn) . "</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Pendaftaran</title>
    <style>
        body {
            background-color: #ffe6f0;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 500px;
            margin: 100px auto;
            background-color: #ffc0cb;
            padding: 40px;
            text-align: center;
            border-radius: 12px;
            box-shadow: 2px 2px 15px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: white;
            font-size: 28px;
        }

        label {
            font-size: 16px;
            color: white;
            margin-bottom: 5px;
            text-align: left;
            display: block;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 6px;
            border: 1px solid #ccc;
        }

        textarea {
            resize: vertical;
            height: 100px;
        }

        input[type="submit"] {
            background-color: #ff69b4;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
            padding: 12px 25px;
            border-radius: 6px;
        }

        input[type="submit"]:hover {
            background-color: #ff1493;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Form Pendaftaran</h1>
    <form method="POST" action="">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required>

        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="telepon">Telepon:</label>
        <input type="text" name="telepon" required>

        <label for="alamat">Alamat:</label>
        <textarea name="alamat" required></textarea>

        <input type="submit" value="Daftar">
    </form>
</div>

</body>
</html>
