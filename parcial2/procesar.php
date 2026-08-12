<?php

$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$consulta = $_POST["consulta"];

echo "<h1>Cita reservada en Óptica Mirasol</h1>";

echo "<p><strong>Nombre:</strong> " . $nombre . "</p>";
echo "<p><strong>Correo:</strong> " . $correo . "</p>";
echo "<p><strong>Consulta:</strong> " . $consulta . "</p>";

$servicios = [
    "Examen de vista - Bs 50",
    "Armazón clásico - Bs 180",
    "Lentes de sol - Bs 120"
];

echo "<h2>Servicios de Óptica Mirasol</h2>";



foreach ($servicios as $servicio) {
    echo "<p>" . $servicio . "</p>";
}

echo "<p><strong>Te atiende OSCAR ALEJANDRO TOCO CHIRI</strong></p>";

?>