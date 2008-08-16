<?php
/*
CURS 2
./formular.php
crearea unui formular si preluarea valorilor trimise prin metoda POST
*/

//ECHO $_GET['nume'] . '<br />';
//ECHO $HTTP_GET_VARS['nume'] . '<br />';
//ECHO $nume;

ECHO $_POST['nume']    . '<br />';
ECHO $_POST['adresa']  . '<br />';
ECHO $_POST['fumator'] . '<br />';
?>
<form action="form.php" method="post">
<input type="text" name="nume">
<br />
<textarea name="adresa" cols="25" rows="3">
</textarea>
<br />

<select name="fumator">
  <option value="da">Fum&#259;tor</option>
  <option value="nu">Nefum&#259;tor</option>
  <option value="" selected>...</option>
</select>
<br />
<input type="submit" name="salv" value="trimite" />
</form>