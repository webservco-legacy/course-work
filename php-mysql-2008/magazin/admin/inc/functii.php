<?php
function executa ($sql)
{
	$rez = mysql_query($sql) or die ('Eroare: '.mysql_error());
	return $rez;
}
function curata ($var)
{
  $var = mysql_real_escape_string(trim($var));
  return $var;
}
function e_admin ()
{
  if (!isset($_SESSION['auth']) || $_SESSION['auth']!='da')
  {
    header("Location: autentificare.php");
    exit;
  }
}
function auth ($u, $p)
{
  $p = md5($p);
  $q = executa("SELECT * FROM admin WHERE nume='".$u."' AND parola='".$p."'");
  $nr = mysql_num_rows($q);
  if ($nr==1)
  {
    $_SESSION['auth'] = 'da';
    $d = mysql_fetch_assoc($q);
    $_SESSION['acces'] = $d['acces'];
    header("Location: index.php");
  }
  else
  {
    $msg = 'Datele sunt incorecte';
    return $msg;
  }
}
function verde ($txt)
{
  $txt = '<span style="color: green;font-weight: bold;">'.$txt.'</span>';
  return $txt;
}
?>