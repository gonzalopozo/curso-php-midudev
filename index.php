<?php
    $name = "Gonzalo";
    $isDev = true;
    $age = 19;

    echo $isYoung = $age < 40;
    echo "<br>";
    echo $equals = 33 === 33;
    echo "<br>";
    echo $bald = !true;
    echo "<br>";

    # 1º Sintaxis condicional if-ele
    if ($isYoung) {
        echo "<h2>¡Eres joven!</h2>";
    } else if ($isDev) {
        echo "<h2>¡No eres joven y eres dev! ☠️</h2>";
    } else {
        echo "<h2>¡Eres viejo!</h2>";
    }

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
    # Solo las dobles comillas admiten interpolar.
    // $output = "Hola $name con una edad de $age. 🤑";

    # 2º Forma de interpolar
    $output = "Hola $name";
    $output .= "con una edad de $age. 🤑";

    $output = "Hola \$name con una edad de \$age. 🤑";

    # match hardcodeado
    // $outputAge = match ($age) {
    //     0, 1 ,2 => "Eres un bebé, $name 👶",
    //     3, 4, 5, 6, 7, 8, 9, 10 => "Eres un niño, $name 👦",
    //     11, 12, 13, 14, 15, 16, 17, 18 => "Eres un adolescente, $name 🧒",
    //     19, 21, 22, 22, 23, 24, 25, 26, 27, 28, 29, 30 => "Eres un adulto joven, $name 🧑",
    //     default => "Eres un adulto, $name 👨"
    // }

    # match estrategia booleans
    $outputAge = match (true) {
        $age < 2      => "Eres un bebé, $name 👶",
        $age < 10     => "Eres un niño, $name 👦",
        $age < 18     => "Eres un adolescente, $name 🧒",
        $age === 18   => "Eres mayor de edad, $name 🍺",
        $age < 40     => "Eres un adulto joven, $name 🧑",
        $age <= 70    => "Eres un adulto viejo, $name 🧑",
        default       => "¿Gandalf?, $name 🧙‍♂️"
    };

    # Declarar array
    $bestLanguages = ["PHP", "JavaScript", "Python", 1, 2];
    # Añadir items al array
    $bestLanguages[] = "Java";
    # Asignación de items al array
    $bestLanguages[1] = "TypeScript";
    $bestLanguages[3] = "Rust";
    $bestLanguages[4] = "Solidity";

?>

<h3>
    El mejor lenguaje es <?= $bestLanguages[1] ?>
</h3>

<ul>
    <?php foreach ($bestLanguages as $language) : ?>
        <li><?= $language ?></li>
    <?php endforeach; ?>
</ul>

<h2><?= $outputAge ?></h2>

<!-- 2º Sintaxis condicional if-else -->
<?php if ($isYoung) : ?>
    <h2>¡Eres joven 2!</h2>
<?php elseif ($isDev) : ?>
    <h2>¡No eres joven y eres dev 2! ☠️</h2>
<?php else : ?>
    <h2>¡Eres viejo 2!</h2>
<?php endif?>

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