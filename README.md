# catalise-elevator

Simulação simples de um elevador em PHP.

## Sobre o projeto
Este projeto implementa uma classe `Elevador` e um script de simulação (`index.php`) que demonstra o funcionamento básico de um elevador, incluindo chamadas para diferentes andares e movimentação sequencial.
Esse projeto demonstra o funcionamento de uma fila FIFO (First In, First Out) para gerenciar as chamadas do elevador, onde o elevador atende os chamados na ordem em que foram recebidos.

## Como executar localmente
1. Certifique-se de ter o PHP instalado (versão 7.4 ou superior recomendada).
2. Acesse a pasta do projeto no terminal.
4. Execute o script diretamente:

	```bash
	php index.php
	```
	Ou, para rodar como servidor web local (acessando via navegador):
	```bash
	php -S localhost:8000
	```
	Depois, acesse http://localhost:8000 no navegador.

## Estrutura dos arquivos
- `public/index.php`: Script principal de simulação do elevador.
- `public/Elevador.php`: Classe com a lógica do elevador.

Não é necessário Composer ou qualquer dependência externa.