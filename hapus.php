<?php
include "konek.php";

$id = $_GET['id'];

mysqli_query($con, "DELETE FROM tb_input WHERE id=$id");

header("Location: index.php");
?>