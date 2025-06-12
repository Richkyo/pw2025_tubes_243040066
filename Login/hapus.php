<?php
require 'config.php';

$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM emotionalart WHERE id = $id");

header("Location: dashboard.php");
exit;
