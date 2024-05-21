<?php
include 'db_connect.php';

$title = $_POST['title'];
$content = $_POST['content'];
$url = $_POST['url'];
$penulis = "Default Author"; // Anda bisa menambahkan input untuk penulis jika diperlukan
$tanggal_terbit = date('Y-m-d'); // Menggunakan tanggal hari ini

$stmt = $conn->prepare("INSERT INTO artikel (judul, konten, url, penulis, tanggal_terbit) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $title, $content, $url, $penulis, $tanggal_terbit);

if ($stmt->execute()) {
    echo "New article created successfully";
    echo "<a href='index.php'>Back to Home</a>";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>