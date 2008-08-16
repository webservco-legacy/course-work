<?php
// initializare variabile
$nr1 = 0;
$nr2 = 0;
$operator = Null;
$rezultat = 0;

// preluare date trimise prin metoda post
IF(isset($_POST['='])) {
  // pentru fiecare variabila verificam daca a fost trimisa si daca are valoare
  // daca da, variabila ia valoarea trimisa
  IF(isset($_POST['nr1']) && $_POST['nr1'] != '')            {$nr1      = $_POST['nr1'];}
  IF(isset($_POST['operator'])  && $_POST['operator'] != '') {$operator = $_POST['operator'];}
  IF(isset($_POST['nr2'])  && $_POST['nr2'] != '')           {$nr2      = $_POST['nr2'];}
  
  // in functie de valoarea operatorului realizam operatiunea
  SWITCH ($operator)
  {
    case '+': $rezultat = $nr1 + $nr2; break;
    case '-': $rezultat = $nr1 - $nr2; break;
    case '*': $rezultat = $nr1 * $nr2; break;
    case '/': $rezultat = $nr1 / $nr2; break;
    case '%': $rezultat = $nr1 % $nr2; break;
    default : $rezultat = '0';     break;
  }
}
?>
<html>
<head>
  <title>Exercitiu1</title>
  <style type="text/css">
  body         {text-align: center;}
  a:link       {background-color: #eeeeee; color: #000000; text-decoration: none; border: 1px solid #000000; text-align: center; padding: 0px 5px 0px 5px;}
  a:visited    {background-color: #eeeeee; color: #000000; text-decoration: none; border: 1px solid #000000; text-align: center; padding: 0px 5px 0px 5px;}
  a:hover      {background-color: #eeeeee; color: #000000; text-decoration: none; border: 1px solid #000000; text-align: center; padding: 0px 5px 0px 5px;}
  input        {background-color: #ffffff; border: 1px solid #000000; text-align: center;}
  input.submit {background-color: #eeeeee; border: 1px solid #000000; text-align: center; cursor: pointer;}
  select       {background-color: #ffffff; border: 1px solid #000000; text-align: center;}
  .rezultat    {background-color: #ffffff; border: 1px solid #000000; text-align: center; padding: 0px 5px 0px 5px;}
  </style>
</head>
<body>
<form name="myform" action="exercitiu1.php" method="post">
<input type="text" name="nr1" size="2" maxlength="5" value="<?php echo $nr1; ?>" />
&#160;
<select name="operator" size="1">
  <option value=""<?php IF($operator == Null) ECHO ' selected';?>>selecta&#355;i</option>
  <option value="+"<?php IF($operator == '+') ECHO ' selected';?>>plus</option>
  <option value="-"<?php IF($operator == '-') ECHO ' selected';?>>minus</option>
  <option value="*"<?php IF($operator == '*') ECHO ' selected';?>>&#238;nmul&#355;ire</option>
  <option value="/"<?php IF($operator == '/') ECHO ' selected';?>>&#238;np&#259;r&#355;ire</option>
  <option value="%"<?php IF($operator == '%') ECHO ' selected';?>>modulo</option>
</select>
&#160;
<input type="text" name="nr2" size="2" maxlength="5" value="<?php echo $nr2; ?>" />
&#160;
<input class="submit" type="submit" name="=" value="=" />
&#160;
<span class="rezultat">
<?php 
  // afisare rezultat
  ECHO $rezultat;
?>
</span>
&#160;
<a href="exercitiu1.php">resetare</A>
</form>
</body>
</html>