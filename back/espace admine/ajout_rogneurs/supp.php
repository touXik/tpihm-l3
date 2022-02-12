<?php
  session_start();
  if(!$_SESSION['pseudo']) {
      header('Location: conexion.html');
  }
  
  include '../../database.php';

if(isset($_GET['id']) AND !empty($_GET['id'])){
    
      $suppr_id=htmlspecialchars($_GET['id']);
      $suppr=$db->prepare('DELETE FROM rogneur WHERE id=?');
      $suppr->execute(array($suppr_id));
      header('Location:rogneur.php');
     

  }
?>