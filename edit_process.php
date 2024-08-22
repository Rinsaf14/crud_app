<?php
include 'dbcon.php';

$id = $_POST['id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$age = $_POST['age'];

$query = "UPDATE students SET first_name='$first_name', last_name='$last_name', age='$age' WHERE id=$id";
$result = mysqli_query($connection, $query);

if ($result) {
    header('Location: index.php');
} else {
    die("Query failed: " . mysqli_error($connection));
}
?>
