<?php
//session_start();
include('admin/inc/db.php');
include('admin/inc/functii.php');
include('inc/functii.php');
if ($_POST['submit']) {
  $nume = $_POST['nume'];
  $adresa = $_POST['adresa'];
  $tel = $_POST['tel'];
  $oras = $_POST['oras'];
  $zip = $_POST['zip'];
  $comentarii = $_POST['comentarii'];
  $data = time();
  $status = 'Noua';
  $q = executa("INSERT INTO comenzi (com_data, com_status, com_nume, com_adresa, com_tel, com_oras, com_cod_postal, com_comentarii) VALUES ('{$data}', '{$status}', '{$nume}', '{$adresa}', '{$tel}', '{$oras}', '{$zip}', '{$comentarii}')");
  $c_id = mysql_insert_id();
  $s_id = session_id();
  $q2 = executa("SELECT * FROM cos WHERE cos_session_id = '{$s_id}'");
  while ($d = mysql_fetch_array($q2)) {
    $pr_id = $d['pr_id'];
    $cant  = $d['cos_cantitate'];
    $q3 = executa("INSERT INTO pr_comandate (com_id, pr_id, com_cant) VALUES ('{$c_id}', '{$pr_id}', '{$cant}')");
  }
  $q4 = executa("DELETE FROM cos WHERE cos_session_id = '{$s_id}'");
  @mail("webmaster@site.ro", "Comanda noua", "A sosit o comanda", "from: no-reply@site.ro");
  header("Location: index.php");
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
    <form action="comanda.php" method="post">
    Nume: <input type="text" name="nume" /><br />
    Adresa: <input type="text" name="adresa" /><br />
    Telefon: <input type="text" name="tel" /><br />
    Oras: <input type="text" name="oras" /><br />
    Cod postal: <input type="text" name="zip" /><br />
    Comentarii: <input type="text" name="comentarii" /><br />
    <input type="submit" name="submit" value="Adauga" />
    </form>
  </div>
</div>
</body>
</html>