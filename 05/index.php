<?php
//// Introdução a ARRAYS em PHP

// Definição de Array's 
$frutas = array("Maçã", "Banana", "Laranja", "Morango");
$numeros = [1, 2, 3, 4, 5];
$alunos = array ("João" => 18, "Maria" => 2, "Pedro" => 19);

// Acessando elementos do Array
echo "A segunda fruta é: " . $frutas[1] . "<br>";
echo "O Terceiro número é : " . $numeros[2] . "<br>";
echo "A idade do João é: " . $alunos["João"] . "<br>";

// Alterar elementos do Array
$frutas[0] = "Pêra";
$numeros[4] = 10;
$alunos["Maria"] = 21;

// Adicionando Elementos ao Array
$frutas[] = "Abacaxi";
$numeros = 6;
$alunos["Ana"] = 22;

// Percorrento um Array com um foreach



?>