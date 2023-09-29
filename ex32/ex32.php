<h4>Introdueix dades</h4>
<form action="" method="post">
    <textarea name="comentari" ></textarea>
    <input type="text" name="separador"><label for="separador"></label>
    <input type="submit" value="Enviar">
</form>
<?php
$archivo3 = fopen("comentaris.txt","w");
$post=$_POST[   "comentari"];
$newarhivo=file_put_contents("comentaris.txt",$post);
$post= explode(', ', $linea);
