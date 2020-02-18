<?php
$ahora = new DateTime("now", new DateTimeZone("Europe/Madrid"));
echo "<p>Formato 12h: " .$ahora->format("d-m-Y h:i:s"). "</p>";
echo "<p>Formato 24h: " .$ahora->format("d-m-Y H:i:s"). "</p>";

//formato Europeo
$fecha_europea = "27/10/2008";
$fecha = DateTime::createFromFormat("d/m/Y", $fecha_europea, new DateTimeZone("Europe/Madrid"));
echo "<p>Fecha Europea: " .$fecha->format("d-m-Y H:i:s"). "</p>";

//formato Americano
$fecha_americana = "10/27/2008";
$fecha = DateTime::createFromFormat("m/d/Y", $fecha_americana, new DateTimeZone("Europe/Madrid"));
echo "<p>Fecha Americana: " .$fecha->format("d-m-Y H:i:s"). "</p>";

//fecha de la base de datos
$fecha_from_sql = "20180731 12:27:34";
$fecha = DateTime::createFromFormat("Ymd H:i:s", $fecha_from_sql, new DateTimeZone("Europe/Madrid"));
echo "<p>Fecha from SQL: " .$fecha->format("d-m-Y H:i:s"). "</p>";

$fecha_europea = "27/10/2008 12:36:57";
$fecha = DateTime::createFromFormat("d/m/Y H:i:s", $fecha_europea, new DateTimeZone("Europe/Madrid"));
echo "<p>Fecha to SQL: " .$fecha->format("Ymd H:i:s"). "</p>";

//Añadir 1 día
$ahora = new DateTime("now", new DateTimeZone("Europe/Madrid"));
$manana = $ahora->modify('+1 day');
echo "<p>Añadir 1 día: " .$manana->format("d-m-Y H:i:s"). "</p>";

//Añadir 2 horas
$ahora = new DateTime("now", new DateTimeZone("Europe/Madrid"));
$ahora->modify('+120 min');
echo "<p>Añadir 2 horas: " .$ahora->format("d-m-Y H:i:s"). "</p>";

//Quitar 10 años
$ahora = new DateTime("now", new DateTimeZone("Europe/Madrid"));
$ahora->modify('-10 year');
echo "<p>Quitar 10 años: " .$ahora->format("d-m-Y H:i:s"). "</p>";


//Comparar fechas con formatos diferentes
$ahora = new DateTime("now", new DateTimeZone("Europe/Madrid"));

$anterior = "20180731 12:27:34";
$fecha_anterior = DateTime::createFromFormat("Ymd H:i:s", $anterior, new DateTimeZone("Europe/Madrid"));

$posterior = "10/27/2035 12:36:57";
$fecha_posterior = DateTime::createFromFormat("d/m/Y H:i:s", $posterior, new DateTimeZone("Europe/Madrid"));

$resultado = ($ahora > $fecha_anterior) ? "SI" : "NO";
echo "<p>¿Es el 31/07/2018 anterior a la fecha actual?: " .$resultado. "</p>";

$resultado = ($ahora < $fecha_posterior) ? "SI" : "NO";
echo "<p>¿Es el 27/10/2035 posterior a la fecha actual?: " .$resultado. "</p>";

$resultado = ($fecha_anterior < $fecha_posterior) ? "SI" : "NO";
echo "<p>¿Es el 27/10/2019 posterior al 31/07/2018?: " .$resultado. "</p>";

?>
