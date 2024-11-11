<div class="titulo">Boolean</div>

<?php

echo TRUE;
echo '<br>';
echo FALSE; // não exibe nada

echo '<br>' . var_dump(true);
echo '<br>' . var_dump(False);
echo '<br>' . is_bool(false);
echo '<br>' . is_bool('true'); // false

# regras de conversão
echo '<p>Regras:</p>';
echo '<br>' . var_dump((bool) 0); // apenas 0 é false
echo '<br>' . var_dump((bool) 20); // qualquer número diferente de 0 é true
echo '<br>' . var_dump((bool) -1);
echo '<br>' . var_dump((bool) 0.0);
echo '<br>' . var_dump((bool) 0.0000001);
echo '<br>' . var_dump((bool) ""); // false
echo '<br>' . var_dump((bool) " "); // true
echo '<br>' . var_dump((bool) "0"); // false
echo '<br>' . var_dump((bool) "00"); // true
echo '<br>' . var_dump((bool) "false"); // true
echo '<br>' . var_dump((bool) "true"); // true
echo '<br>' . var_dump((bool) " "); // true
echo '<br>' . var_dump((bool) "0.0"); // true
