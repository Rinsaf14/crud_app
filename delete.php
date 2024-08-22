<?php
include 'dbcon.php';

$id = $_GET['id'];

$query = "DELETE FROM students WHERE id = $id";
$result = mysqli_query($connection, $query);

if ($result) {
    header('Location: index.php');
} else {
    die("Query failed: " . mysqli_error($connection));
}
?>
