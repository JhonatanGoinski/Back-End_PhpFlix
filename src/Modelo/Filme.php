<?php


class Filme extends Titulo
{
    public function __construct(
        string $nome,
        int $anolancamento,
        Genero $genero,
        public readonly int $duracaoEmMinutos,
    ){ 
        parent::__construct($nome, $anolancamento, $genero);
    }
    public function duracaoEmMinutos(): int
    {
        return $this->duracaoEmMinutos;
    }

}