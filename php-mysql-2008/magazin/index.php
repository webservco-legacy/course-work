<?php
//session_start();
include('admin/inc/db.php');
include('admin/inc/functii.php');
include('inc/functii.php');
if (isset($_POST['cantitate']) && is_numeric($_POST['cantitate']) && isset($_POST['pr_id']) && is_numeric($_POST['pr_id'])) {
  adauga_in_cos($_POST['pr_id'], $_POST['cantitate']);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Magazin</title>
<link rel="stylesheet" type="text/css" href="inc/stil.css">
</head>
<body>
<div id="header">
  <p>AVANTAJ SHOP</p>
</div>
<div id="container">
  <div id="meniu">
    <?php
    meniu();
    afisare_cos();
    ?>  
  </div>
  <div id="continut">
    <p>Bine ati venit in magazin</p>
    <br />
    <?php
    if (isset($_GET['msg']) && $_GET['msg']=='cosok') {
      echo "<div style='background:green;color:white;font-weight:bold;'>Produsul a fost adaugat in cos</div>";
    }
    if (isset($_GET['cat_id']) && is_numeric($_GET['cat_id'])) {
      af_produse($_GET['cat_id']);
    }
    else if (isset($_GET['pr_id']) && is_numeric($_GET['pr_id'])) {
      detalii_produs($_GET['pr_id']);
    }
    ?>
  </div>
</div>
</body>
</html>