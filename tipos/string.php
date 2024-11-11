<div class="titulo">String</div>

<?php

echo 'Eu sou uma string';
echo '<br>';
var_dump("Eu tambem");

echo '<br>';

# Concatenacao
echo "Nos tambem" . ' somos';
echo '<br>', "Tambem aceito", " virgulas";
echo '<br>';

echo "'Teste' " . '"Teste" ' . '\'Teste\' ' . "\"Teste\" " . "\\";

echo '<br>';

print("<br> Tambem existe a funcao print");
print"<br> Tambem existe a funcao print";

echo '<br>';

# Algumas funcoes
echo strtoupper('maximizado');
echo '<br>';
echo strtolower('MINIMIZADO');
echo '<br>' .ucfirst('só a primeira letra');
echo '<br>' .ucwords('todas as palavras');
echo '<br>' .strlen('Quantas letras?');
// echo '<br>' .mb_strlen('Eu também', 'utf-8');
echo '<br>' .substr('Só uma parte mesmo', 7, 6);
echo '<br>' .str_replace('isso', 'aquilo', 'Trocar isso isso'); // troca todas as ocorrencias

# Desafio



