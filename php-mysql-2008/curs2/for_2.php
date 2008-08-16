<?php
// CURS 2
// ./for_2.php
// utilizarea instructiunii FOR pentru afisarea unui camp de tip select cu toti anii de la 1900 la 2100
// TIP: daca dorim de exemplu incrementarea din doi in doi expresia 3 va fi de forma $i += 2
?>
<form>
an:
<select name="an">
<?php
FOR ($i=1900;$i<2100;$i++)
  {
    ECHO '<option value="' . $i . '">' . $i . '</option>';
  }
?>
</select>
</form>