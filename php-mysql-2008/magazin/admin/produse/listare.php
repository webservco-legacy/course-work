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
    $q = executa("SELECT pr_id, pr_nume FROM produse ORDER BY pr_nume");
    $nr = mysql_num_rows($q);
    if($nr<1) {echo '<div style="background: red; color: white; font-weight: bold;">Nu exista produse</div>';}
    else {
      echo '<table><tr><td><b>Nume</b></td><td><b>Actiuni</b></td></tr>';
      while($d=mysql_fetch_row($q)) {
        echo '<tr><td>'.$d[1].'</td><td><a href="modifica.php?id='.$d[0].'">Modifica</a> - <a href="sterge.php?id='.$d[0].'">Sterge</a></td></tr>';
      }
      echo '</table>';
    }
    ?>
  </div>
</div>
</body>
</html>