<?php
/*
CURS 2
./exercitiu_while-formular_data.php
afisarea unui formular de selectare a datei si afisarea datelor trimise
*/
?>
<?php
ECHO 'data: ' . $_POST['ziua'] . ' / ' . $_POST['luna'] . ' / ' . $_POST['anul'];
?>
<form name="dateform" action="" method="post">
ziua:
<select name="ziua">
<?php
FOR ($i=1;$i<=31;$i++)
{
  ECHO '<option value="'.$i.'">'.$i.'</option>';
}
?>
</select>
&#160;
luna:
<select name="luna">
<?php
FOR ($j=1;$j<=12;$j++)
{
  ECHO '<option value="'.$j.'">'.$j.'</option>';
}
?>
</select>
&#160;
anul:
<select name="anul">
<?php
FOR ($k=1900;$k<=2100;$k++)
{
  ECHO '<option value="'.$k.'">'.$k.'</option>';
}
?>
</select>
&#160;
<input type="submit" name="trimite" value="Trimite" />
</form>