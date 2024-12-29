<?php
$conn = new mysqli('localhost', 'root', '', 'cvgina');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pendidikan = $_POST['pendidikan'];
    $tahun = $_POST['tahun'];
    $sekolah = $_POST['sekolah'];

    $conn->query("INSERT INTO educations (pendidikan, tahun, sekolah) VALUES ('$pendidikan', '$tahun', '$sekolah')");
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Add Education</title>
</head>
<body>
    <h1>Add Education</h1>
    <form method="POST">
        <label>Pendidikan:</label>
        <input type="text" name="pendidikan" required>
        <label>Tahun:</label>
        <input type="text" name="tahun" required>
        <label>Nama Sekolah / Kampus:</label>
        <input type="text" name="sekolah" required>
        <button type="submit">Submit</button>
    </form>
</body>
</html>