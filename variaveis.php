<?php

/*Criar varáveis

nomeDaVariavel = conteúdo;

Regras:

 - Inicializar com $
 - Não pode começar por número
 - Utilizar o tratamento CamelCase
 - Não pode ter acentos, espaços, símbolos *(_ = $ % # etc)

1bim = errado
bim1 = certo
nome do aluno = "Vitor" - errado
nomedoaluno = "Vitor Borges"; - [e correto mas não tá certo
nomeDoAluno = "Vitor";
*/

//Variáveis

$bim1 = 8.5;
$nome = "Vitor Borges";
$idade = 23;
$profissao = "desempregado";
$salario = 0.50;

//Comando de saída de texto

echo "{$bim1}<br>";

echo "$nome;<br>";

echo "Por mais que tente, {$nome} continua {$profissao}";

echo "<hr>";

$nota1 = 6.5;
$nota2 = 5.6;
$nota3 = 8.7;
$media = ($nota1+$nota2+$nota3)/3;

echo "Sua média foi {$media}";