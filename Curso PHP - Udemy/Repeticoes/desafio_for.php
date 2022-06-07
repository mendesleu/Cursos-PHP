<div class="titulo">Desafio For</div>

<!-- 
    #
    ##
    ###
    ####
    #####
    1) Pode usar incremento $i++
    2) Não pode usar incremento $i++
 -->

<?php
$impressão = '';
for($cont = 1; $cont <= 5; $cont++){
    $impressão .= '#';
    echo $impressão . '<br>';
}

echo '<hr>';

for($impressão2 = '#'; $impressão2 !== '######'; $impressão2 .= '#'){
    echo $impressão2 . '<br>';
}