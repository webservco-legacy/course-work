<?php
/*
CURS 3
/curs3./tema.php
Realiarea unui formular de inregistrare si afisarea valorilor trimise
Campuri: nume, prenume, data nasterii, adresa, oras, tara
*/
?>
<html>
<head>
<title>Tema curs 3</title>
</head>
<body>
<?php
// afisarea valorilor trimise
IF(isset($_POST['submit'])) {
  ECHO 'Nume: ' . $_POST['nume'] . '<br />';
  ECHO 'Prenume: ' . $_POST['prenume'] . '<br />';
  ECHO 'Data Na&#351;terii: ' . $_POST['ziua'] . '/' . $_POST['luna'] . '/' . $_POST['an'] . '<br />';
  ECHO 'Adresa: ' . $_POST['adresa'] . '<br />';
  ECHO 'Ora&#351;ul: ' . $_POST['oras'] . '<br />';
  ECHO '&#354;ara: ' . $_POST['tara'] . '<br />';
}
?>
<!-- afisarea formularului -->
<form action="tema.php" method="post">
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