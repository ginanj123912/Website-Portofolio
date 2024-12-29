<?php
$conn = new mysqli('localhost', 'root', '', 'cvgina');
$id = $_GET['id'];
$row = $conn->query("SELECT * FROM educations WHERE id=$id")->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pendidikan = $_POST['pendidikan'];
    $tahun = $_POST['tahun'];
    $sekolah = $_POST['sekolah'];

    $conn->query("UPDATE educations SET pendidikan='$pendidikan', tahun='$tahun', sekolah='$sekolah' WHERE id=$id");
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Edit Education</title>
</head>
<body>
    <h1>Edit Education</h1>
    <form method="POST">
        <label>Pendidikan:</label>
        <input type="text" name="pendidikan" value="<?= $row['pendidikan']; ?>" required>
        <label>Tahun:</label>
        <input type="text" name="tahun" value="<?= $row['tahun']; ?>" required>
        <label>Nama Sekolah / Kampus:</label>
        <input type="text" name="sekolah" value="<?= $row['sekolah']; ?>" required>
        <button type="submit">Update</button>
    </form>
</body>
</html>