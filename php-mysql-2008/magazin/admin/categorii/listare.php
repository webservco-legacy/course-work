<?php
include("../inc/db.php");
include("../inc/functii.php");
e_admin();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Zona Administrativa</title>
<link rel="stylesheet" type="text/css" href="../inc/stil.css" />
</head>

<body>
<div id="header"><p>AVANTAJ ESHOP</p></div>
<div id="container">
	<div id="meniu">
	<ul>
	<li><a href='../index.php'>Index Admin</a></li>
	<li><a href="../produse/adauga.php">Adauga un produs</a></li>
	<li><a href="../produse/listare.php">Management produse</a></li>
	<li><a href="adauga.php">Adauga o categorie</a></li>
	<li><a href="listare.php">Management categorii</a></li>
	<li><a href="../comenzi/listare.php">Vizualizare comenzi</a></li>
	<hr noshade="noshade" width="90%" align="left"/>
	<li><a href='../../index.php'>Vezi magazin</a></li>
	<li><a href="../logout.php">Parasire Cont</a></li>
	
	</ul>
	
	</div>
	<div id="continut">
		<?php
			$q = executa("SELECT cat_id, cat_nume FROM categorii ORDER BY cat_nume");		
			$nr = mysql_num_rows($q);
			if($nr<1) {
			  echo "<div style='background:red;color:white;font-weight:bold;'>Nu exista categorii</div>";
			}
			else{
			  echo "<table><tr><td><b>Nume</b></td><td><b>Actiuni</b></td></tr>";
			  while($date = mysql_fetch_row($q)) {
			    echo "<tr><td>{$date[1]}</td><td><a href='modifica.php?id={$date[0]}'>Modifica</a> - <a href='sterge.php?id={$date[0]}'>Sterge</a></td></tr>";
			 }
			 echo "</table>"; 
			}
		?>
  </div>
</div>
</body>
</html>
