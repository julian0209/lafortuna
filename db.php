<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'la_fortuna'
) or die(mysqli_erro($mysqli));

?>
