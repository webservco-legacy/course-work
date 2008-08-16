<?php
include('../inc/db.php');
include('../inc/functii.php');
e_admin();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Zona Administrativa</title>
<link rel="stylesheet" type="text/css" href="../inc/stil.css">
</head>
<body>
<div id="header">
  <p>AVANTAJ SHOP</p>
</div>
<div id="container">
  <div id="meniu">
    <ul>
      <li><a href="../index.php">Index admin</a></li>
      <li><a href="adauga.php">Adauga produs</a></li>
      <li><a href="listare.php">Management produse</a></li>
      <li><a href="../categorii/adauga.php">Adauga categorie</a></li>
      <li><a href="../categorii/listare.php">Listare categorii</a></li>
      <li><a href="../comenzi/listare.php">Listare Comenzi</a></li>
      <hr noshade width="90%" align="left">
      <li><a href="../../index.php">Vezi magazin</a></li>
      <li><a href="../logout.php">Parasire cont</a></li>
    </ul>  
  </div>
  <div id="continut">
    <?php
    if (is_numeric($_GET['id'])) {        
      $q = executa("SELECT * FROM comenzi WHERE com_id='{$_GET['id']}'");
      $d = mysql_fetch_assoc($q);
      echo '<table>';
      echo '<tr><td>Nume</td><td>'.$d['com_nume'].'</td></tr>';
      echo '<tr><td>Adresa</td><td>'.$d['com_adresa'].'</td></tr>';
      echo '<tr><td>Telefon</td><td>'.$d['com_tel'].'</td></tr>';
      echo '<tr><td>Oras</td><td>'.$d['com_oras'].'</td></tr>';
      echo '<tr><td>Cod postal</td><td>'.$d['com_cod_postal'].'</td></tr>';
      echo '<tr><td>Comentarii</td><td>'.$d['com_comentarii'].'</td></tr>';
      // la functii nu putem folosi {}, doar la variabile      
      echo '<tr><td>Data comanda</td><td>'.date("d-m-Y", $d['com_data']).'</td></tr>';
      echo '<tr><td>Status</td><td>'.$d['com_status'].'</td></tr>';
      echo '</table>';
      $q2 = executa("SELECT a.pr_nume, b.com_cant FROM produse a, pr_comandate b WHERE b.com_id='{$_GET['id']}' AND a.pr_id = b.pr_id");
      echo '<table><tr><td>Produs</td><td>Cantitate</td></tr>';
      while($d = mysql_fetch_row($q2)) {
        echo '<tr><td>'.$d[0].'</td><td>'.$d[1].'</td></tr>';
      }
      echo '</table>';
    }
    ?>
  </div>
</div>
</body>
</html>