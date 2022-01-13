<div class="titulo">Comentários PHP</div>

<?php 
    echo "Estou no PHP";
    // echo "Estou no PHP";
    # echo "Estou no PHP";
    /* echo "Estou no PHP"; */
    # echo // "Estou no PHP";
    // echo # "Estou no PHP";
// ?> <!--O fechamento do bloco PHP é mais forte do que o comentário //-->

<p>Depois do primeiro bloco!</p>

<?php
/*
Linha 1 do comentário
Linha 2 do comentário
Linha 3 do comentário

?>*/ //o comentário /* */ é mais forte que o fechamento do bloco

// /* */ comentário de múltiplas linhas
// // comentário de uma linha linha
# # comentário de uma linha linha

echo "<p>Depois do segundo bloco!</p>"; //echo imprimi na tela

#comentários PHP não vão para o navegador (não são exibidos)
#comentários em ambiente educacional devem ser usados e abusados.
#comentários em ambiente de desenvolvimento devem ser relevantes
