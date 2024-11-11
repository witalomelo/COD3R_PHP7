<div class="titulo">Desafio String</div>

<?php

// Enunciado:
// Avaliando os métodos da documentação da string, qual o método que a posição do texto 'abc' na string '!AbcaBcabc' retorne 1?


$mystring = strtolower('!AbcaBcabc');
$findme   = 'abc';
$pos = strpos($mystring, $findme);

if ($pos === false) {
    echo "A string '$findme' não foi encontrada em '$mystring'";
} else {
    echo "A string '$findme' foi encontrada em '$mystring'";
    echo " e existe na posição $pos";
}

echo '<br>';
echo stripos('!AbcaBcabc', 'abc') . '<br>';
echo strpos(strtolower('!AbcaBcabc'), 'abc') . '<br>';
?>