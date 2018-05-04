<?php
//Array de secciones

//todo esto desde aqui es para hacer que los links funcionen
$inicio = [
    'titulo' => 'Holaaaa',
    'contenido' => 'Este es el contenido',
    'imagen' => 'http://lorempixel.com/400/200/sports/1',

];

$shop = [
    'titulo' => 'T-shop',
    'contenido' => 'Este es el contenido',
    'imagen' => 'http://lorempixel.com/400/200/sports/2',

];

$contacto = [
    'titulo' => 'Contacto',
    'contenido' => 'Este es el contenido',
    'imagen' => 'http://lorempixel.com/400/200/sports/3',

];

$casimiro = [
    'titulo' => 'Casimiro',
    'contenido' => 'Este es el contenido',
    'imagen' => 'http://lorempixel.com/400/200/sports/4',

];

$secciones = [
    'p1' => $inicio,
    'p2' => $shop,
    'p3' => $contacto,
    'p4' => $casimiro,

];

 if (isset ($_GET['seccion'])){
    $seccion = $_GET ['seccion'];  
 }

    if (!isset($_GET ['seccion'])) {
        $seccion = 'p1';
    }

    $titulo = $secciones[$seccion] ['titulo'];
    $contenido = $secciones[$seccion] ['contenido'];
    $imagen = $secciones[$seccion] ['imagen'];

?>
