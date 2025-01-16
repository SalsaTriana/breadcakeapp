<?php
// index.php

// Koneksi ke database (gunakan detail database Anda)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bread_cake_db";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

echo "Koneksi berhasil!<br>";

// Ambil data produk dari database
$sql = "SELECT id, name, description, price FROM Products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data setiap baris
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Name: " . $row["name"]. " - Description: " . $row["description"]. " - Price: " . $row["price"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
