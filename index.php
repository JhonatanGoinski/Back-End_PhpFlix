<?php

require __DIR__ . "/src/Modelo/Genero.php";
require __DIR__ . "/src/Modelo/Titulo.php";
require __DIR__ . "/src/Modelo/Serie.php";
require __DIR__ . "/src/Modelo/Filme.php";
require __DIR__ . "/src/Calculos/CalculadoraDeMaratona.php";

require __DIR__ . "/src/funcoes.php";

echo "Bem-vindo(a) ao ScreenFlix\n";

$filme = new Filme(
    'Thor - Ragnarok',
    2025,
    Genero::SuperHeroi,
    180
);


$filme->avalia(10);
$filme->avalia(60);
$filme->avalia(50);
$filme->avalia(5);
$filme->avalia(15);

var_dump($filme);

echo $filme->media() . "\n";

echo $filme->anolancamento . "\n";
$serie = new Serie('Lost', 2007, Genero::Drama, 8, 5, 50);

var_dump($serie);

echo $serie->anolancamento . "\n";
echo $serie->avalia(8);
echo $serie->media() . "\n";

$calculadora = new CalculadoraDeMaratona();
$calculadora->inclui($filme);
$calculadora->inclui($serie);
$duracao = $calculadora->duracao();

echo "Para essa maratona, você precisa de $duracao minutos";
