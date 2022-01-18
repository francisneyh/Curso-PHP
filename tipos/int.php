<div class="titulo">Tipo Inteiro</div>

<?php

echo 11; //11 = int
echo '<br>';
var_dump(11); #olha o conteúdo da variável e nos dá uma informação sobre a variável, e mostra tipo da variável
echo '<br>';

//Representações de bases
echo PHP_INT_MAX, '<br>' ; #exibe o inteiro máximo (positivo) suportado pelo PHP na máquina (32 bits/64bits)
echo PHP_INT_MIN, '<br>'; #exibe o inteiro minímo (negativo) suportado pelo PHP na máquina (32 bits/64bits)
echo 017, '<br>'; #por padrão os valores são representados na base decimal, contudo quando se coloca o 0 na frente de um valor inteiro, você está dizendo que está representando esse valor na base octal (0-7)
echo 0b11000111001, '<br>'; #valores na base binária (0 ou 1)
echo 0x117acf0, '<br>'; #base hexadecimal (0 até F)

