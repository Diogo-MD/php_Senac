<?php
//// Strings

// Para umir duas ou mais Strings em PHP, usamos o operador de concatenação.
$nome = "Diogo";
$sobrenome = "Madeira";
echo $nome . " " . $sobrenome; //Saída: Diogo Madeira
echo "<br>";


// Para obter o comprimento de uma string em PHP, usamos a função strlen()
$texto = "Olá, mundo";
echo strlen($texto); // Saida: 12 (Acento conta como caracter ???????)
echo "<br>";

// Para substituir partes de uma string, usamos a função str_replace()
$texto = "O rato roeu a roupa do rei de Roma.";
$novo_texto = str_replace("rato", "gato", $texto);
echo $novo_texto; // Saida: O gato roeu a roupa do rei.
echo "<br>";

//strtolower(): Converte uma string para letras minúsculas
//strtoupper(): Converte uma string para letras maiúsculas
$texto = "Olá, Mundo!";
$texto_minusculo = strtolower($texto);
$texto_maiusculo = strtoupper($texto);

echo $texto_minusculo;
echo "<br>";
echo $texto_maiusculo;
echo "<br>";
echo $texto;
echo "<br>";
