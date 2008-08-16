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
    $date = mysql_fetch_assoc(mysql_query("SELECT * FROM produse WHERE pr_id='{$_GET['id']}'"));
    ?>
    <form action="procesare.php" method="post">
      <table>
        <tr><td>Nume</td><td><input type="text" name="nume" value="<?php echo $date['pr_nume']; ?>" /></td></tr>
        <tr><td>Categorie</td><td><select name="categorie">
        <?php
        $q = mysql_query("SELECT cat_id, cat_nume FROM categorii ORDER BY cat_nume");
        while($d=mysql_fetch_row($q))
        {
          echo '<option value="'.$d[0].'">'.$d[1].'</option>';
        }
        ?>
        </select></td></tr>
        <tr><td>Descriere</td><td><textarea name="descriere" rows="8" cols="35"><?php echo $date['pr_descriere']; ?></textarea></td></tr>
        <tr><td>Pret</td><td><input type="text" name="pret" value="<?php echo $date['pr_pret']; ?>" /></td></tr>
        <tr><td>Cantitate</td><td><input type="text" name="cantitate" value="<?php echo $date['pr_cantitate']; ?>" /></td></tr>
        <tr><td>Poza</td><td><input type="file" name="poza" /></td></tr>
        <tr><td colspan="2"><input type="hidden" name="id" value="<?php echo $date['pr_id']; ?>" /><input type="submit" name="modifica" value="Modifica" /></td></tr>
      </table>
    </form>
    <?php
    }
    ?>
  </div>
</div>
</body>
</html>