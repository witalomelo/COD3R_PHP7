<div class="titulo">Conversoes</div>

<?php
echo is_int(PHP_INT_MAX);
echo '<br>';
var_dump(PHP_INT_MAX + 1);
echo '<br>';
var_dump(1 + 1.0);
echo '<br>';
var_dump((float) 3);
echo '<br>';
var_dump((int) 2.999);   // converte para inteiro
echo '<br>';
var_dump(intval('110101011', 2));   // converte para inteiro
echo '<br>';
var_dump((int) round(2.5));   // converte para inteiro 3
echo '<br>';
var_dump ((int) "10.5");   // converte para inteiro 10
echo '<br>';

# Operacoes com strings
echo '<p>Strings</p>';
var_dump(3 + "2");   // converte para inteiro 5
echo '<br>';
var_dump("3" . 2);   // concatena 32
echo '<br>';
var_dump("3" + 2);   // converte para inteiro 5
echo '<br>', is_string("3" . 2); // 1
echo '<br>', is_string("3" + 2); // 1
var_dump(1 . "cinco");   // concatena 1cinco
var_dump(1 + "5 cinco");   // converte para inteiro 6
var_dump(1 + "cinco 5");   // converte para inteiro 1
echo '<br>';
var_dump(1 + "5+5");   // converte para inteiro 6
var_dump(1 + "55");   // converte para inteiro 56
var_dump(1 + "5.5");   // converte para float 6.5
var_dump(1 + "-5.5");   // converte para float -4.5
var_dump((int) "-5.5");   // converte para inteiro -5
var_dump((float) "-5.5");   // converte para float -5.5


