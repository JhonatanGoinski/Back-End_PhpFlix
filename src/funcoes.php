<?php


function exibeMensagemLancamento(int $ano): void{
    if ($ano > 2022){
        echo "Esse filme é um lançamento \n";
    } 
    elseif ($ano > 2020 && $ano <=2022){
        echo "Esse filme ainda é novo \n";
    }
    else{
        echo "Esse filme não é lançamento \n";
    }
}

function incluidoNoPlano (bool $planoPrime, int $anolancamento): bool{
    return $planoPrime || $anolancamento < 2020;    
}

function criaFilme (string $nome, int $anolancamento, float $nota, string $genero): Filme{

    $filme = new Filme();
    $filme->nome = $nome;
    $filme->anolancamento = $anolancamento;
    $filme->genero = $genero;
    $filme->notas = $nota;

    return $filme;
}