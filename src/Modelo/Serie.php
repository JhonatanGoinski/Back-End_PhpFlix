<?php

class Serie extends Titulo
{

    public function __construct(
        string $nome,
        int $anolancamento,
        Genero $genero,
        public readonly int $temporadas,
        public readonly int $episosodiosPorTemporadas,
        public readonly int $minutosPorEpisodio,
    ){ 
        parent::__construct($nome, $anolancamento, $genero);
    }

    public function duracaoEmMinutos(): int
    {
        return $this->temporadas * $this->episosodiosPorTemporadas * $this->minutosPorEpisodio;
    }

}