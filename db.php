<?php
session_start();

$conn = mysqli_connect(
  getenv("MYSQL_SERVER"),
  getenv("MYSQL_ROOT"),
  getenv("MYSQL_ROOT_PASSWORD"),
  getenv("MYSQL_DATABASE"),
) or die(mysqli_error($mysqli));
?>
