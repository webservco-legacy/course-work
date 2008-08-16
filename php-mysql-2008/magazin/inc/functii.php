<?php
function meniu() {
  echo '<ul>';
  echo '<li><a href="index.php">Prima pagina</a></li>';
  $q = executa("SELECT cat_id, cat_nume FROM categorii ORDER BY cat_nume");
  $nr = mysql_num_rows($q);
  if ($nr<1) {
    echo 'Nu exista categorii';
  }
  else {
    while ($d = mysql_fetch_row($q)) {
      echo '<li><a href="index.php?cat_id='.$d[0].'">'.$d[1].'</a></li>';
    }
    echo '<li><hr noshade /><a href="comanda.php">Comanda</a></li>';
  }
  echo '</ul>';
}
function af_produse($cat_id) {
  $descriere = mysql_result(mysql_query("SELECT cat_descriere FROM categorii WHERE cat_id = '{$cat_id}'"), 0);
  echo "<p>$descriere</p>";
  $q = executa("SELECT * FROM produse WHERE cat_id = '{$cat_id}' ORDER BY pr_pret");
  $nr = mysql_num_rows($q);
  if ($nr<1) {echo 'Nu exista produse';}
  else {
    while ($d = mysql_fetch_assoc($q)) {
      echo '<h2>'.$d['pr_nume'].'</h2>';
      echo '<img src="poze/produse/'.$d['pr_poza'].'" width="100" /><br />';
      echo 'Pret: ' . $d['pr_pret'] . ' RON<br />';
      echo '<a href="index.php?pr_id='.$d['pr_id'].'">Detalii</a>';
      echo '<hr noshade />';
    }  
  }
}
function detalii_produs($pr_id) {
  $q = executa("SELECT * FROM produse WHERE pr_id = '{$pr_id}'");
  $nr = mysql_num_rows($q);
  if ($nr<1) {echo 'Acest produs nu exista';}
  else {
    $d = mysql_fetch_assoc($q);
    echo '<h2>'.$d['pr_nume'].'</h2>';
    echo '<img src="poze/produse/'.$d['pr_poza'].'" width="100" /><br />';
    echo 'Pret: ' . $d['pr_pret'] . ' RON<br />';
    echo 'Cantitate: ' . $d['pr_cantitate'] . '<br />';
    echo '<p>'.$d['pr_descriere'].'</p><br />';
    echo '<form action="index.php" method="post">';
    echo '<input type="text" name="cantitate" size="1" value="1" />';
    echo '<input type="hidden" name="pr_id" value="'.$d['pr_id'].'" /><br />';
    echo '<input type="submit" name="adauga" value="Adauga in cos" />';
    echo '</form>';
  }
}
function adauga_in_cos($pr_id, $cantitate) {
  $sid = session_id();
  $data = time();
  $q = executa("INSERT INTO cos (pr_id, cos_cantitate, cos_session_id, cos_data) VALUES ('{$pr_id}', '{$cantitate}', '{$sid}', '{$data}')");
  if ($q) {header("Location: index.php?msg=cosok");}
}
function afisare_cos() {
  $sid = session_id();
  $q = executa("SELECT a.pr_nume, b.cos_cantitate FROM produse a, cos b WHERE a.pr_id = b.pr_id AND b.cos_session_id = '{$sid}'");
  $nr = mysql_num_rows($q);
  if ($nr<1) {echo 'Cosul este gol';}
  else {
    echo '<ul>';
    while ($d = mysql_fetch_row($q)) {
      echo '<li>'.$d[0].' x '.$d[1].'</li>';
    }
    echo '</ul>';
  }
}
?>