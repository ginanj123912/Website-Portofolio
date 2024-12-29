<?php
$conn = new mysqli('localhost', 'root', '', 'cvgina');
$id = $_GET['id'];

$conn->query("DELETE FROM educations WHERE id=$id");
header('Location: index.php');
?>