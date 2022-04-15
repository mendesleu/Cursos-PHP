<div class="titulo">Operadores Relacionais</div>

<?php
var_dump(1 == 1); // True
var_dump(1 > 1); // False
var_dump(1 >= 1); // True
var_dump(4 < 23); // True
var_dump(1 <= 7); // True
var_dump(1 != 1); // False
var_dump(1 <> 1); // False

var_dump(111 == '111'); // True
var_dump(111 === '111'); // False
var_dump(111 != '111'); // False
var_dump(111 !== '111'); // True

echo "<p class='divisao'>Relacionais no If/Else</p><hr>";

$idade = 75;
if ($idade < 18) {
    echo "Menor de idade = $idade anos <br>";
} else if ($idade <= 65) {
    echo "Adulto = $idade anos<br>";
} else {
    echo "Terceira idade = $idade anos";
}

echo "<p class='divisao'>Spaceship</p><hr>";

var_dump(500 <=> 3);
var_dump(50 <=> 50);
var_dump(5 <=> 50);

echo "<p class='divisao'>Valores podem ser V ou F</p><hr>";
var_dump(!!5);
var_dump(!!0);
var_dump(!!"");
var_dump(!!" ");
?>