<?php
  if(isset($_POST['id_member'])):
    $pdo = new PDO('mysql:host=localhost;dbname=bs_php_project', 'root', '');
    $sql = $pdo->prepare("DELETE FROM `db_team` WHERE ID_MEMBER = ?");
    $sql->execute(array($_POST['id_member']));
  endif; 
?>