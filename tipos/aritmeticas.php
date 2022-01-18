<div class="titulo">Operações Aritméticas</div>

<?php
echo 1 + 1, '<br>';
var_dump(1 + 1);
echo '<br>';
echo 1 + 2.5, '<br>'; //se tiver um float no meio o valor será convertido para float
echo 10 - 2, '<br>';
echo 2 * 5, '<br>';
echo 7 / 4, '<br>'; //divisão gera valor float, pois é um número quebrado
echo intdiv(7, 4), '<br>'; //gera a divisão com um valor inteiro, tira a parte quebrada e não faz arredondamento = 1
echo round(7 / 4), '<br>'; //arredonda o valor = 2
echo 7 % 4, '<br>'; //módulo/resto da divisão. O módulo % é muito utilizado para saber se o número é par ou ímpar. = 3 (ímpar)
echo 7 % 2, '<br>'; //módulo/resto da divisão. O módulo % é muito utilizado para saber se o número é par ou ímpar. = 1 (ímpar)
echo 8 % 2, '<br>'; //módulo/resto da divisão. O módulo % é muito utilizado para saber se o número é par ou ímpar. = 0 (par)
echo 7 / 0, '<br>'; //dá INF = valor tendeu ao infinito
// echo intdiv(7, 0); # gera um erro!
echo 4 ** 2, '<br>'; // 4 elevado (**) a 2

//Precedência de operadores (igual na matemática):
#1°     ()   
#2°     **   
#3°     / * %  
#4°     + -   
echo '<p>Precedência</p>';
echo 2 + 3 * 4, '<br>'; //14
echo (2 + 3) * 4, '<br>'; //20
echo 2 + 3 * 4 ** 2, '<br>'; //50
echo ((2 + 3) * 4) ** 2, '<br>'; //400

