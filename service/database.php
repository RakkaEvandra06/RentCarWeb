<?php

$hostname = "localhost";
$email = "root";
$password = "";
$database_name = "website_db";

$db = mysqli_connect($hostname, $email, $password, $database_name);

if($db->connect_error) {
    echo "koneksi database rusak";
    die("error!");
}

echo "koneksi berhasil";

?>