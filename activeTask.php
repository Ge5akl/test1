<?php 

require 'db.php';

$id = $_GET['id'];

  $sql = 'SELECT activeTask FROM `list` WHERE `id` = ?';
  $query = $pdo->prepare($sql);
  $query->execute([$id]);

  if ($active = "active"){
    $sql = 'SELECT activeTask FROM `list` WHERE `id` = ?';
  }
  header('Location: index.php');

 ?> 