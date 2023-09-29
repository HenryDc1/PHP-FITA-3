
<?php
$lineas = array(); // Crea un array para almacenar las líneas del archivo
$archivo = fopen('contactes31.txt', 'r');

while (!feof($archivo)) {
    $linea = fgets($archivo); // Lee una línea del archivo
    $lineas[] = $linea; // Agrega la línea al array
}
$archivo3 = fopen("contactes31b.txt","w"); //Crea un nuevo archivo, el segundo argumento indica como quieres que lea el archivo
$newarhivo=file_put_contents("contactes31b.txt",$lineas);//Escribe el contenido de la array lineas en un nuevo archivo de texto
fclose($archivo); // Cierra el archivo después de leerlo
?>
<table border="1">
    <thead>
        <h1>Contactes</h1>
        <tr>
            <th>Nombre</th>
            <th>Apellido 1</th>
            <th>Apellido 2</th>
            <th>Número</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($lineas as $linea): ?>
            <?php $datos = explode(', ', $linea); ?>
            <tr>
                <?php foreach ($datos as $dato): ?>
                    <td><?php echo $dato; ?></td>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>



