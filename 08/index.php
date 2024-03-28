<?php 

//// ESTRUTURAS DE REPETIÇÃO EM PHP

// EXEMPLO 1: FOR
echo "Exemplo 1: FOR <br>";
for ($i = 1 ; $i <= 5 ; $i++){
    echo "Numero $i <br>";
}
echo "<br>";

// Exemplo 2: While
echo "Exemplo 2: WHILE <br>";
$contador = 1;
while($contador <= 5) {
    echo "Número $contador <br>";
    $contador++;
}
echo "<br>";

// Exemplo 3: DO WHILE
echo "Exemplo 3: DO WHILE <br>";
$contador = 1;
do {
    echo "Número: $contador <br>";
    $contador++;
} while ($contador <= 5);

?>