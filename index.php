<?php

require_once __DIR__ . '/Elevador.php';

function exibirChamadosPendentes(Elevador $elevador)
{
    $chamados = $elevador->getChamadosPendentes();
    if ($chamados->estaVazia()) {
        echo "Nenhum chamado pendente.\n";
    } else {
        echo "Chamados pendentes:\n";
        foreach ($chamados as $andar) {
            echo " - Andar: $andar\n";
        }
    }
}

// Abaixo, uma simulação de uso do elevador, onde chamamos o elevador para diferentes 
// andares e exibimos o estado atual após cada movimento.
$elevador = new Elevador(5); // Capacidade de 5 pessoas

$elevador->chamar(3);
$elevador->chamar(1);
$elevador->chamar(4);

echo "Andar atual: " . $elevador->getAndarAtual() . "\n"; // Andar atual: 0
$elevador->mover(); // Move para o andar 3
echo "Qtd Chamados pendentes: " . $elevador->getChamadosPendentes()->tamanho() . "\n"; // Chamados pendentes: 2
exibirChamadosPendentes($elevador);
echo "\n";

echo "Andar atual: " . $elevador->getAndarAtual() . "\n"; // Andar atual: 3
$elevador->mover(); // Move para o andar 1
echo "Qtd Chamados pendentes: " . $elevador->getChamadosPendentes()->tamanho() . "\n"; // Chamados pendentes: 1
exibirChamadosPendentes($elevador);
echo "\n";

echo "Andar atual: " . $elevador->getAndarAtual() . "\n"; // Andar atual: 1
$elevador->mover(); // Move para o andar 4
echo "Qtd Chamados pendentes: " . $elevador->getChamadosPendentes()->tamanho() . "\n"; // Chamados pendentes: 0
exibirChamadosPendentes($elevador);
echo "\n";