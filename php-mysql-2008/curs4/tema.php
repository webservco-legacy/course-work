<?php
/*
CURS 4
./curs4/tema.php
Realizarea unui contor de vizitatori folosind un fisier de text
*/
?>
<?php
// initializam counterul
$contor = 0;
// daca fisierul exista citim valoarea counterului
IF(is_file('count.txt')) {
  $handle = fopen('count.txt', 'r');
  $contor = fread($handle, 1024);
  fclose($handle);
}
// noua valoare a counterului
$contor = $contor + 1;
// deschidem fisierul si scriem noua valoare
// daca fisierul nu exista, va fi creat
// daca eista, continutul lui va fi truncat si in urma scrierii va contine doar valoarea noua a counterului
$handle = fopen('count.txt', 'w+');
fwrite($handle, $contor);
fclose($handle);
//afisarea contorului
echo $contor;
?>