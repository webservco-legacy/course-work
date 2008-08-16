<?php
/*
CURS 4
./curs4/mysql_1.php
Exercitiu mysql(1)
*/
?>
<?php
//conectare la baza de date
// conectare la server  
mysql_connect("localhost","curs","REDACTED");
// selectarea bazei de date
mysql_select_db("a_doua_baza");
// verificam daca a fost trimis formularul de inregistrare si introducem in baza de date
IF(isset($_POST['adauga']))
{
  // construire query  
  $q = "INSERT INTO test (nume, prenume, data_nastere) VALUES ('".$_POST['nume']."','".$_POST['prenume']."','".$_POST['ziua']." ".$_POST['luna']." ".$_POST['an']."')";
  // executare query
  mysql_query($q);
}
ELSE IF(isset($_POST['arata']))
{
  // construire query
  $q = "SELECT nume, prenume, data_nastere FROM test ORDER BY nume ASC, prenume ASC";
  // executare query
  $r = mysql_query($q);
  // total randuri in baza de date
  $n = mysql_num_rows($r);
  // aducerea valorilor din baza de date
  $i = 0;  
  while($i < $n)
  {
    $rand = mysql_fetch_array($r);
    echo $rand['nume'] . ' ' . $rand['prenume'] . ' ' . $rand['data_nastere'] . '<br />';    
    $i++;
  }
}
// verificam daca a fost trimis formularul de afisare si afisam continutul bazei de date
?>
<html>
<head>
<title>Exercitiu MySQL</title>
</head>
<body>
<!-- fomularul de inregistrare -->
<form name="inregistrare" action="mysql_1.php" method="post">
<table border="0" cellpadding="5" cellspacing="0">
<tr>
  <td style="text-align: right;">
    Nume:
  </td>
  <td style="text-align: left;">
    <input type="text" name="nume" value="">
  </td>
</tr>
<tr>
  <td style="text-align: right;">
    Prenume:
  </td>
  <td style="text-align: left;">
    <input type="text" name="prenume" value="">
  </td>
</tr>
<tr>
  <td style="text-align: right;">
    Data na&#351;terii:
  </td>
  <td style="text-align: left;">
    Ziua&#160;
    <select name="ziua" size="1">
    <?php
    FOR ($i=1;$i<=31;$i++)
    {
      ECHO '<option value="'.$i.'">'.$i.'</option>';
    }
    ?>
    </select>
    Luna&#160;
    <select name="luna" size="1">
    <?php
    FOR ($j=1;$j<=12;$j++)
    {
      ECHO '<option value="'.$j.'">'.$j.'</option>';
    }
    ?>
    </select>
    Anul&#160;
    <select name="an" size="1">
    <?php
    FOR ($k=1900;$k<=2100;$k++)
    {
      ECHO '<option value="'.$k.'">'.$k.'</option>';
    }
    ?>
    </select>
  </td>
</tr>
<!--
<tr>
  <td style="text-align: right;">
    Adresa:
  </td>
  <td style="text-align: left;">
    <textarea name="adresa" cols="30" rows="4">
    </textarea>
  </td>
</tr>
<tr>
  <td style="text-align: right;">
    Ora&#351;ul:
  </td>
  <td style="text-align: left;">
    <input type="text" name="oras">
  </td>
</tr>
<tr>
  <td style="text-align: right;">
    &#354;ara:
  </td>
  <td style="text-align: left;">
    <input type="text" name="tara">
  </td>
</tr>
-->
<tr>
  <td style="text-align: right;">
    &#160;
  </td>
  <td style="text-align: left;">
    <input type="submit" name="adauga" value="Adaug&#259;" />
    &#160;
    <input type="reset" name="reset" value="Reseteaz&#259;" />
  </td>
</tr>
</table>
</form>
<!-- //fomularul de inregistrare -->
<!-- formularul de afisare -->
<form name="afisare" action="mysql_1.php" method="post">
<input type="submit" name="arata" value="Arat&#259;" />
</form>
<!-- //formularul de afisare -->
</body>
</html>
