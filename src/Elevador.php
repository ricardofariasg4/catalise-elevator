<?php

namespace App;

use SplQueue;

class Elevador
{
    private SplQueue $filaChamados;
    private $andarAtual;
    private $capacidade;

    public function __construct(int $capacidade)
    {
        $this->filaChamados = new SplQueue();
        $this->andarAtual = 0; // Andar inicial
        $this->capacidade = $capacidade;
    }

    public function chamar(int $andar)
    {
        if ($andar < 0) {
            throw new \InvalidArgumentException("Andar inválido: $andar");
        }

        $this->filaChamados->enqueue($andar);
    }

    public function mover()
    {
        if (!$this->filaChamados->isEmpty()) {
            $proximoAndar = $this->filaChamados->dequeue();
            $this->andarAtual = $proximoAndar;
            echo "Elevador movendo para o andar: $proximoAndar\n";
        }
    }

    public function getAndarAtual(): int
    {
        return $this->andarAtual;
    }

    public function getChamadosPendentes(): SplQueue
    {
        return clone $this->filaChamados;
    }
}