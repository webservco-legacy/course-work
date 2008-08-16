<?php
include('inc/db.php');
include('inc/functii.php');
e_admin();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Zona Administrativa</title>
<link rel="stylesheet" type="text/css" href="inc/stil.css">
</head>
<body>
<div id="header">
  <p>AVANTAJ SHOP</p>
</div>
<div id="container">
  <div id="meniu">
    <ul>
      <li><a href="index.php">Index admin</a></li>
      <li><a href="produse/adauga.php">Adauga produs</a></li>
      <li><a href="produse/listare.php">Management produse</a></li>
      <li><a href="categorii/adauga.php">Adauga categorie</a></li>
      <li><a href="categorii/listare.php">Listare categorii</a></li>
      <li><a href="comenzi/listare.php">Listare Comenzi</a></li>
      <hr noshade width="90%" align="left">
      <li><a href="../index.php">Vezi magazin</a></li>
      <li><a href="logout.php">Parasire cont</a></li>
    </ul>  
  </div>
  <div id="continut">
    <h3>Bine ati venit in zona administrativa</h3>  
    <?php
    $nr_cat=mysql_result(mysql_query("SELECT COUNT(*) FROM categorii"),0);
    $nr_produse=mysql_result(mysql_query("SELECT COUNT(*) FROM produse"),0);
    $nr_com=mysql_result(mysql_query("SELECT COUNT(*) FROM comenzi"),0);
    $nr_com_noi=mysql_result(mysql_query("SELECT COUNT(*) FROM comenzi WHERE com_status='Noua'"),0);
    $nr_com_fin=mysql_result(mysql_query("SELECT COUNT(*) FROM comenzi WHERE com_status='Finalizata'"),0);
    
    echo 'Total categorii: '.verde($nr_cat).'<br>';
    echo 'Total produse: '.verde($nr_produse).'<br>';
    echo 'Total comenzi: '.verde($nr_com).'<br>';
    echo 'Total comenzi noi: '.verde($nr_com_noi).'<br>';
    echo 'Total comenzi finalizate: '.verde($nr_com_fin).'<br>';
    ?>
  </div>
</div>
</body>
</html>