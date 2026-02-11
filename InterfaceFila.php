<?php

interface InterfaceFila
{
    /**
     * Adiciona um elemento à fila.
     *
     * @param mixed $element
     * @return void
     */
    public function enfileirar($element): void;

    /**
     * Remove e retorna o elemento do início da fila.
     *
     * @return mixed
     */
    public function desenfileirar();

    /**
     * Retorna o elemento do início da fila sem removê-lo.
     *
     * @return mixed
     */
    public function espiar();

    /**
     * Verifica se a fila está vazia.
     *
     * @return bool
     */
    public function estaVazia(): bool;

    /**
     * Retorna o tamanho da fila.
     *
     * @return int
     */
    public function tamanho(): int;
}