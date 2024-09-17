<?php

const API_URL = "https://whenisthenextmcufilm.com/api";
# Inicializar una nueva sesión de curl; ch = cURL handel
$ch = curl_init(API_URL);
// Indicar que queremos recibir el resultado de la petición y no mostrarla en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
/*  Ejecutar la petición
    y guardamos el resultado 
*/
$result = curl_exec($ch);
$data = json_decode($result, true);
curl_close($ch);

var_dump($data);
?>

<head>
    <meta charset="UTF-8">
    <title>La próxima película de Marvel</title>
    <meta name="description" content="La próxima película de Marvel">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
    >
</head>

<main>
    <section>
        <img src="" alt="">
        <h2>La próxima película de Marvel</h2>
    </section>
</main>







<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }
</style>