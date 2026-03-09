<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "website_db";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $judul_masalah = mysqli_real_escape_string($conn, $_POST['judul_masalah']);
    $commentar = mysqli_real_escape_string($conn, $_POST['commentar']);
    $nama_pengguna = mysqli_real_escape_string($conn, $_POST['nama_pengguna']);

    $query = "INSERT INTO posts (judul_masalah, commentar, nama_pengguna) VALUES ('$judul_masalah', '$commentar', '$nama_pengguna')";

    if ($conn->query($query) === TRUE) {
        header("Location: {$_SERVER['HTTP_REFERER']}");
        exit();
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
    $conn->close();
}
?>