<?php
/*
CURS 2
./array_1.php
Exercitiu array 1
*/

// array simplu
$a = array(17, 28, 1, 12);
// afisam valoarea cheii numarul 3
// TIP: numerotarea incepe de la 0
ECHO $a[3] . '<br />';


//array asociativ
$b = array('nume' => 'Popescu', 'prenume' => "Mihai");
// afisam valoarea cheii cu denumirea 'prenume'
ECHO $b['prenume'] . '<br />';

//array multidimensional
$c['ROMANIA'] = array('populatie' => 30000000, 'alta_cheie' => 'oricevaloare');
$c['SPANIA']  = array('populatie' => 19000000, 'alta_cheie' => 'oricevaloarespa');

//afisam valoarea cheii 'populatie' din array-ul SPANIA
ECHO $c['SPANIA']['populatie'];
// $c['SPANIA'] este un array asociativ
// $c este un array multidimensional care contine 2 array-uri asociative:
// $c['SPANIA'] si $c['ROMANIA']
?>