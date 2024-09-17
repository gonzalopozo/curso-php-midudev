<?php
    $name = "Gonzalo";
    $isDev = true;
    $age = 19;

    # Nivel global
    define('LOGO_URL', 'https://cdn.freebiesupply.com/logos/large/2x/php-1-logo-svg-vector.svg');

    # Nivel archivo
    const NOMBRE = 'Gonzalo2';

    $edadText = '19';

    $edad = (int) $edadText;

    var_dump($name);
    echo "<br>";
    var_dump($isDev);
    echo "<br>";
    var_dump($age);

    $newAge1 = $age + '1';
    $newAge2 = $age . '1';
    
    echo "<br>";
    var_dump($newAge1);
    echo "<br>";
    var_dump($newAge2);

    echo "<br>";
    echo "<br>";
    echo gettype($name);
    echo "<br>";
    echo gettype($isDev);
    echo "<br>";
    echo gettype($age);
    echo "<br>";

    echo gettype($newAge1);
    echo "<br>";
    echo gettype($newAge2);
    echo "<br>";

    # 1º Forma de interpolar
    // $output = "Hola $name con una edad de $age. 🤑";

    # 2º Forma de interpolar
    $output = "Hola $name";
    $output .= "con una edad de $age. 🤑";

    $output = "Hola \$name con una edad de \$age. 🤑";





?>

<img src="<?= LOGO_URL ?>" alt="PHP Logo" width="200">

<h1>
    <?= NOMBRE ?> 
</h1>

<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }
</style>