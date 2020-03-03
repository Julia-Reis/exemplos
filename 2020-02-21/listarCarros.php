<?php
include "classCarro.php";
include "cabecalho.php";
?>

<h3>Objetos "Carro" instanciados no sistema:</h3>

<?php
    foreach($_SESSION["carro"] as $i=>$c){
        echo "Cor: <span style='color:".$c->get_cor()."'>".$c->get_cor()."</span><br />
        Quantidade Portas:".$c->get_portas()." <br />
        Velocidade Maxima: ".$c->get_velocidade_maxima()." <br />
        Velocidade Atual: ".$c->get_velocidade_atual()."
		
        <form method='post' action='acelerar_frear.php'>
			<input type='number' name='tempo' placeholder='tempo de aceleracao / frenagem' />
			<input type='number' name='aceleracao_frenagem' placeholder='aceleracao / frenagem' />
			<br />
			<input type='radio' class='radio' name='tipo' value='a' />
				Aceleração
			<input type='radio' class='radio' name='tipo' value='f' />
				Frenagem
			<br />
			<input type='hidden' name='id' value='$i' />
			<input type='submit' value='Acelerar / Frear' />
			</form>
		<hr />";
        
    }
?>