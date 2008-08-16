<?php
/*
CURS 3
/curs3./files_1.php
$_FILES
*/
?>
<?php
ECHO 'name: '     . $_FILES['myfile']['name']     . '<br />';
ECHO 'type: '     . $_FILES['myfile']['type']     . '<br />';
ECHO 'size: '     . $_FILES['myfile']['size']     . '<br />';
ECHO 'tmp_name: ' . $_FILES['myfile']['tmp_name'] . '<br />';
ECHO 'error: '    . $_FILES['myfile']['error']    . '<br />';

ECHO 'is_uploaded_file: ' . is_uploaded_file($_FILES['myfile']['tmp_name']) . '<br />';

ECHO 'move_uploaded_file: ' . move_uploaded_file($_FILES['myfile']['tmp_name'], 'C:\fisier.php');
?>
<form enctype="multipart/form-data" action="files_1.php" method="post">
<input type="file" name="myfile" />
&#160;
<input type="submit" name="submit" value="Trimite" />
</form>