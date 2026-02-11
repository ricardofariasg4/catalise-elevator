<?php

require_once __DIR__ . '/InterfaceFila.php';
require_once __DIR__ . '/FilaElevador.php';

class Elevador
{
    private InterfaceFila $filaChamados;
    private int $andarAtual;
    private int $capacidade;

    public function __construct(int $capacidade)
    {
        $this->filaChamados = new FilaElevador();
        $this->andarAtual = 0; // Andar inicial
        $this->capacidade = $capacidade;
    }

    public function chamar(int $andar)
    {
        if ($andar < 0) {
            throw new InvalidArgumentException("Andar inválido: $andar");
        }
        $this->filaChamados->enfileirar($andar);
    }

    public function mover()
    {
        if (!$this->filaChamados->estaVazia()) {
            $proximoAndar = $this->filaChamados->desenfileirar();
            $this->andarAtual = $proximoAndar;
            echo "Elevador movendo para o andar: $proximoAndar\n";
            return;
        }

        echo "A fila de chamados está vazia. O elevador permanece no andar: {$this->andarAtual}\n";
    }

    public function getAndarAtual(): int
    {
        return $this->andarAtual;
    }

    public function getChamadosPendentes(): InterfaceFila
    {
        return clone $this->filaChamados;
    }
}