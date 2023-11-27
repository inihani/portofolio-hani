<?php
include('admin/functions.php');

header("Content-Type: application/json");

$stmt = $conn->prepare("SELECT judul, deskripsi, gambar FROM portofolio");
$stmt->execute();
$portfolioData = $stmt->get_result();

$portfolioArray = array();

while ($row = $portfolioData->fetch_assoc()) {
    $portfolioArray[] = $row;
}

echo json_encode($portfolioArray);
