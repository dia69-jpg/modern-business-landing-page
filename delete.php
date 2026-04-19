<?php
include "config.php";

$id = $_GET['id'];

$sql = "DELETE FROM messages WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: admin.php");
} else {
    echo "Error deleting record";
}
?>