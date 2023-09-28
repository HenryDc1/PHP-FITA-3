
<?php
$lineas = array(); // Crea un array para almacenar las líneas del archivo
$archivo = fopen('contactes31.txt', 'r');

while (!feof($archivo)) {
    $linea = fgets($archivo); // Lee una línea del archivo
    $lineas[] = $linea; // Agrega la línea al array
}

fclose($archivo); // Cierra el archivo después de leerlo
?>
<table border="1">
    <thead>
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
<?php foreach ($datos as $a) {
    echo $a;
}



