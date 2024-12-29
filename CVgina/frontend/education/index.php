<?php
$conn = new mysqli('localhost', 'root', '', 'cvgina');

$result = $conn->query("SELECT * FROM educations");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Education List</title>
</head>
<body>
    <h1>Education</h1>
    <a href="create.php" class="btn">Add New</a>
    <table>
        <tr>
            <th>No.</th>
            <th>Pendidikan</th>
            <th>Tahun</th>
            <th>Nama Sekolah / Kampus</th>
            <th>Actions</th>
        </tr>
        <?php $no = 1; while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $row['pendidikan']; ?></td>
            <td><?= $row['tahun']; ?></td>
            <td><?= $row['sekolah']; ?></td>
            <td>
                <a href="update.php?id=<?= $row['id']; ?>" class="btn-edit">Edit</a>
                <a href="delete.php?id=<?= $row['id']; ?>" class="btn-delete" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>