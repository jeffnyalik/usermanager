<?php
include_once('./config/Config.php');
include_once('./lib/Database.php');
include_once('./inc/header.php');
?>
<?php 
    $db = new Database();
    $id = $_GET['id'];
    $delete = "DELETE FROM tasks WHERE id=$id";
    $deleteID = $db->Delete($delete);
?>
<p class="text-muted center"><a href="index.php">GO back...</a></p>