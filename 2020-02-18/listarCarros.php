<?php
include "classCarro.php";
include "cabecalho.php";
?>

<h3>Objetos "Carro" instanciados no sistema:</h3>

<?php
    foreach($_SESSION["carro"] as $c){
        echo "Cor: <span style='color:$c->cor'> $c->cor</span><br />
        Quantidade Portas: $c->qtd_porta <br />
        Velocidade Maxima: $c->velocidade_maxima <br />
        Velocidade Atual: $c->velocidade_atual
        <hr />";
        
    }
?>