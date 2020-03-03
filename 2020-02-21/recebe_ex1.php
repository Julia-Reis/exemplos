<?php
    include "classClasseNome.php";

    $c = new NomeClasse($_POST["v1"], $_POST["v2"], $_POST["v3"]);

    //var_dump($c);

    $c->set_atributo1("a"); //PARA MUDAR ALGUM VALOR

    //echo $c->atributo1; PARA MOSTRAR UM VALOR PRIVADO
    echo $c->get_atributo1(); //PARA MOSTRAR UM VALOR PRIVADO QUE NÃO TENHA UM SET_

    
?>