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
    // adaugare produs
    if (isset($_POST['adauga'])) {
      $nume      = curata($_POST['nume']);
      $cat_id    = curata($_POST['cat_id']);
      $desc      = curata($_POST['descriere']);
      $pret      = curata($_POST['pret']);
      $cantitate = curata($_POST['cantitate']);
      // se poate integra scriptul facut la curs pentru managementul fisierelor
      $poza      = 'poza.jpg';
      $data      = time();
      if(strlen($nume)<1) {echo '<div style="background: red; color: white; font-weight: bold;">Nu exista nume</div>';}
      else if(strlen($desc)<1) {echo '<div style="background: red; color: white; font-weight: bold;">Nu exista descriere</div>';}
      else if(strlen($pret)<1) {echo '<div style="background: red; color: white; font-weight: bold;">Nu exista pret</div>';}
      else if(strlen($cantitate)<1) {echo '<div style="background: red; color: white; font-weight: bold;">Nu exista cantitate</div>';}
      else {
        $rez = executa("INSERT INTO produse (cat_id, pr_nume, pr_descriere, pr_pret, pr_cantitate, pr_poza, pr_data) VALUES ('".$cat_id."', '".$nume."', '".$desc."', '".$pret."', '".$cantitate."', '".$poza."', '".$data."')");
        if($rez) {echo '<div style="background: green; color: white; font-weight: bold;">Am adaugat produsul</div>';}
      }
    }
    // modificare produs
    if (isset($_POST['modifica']) && is_numeric($_POST['id'])) {
      $nume      = curata($_POST['nume']);
      $cat_id    = curata($_POST['categorie']);
      $desc      = curata($_POST['descriere']);
      $pret      = curata($_POST['pret']);
      $cantitate = curata($_POST['cantitate']);
      // se poate integra scriptul facut la curs pentru managementul fisierelor
      $poza      = 'poza.jpg';
      if(strlen($nume)<1) {echo '<div style="background: red; color: white; font-weight: bold;">Nu exista nume</div>';}
      else if(strlen($desc)<1) {echo '<div style="background: red; color: white; font-weight: bold;">Nu exista descriere</div>';}
      else {
        $rez = executa("UPDATE produse SET cat_id = '{$cat_id}', pr_nume = '{$nume}', pr_descriere = '{$desc}', pr_pret = '{$pret}', pr_cantitate = '{$cantitate}' WHERE pr_id = '{$_POST['id']}'");
        if ($rez) {echo '<div style="background: green; color: white; font-weight: bold;">Am modificat produsul</div>';}
      }
    }
    // stergere produs
    if (isset($_POST['sterge']) && is_numeric($_POST['id'])) {
      $rez = executa("DELETE FROM produse WHERE pr_id = '{$_POST['id']}'");
      if ($rez) {echo '<div style="background: green; color: white; font-weight: bold;">Am sters produsul</div>';}
    }
    ?>
  </div>
</div>
</body>
</html>