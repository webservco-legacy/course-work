<?php
include('inc/db.php');
include('inc/functii.php');
// adaugat linia urmatoare, altfel: notice - initializat $eroare
$eroare = null;
// modificat linia urmatoare, altfel: notice - nu era initializat 'auth'
//if ($_POST['auth'])
if (isset($_POST['auth']))
{
  if (strlen($_POST['nume'])<1)
  {
    $eroare = 'Nu ati completat campul nume';
  }
  else if (strlen($_POST['parola'])<1)
  {
    $eroare = 'Nu ati completat campul parola';
  }
  else
  {
    $nume   = curata($_POST['nume']);
    $parola = curata($_POST['parola']);
    $eroare = auth($nume, $parola); 
  }
}
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
 
  </div>
  <div id="continut">
    <?php
    echo '<div style="background: red; color: white; font-weight: bold;">'.$eroare.'</div>';
    ?>
    <form action="autentificare.php" method="post">
    <table>
      <tr>
        <td>Nume: </td>
        <td><input type="text" name="nume" /></td>
      </tr>
      <tr>
        <td>Parola: </td>
        <td><input type="password" name="parola" /></td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" name="auth" value="Intra!" /></td>
      </tr>
    </table>
    </form>
  </div>
</div>
</body>
</html>