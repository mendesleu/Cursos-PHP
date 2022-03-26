<div class="titulo">String</div>

<?php

echo 'Eu sou uma string';
echo '<br>';
var_dump('Eu também');
echo '<br>';

// Concatenação
echo ('Nós também' . ' Somos');
echo '<br>', 'Também aceito', " Virgulas";

echo '<br>';
echo " 'Teste' " . ' "Teste" ' . '\'Teste\' ' . "\"Teste\" " . "\\";

print("<br>Também existe a função print");
print"<br>Também existe a função print";

// Algumas Funções
echo '<br>' . strtoupper('maximizado');
echo '<br>' . strtolower('MINIMIZADO');
echo '<br>' . ucfirst('só a primeira letra');
echo '<br>' . ucwords('todas as palavaras');
echo '<br>' . strlen('Quantas Letras?');
echo '<br>' . mb_strlen('Eu também', "utf-8");
echo '<br>' . substr('Só uma parte da string', 7, 6);
echo '<br>' . str_replace('isso', 'aquilo', 'trocar isso');