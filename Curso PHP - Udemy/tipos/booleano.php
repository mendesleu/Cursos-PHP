<div class="titulo">Booleano</div>

<?php
echo true;
echo '<br>';
echo false;

echo '<br>' . var_dump(true);
echo '<br>' . var_dump(false);
echo '<br>' . var_dump('false');
echo '<br>' . is_bool(true);

// Fazer regras de conversões
echo '<p>Regras:</p>';
echo '<br>' . var_dump((bool) 0); // Apenas zero e false
echo '<br>' . var_dump((bool) 20); 
echo '<br>' . var_dump((bool) -1); 
echo '<br>' . var_dump((bool) 0.0); 
echo '<br>' . var_dump((bool) 0.0000001); 
echo '<br>' . var_dump((bool) ""); // False
echo '<br>' . var_dump((bool) " "); // False
echo '<br>' . var_dump((bool) "0"); // Todo resto é true
echo '<br>' . var_dump((bool) "00"); 
echo '<br>' . var_dump((bool) "false");

echo '<br>' . var_dump(!!"false");