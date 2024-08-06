<?php
require __DIR__ . "/src/Modelo/Filme.php";
require __DIR__ . "/src/funcoes.php";


 echo "Bem vindo(a) ao screen match \n";

//  $nomeFilme = "Top Gun - Maverick";
//  $nomeFilme = "Se beber não case";
 $nomeFilme = "Thor: Ragnarok";

 $anoLancamento =  2022;
 $quantidadeNotas = $argc - 2;
 $notas = [];


for ($contador=1; $contador < $argc; $contador++){
    $notas[] = (float)$argv[$contador];
}

 $notaFilme = array_sum($notas) /$quantidadeNotas;
 $planoPrime = true;


$incluidoNoPLano = incluidoNoPlano($planoPrime, $anoLancamento);

 
 echo "Nome do filme: ", $nomeFilme, "\n";
 echo "Nota do filme: ", $notaFilme, "\n";
 echo "Ano de lançamento: ", $anoLancamento, "\n";

exibeMensagemLancamento($anoLancamento);

$genreo = match ($nomeFilme) {
    "Top Gun - Maverick" => "Ação", 
    "Thor: Ragnarok" => "Super-herói",
    "Se beber não case" => "Comédia",
    default => "Gênero desconhecido"
};

echo "O gênero do filme é: ", $genreo, "\n";

$filme = criaFilme(
        nome: "Thor: Ragnarok",
        anolancamento: 2021,
        nota: 7.5,
        genero: "super-herói",
);

echo $filme->anolancamento;


var_dump($notas);
sort($notas);
var_dump($notas);
var_dump($filme->nome);

$filmeComoStringJson = json_encode($filme);
file_put_contents(__DIR__ . '/filme.json', $filmeComoStringJson);
