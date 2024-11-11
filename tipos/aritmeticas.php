<div class="titulo">Aritmeticas</div>

<?php

echo 1 + 1, '<br>'; //1
var_dump(1 + 1.0); //float(2)
echo 1 + 2.5, '<br>'; //3.5
echo 10 - 2, '<br>'; //8
echo 2 * 5, '<br>'; //10
echo 7 / 4, '<br>'; //1.75
echo intdiv(7, 4), '<br>'; //truncar o resultado para inteiro 1
echo round(7 / 4), '<br>'; //arredondar o resultado 2
echo 7 % 4, '<br>'; //resto da divisao 3
// echo 7 / 0, '<br>'; //divisao por zero INF
// echo intdiv(7, 0); //erro
echo 4 ** 2; //16


# Precendencia de operadores
// () => ** => / * % => + -
echo 2 + 3 * 4, '<br>'; //14
echo (2 + 3) * 4, '<br>'; //20
echo 2 + 3 * 4 ** 2, '<br>'; //50
echo ((2 + 3) * 4) ** 2; //100

