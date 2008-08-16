<?php
/*
CURS 3
/curs3./exercitiu_tema.php
Utilizarea formularului din tema pentru stocarea datelor intr-un fisier.
Se va crea fisierul NUME_PRENUME.txt (NUME - numele din formular, PRENUME - prenumele din formular)
Fisierul va contine datele din formular.
*/
?>
<html>
<head>
<title>Tema curs 3 - exercitiu</title>
</head>
<body>
<?php
// scrierea valorilor trimise
IF(isset($_POST['submit'])) {
// asta se pare ca e cea mai buna metoda pentru windows
$string =
'Nume: ' . $_POST['nume'] . "\r\n"
. 'Prenume: ' . $_POST['prenume'] . "\r\n"
. 'Data Nasterii: ' . $_POST['ziua'] . '/' . $_POST['luna'] . '/' . $_POST['an'] . "\r\n"
. 'Adresa: ' . $_POST['adresa'] . "\r\n"
. 'Orasul: ' . $_POST['oras'] . "\r\n"
. 'Tara: ' . $_POST['tara'] . "\r\n"
  
  $file = $_POST['nume'] . '_' . $_POST['prenume'] . '.txt';
  $handle = fopen($file, 'w');
  fwrite($handle, $string);
  fclose($handle);
}
?>
<!-- afisarea formularului -->
<form action="exercitiu_tema.php" method="post">
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
<tr>
  <td style="text-align: right;">
    Adresa:
  </td>
  <td style="text-align: left;">
    <textarea name="adresa" cols="30" rows="4"></textarea>
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
<tr>
  <td style="text-align: right;">
    &#160;
  </td>
  <td style="text-align: left;">
    <input type="submit" name="submit" value="Trimitere" />
    &#160;
    <input type="reset" name="reset" value="Resetare" />
  </td>
</tr>
</table>
</form>
</body>
</html>