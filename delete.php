<?php
$id = $_GET['id'];
require_once "db_connection.php";
// sql to delete a record
$sql = "DELETE FROM book WHERE id_book = $id"; 

if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    header('Location: welcome.php'); 
    exit;
} else {
    echo "Error deleting record";
}
?>