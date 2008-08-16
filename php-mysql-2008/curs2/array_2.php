<?php
/*
CURS 2
./array_2.php
Exercitiu array 2: afisarea tuturor elementelor dintr-un array
*/

/*
// vector simplu
$a = array(1,3,5,9,10,21,24,26,85,99,999);
// afisam toate valorile vectorului $a
FOREACH ($a as $k => $j)
{
  ECHO $a[$k] . '<br />';
}

// pauza
ECHO '<HR>';
*/

/*
// vector asociativ
$b = array('nume' => 'Popescu', 'prenume' => 'Mihai', 'varsta' => '28', 'fumator' => 'da',);
// afisam toate valorile vectorului $b
FOREACH ($b as $k => $j)
{
  ECHO $b[$k] . '<br />';
}

// pauza
ECHO '<HR>';
*/


// vector multidimensional
$c['ROMANIA'] = array('populatie' => 30000000, 'alta_cheie' => 'val ro');
$c['SPANIA']  = array('populatie' => 19000000, 'alta_cheie' => 'val spa');
$c['FRANTA']  = array('populatie' => 59000000, 'alta_cheie' => 'val fr');
// afisam toate valorile vectorului $c
FOREACH ($c as $v1 => $d)
{
  FOREACH ($d as $v2)
  {
    ECHO $v2 . '<br />';
  }
}
// alternativ:
/*
FOREACH ($c as $v1 => $d)
{
  FOREACH ($d as $v2 => $e)
  {
    ECHO $d[$v2] . '<br />';
  }
}
*/
?>