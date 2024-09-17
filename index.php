<?php
    $name = "Gonzalo";
    $isDev = true;
    $age = 19;

    $newAge1 = $age + '1';
    $newAge2 = $age . '1';
?>

<h1>
    <?= $newAge ?> 
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