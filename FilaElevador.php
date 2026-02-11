<?php

require_once __DIR__ . '/InterfaceFila.php';

class FilaElevador implements InterfaceFila, IteratorAggregate 
{
    private SplQueue $fila;

    public function __construct() {
        $this->fila = new SplQueue();
    }

    public function getIterator(): Traversable {
        return $this->fila;
    }

    public function enfileirar($element): void {
        $this->fila->enqueue($element);
    }

    public function desenfileirar() {
        if ($this->estaVazia()) {
            return null;
        }
        return $this->fila->dequeue();
    }

    public function estaVazia(): bool {
        return $this->fila->isEmpty();
    }

    public function tamanho(): int {
        return $this->fila->count();
    }

    public function espiar() {
        if ($this->estaVazia()) {
            return null;
        }
        return $this->fila->bottom();
    }
}