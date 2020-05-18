<div class="titulo">Mapa</div>

<?php  
    $dados = array(
        "idade" => 25,
        "cor" => "verde",
        "peso" => 49.8
    );

    print_r($dados);
    echo "<br>";
    var_dump(($dados));
    echo "<br>";
    print_r($dados['idade']);
    echo "<br>";
    print_r($dados['cor']);
    echo "<br>";
    print_r($dados['peso']);
    echo "<br>";

    $dados[] = 'i';
    echo '<br>';
    print_r($dados);

    $dados['vinte'] = 'j';
    echo '<br>';
    print_r($dados);
?>