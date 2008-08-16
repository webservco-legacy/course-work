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
	<li><a href="../produse/adauga.php">Adauga un produs</a></li>
	<li><a href="../produse/listare.php">Management produse</a></li>
	<li><a href="adauga.php">Adauga o categorie</a></li>
	<li><a href="listare.php">Management categorii</a></li>
	<li><a href="../comenzi/listare.php">Vizualizare comenzi</a></li>
	<li><a href="../logout.php">Parasire Cont</a></li>
	
	</ul>
	
	</div>
	<div id="continut">
	<?php
	//codul pt adaugarea de categorii
	if(isset($_POST['adauga'])) {
	  $nume = curata($_POST['nume']);
	  $desc = curata($_POST['descriere']);
	  if(strlen($nume)<1) {
	    echo "<div style='background:red;color:white;font-weight:bold;'>Nu ati completat campul NUME</div>";
	}
	else if(strlen($desc)<1) {
	    echo "<div style='background:red;color:white;font-weight:bold;'>Nu ati completat campul DESCRIERE</div>";
	}
	  else {
	    $rez = executa("INSERT INTO categorii(`cat_nume`,`cat_descriere`) VALUES('$nume','$desc')");
	    if($rez) {
		  echo "<div style='background:green;color:white;font-weight:bold;'>Am adaugat categoria</div>";
		}
	}}
	

	//codul pt stergerea unei categorii
	if(isset($_POST['sterge']) && is_numeric($_POST['id'])) {
	  $rez = executa("DELETE FROM categorii WHERE cat_id='{$_POST['id']}'");
	   if($rez) {
		  echo "<div style='background:green;color:white;font-weight:bold;'>Am STERS categoria</div>";
		}
	}
	//codul pt modificarea unei categorii
	if(isset($_POST['modifica']) && is_numeric($_POST['id'])) {
	   $nume = curata($_POST['nume']);
	  $desc = curata($_POST['descriere']);
	  if(strlen($nume)<1) {
	    echo "<div style='background:red;color:white;font-weight:bold;'>Nu ati completat campul NUME</div>";
	}
	else if(strlen($desc)<1) {
	    echo "<div style='background:red;color:white;font-weight:bold;'>Nu ati completat campul DESCRIERE</div>";
	}
	else{
	   $rez = executa("UPDATE categorii SET cat_nume='$nume', cat_descriere='$desc' WHERE cat_id='{$_POST['id']}'");
	   if($rez) {
		  echo "<div style='background:green;color:white;font-weight:bold;'>Am MODIFICAT categoria</div>";
		}
	  
	  }
	  }
	?>
  </div>

</div>
</body>
</html>
