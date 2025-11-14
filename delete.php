<?php
require "database.php";
if(isset($_GET['id'])){
    $q = $conn->prepare("DELETE FROM posts WHERE id = ?");
    $q->bind_param("i", $_GET['id']);
    $q->execute();
}
header("Location: index.php");
?>
