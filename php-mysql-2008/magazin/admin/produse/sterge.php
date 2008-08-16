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
    if ($_SESSION['acces']==3) {echo "Acest cont nu poate sterge!";}
    else if (is_numeric($_GET['id']) && $_SESSION['acces']==2) {
    ?>
    <form action="procesare.php" method="post">
    Sunteti sigur ca vreti sa stergeti produsul?
    <input type="hidden" name="id" value="<?php echo $_GET['id'];?>" />
    <input type="submit" name="sterge" value="Sterge!" />
    </form>
    <?php
    }
    ?>
  </div>
</div>
</body>
</html>