<div class="titulo">Desafio Pi</div>

<?php
echo pi();
$pi = 3.14;

// var_dump($pi);
// var_dump(pi());

if($pi === pi()){
    echo "<br>Iguais!";
}else{
    echo "<br>Diferentes!";
}

// Operador Relacional
$piErrado = 2.8;

// Reposta
echo "<br>" . ($pi - pi());
echo "<br>" . ($pi - $piErrado);

if($pi - pi() <= 0.01){
    echo "<br>Praticamente iguais";
}

if($pi - $piErrado <= 0.01){
    echo "<br>Praticamente iguais";
}else{
    echo "<br>Valor errado ou diferente do esperado";
}