<div class="titulo">Desafio String</div>

<?php
    echo 'Avaliando os métodos da documentação da string, qual os métodos' . '<br>' .
    "que a posição o texto 'abc' na string '!AbcaBcabc' retorne 1?" . '<br>';
    echo stripos('!AbcaBcabc', 'abc') . '<br>';
    echo strpos(strtolower('!AbcaBcabc'), 'abc');
?>