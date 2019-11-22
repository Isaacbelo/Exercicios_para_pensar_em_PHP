<?php
	// Script do Exercício 01
	if(isset($_POST["btn"])) {
		$num1 = $_POST["num_1"];
		$num2 = $_POST["num_2"];

		$soma = $num1 + $num2;

		echo "O Valor da soma de $num1 + $num2 = $soma<br>";

		if($soma > 20)
		{
			$soma = $soma + 8;
			echo "Maior que 20: <br>Total = $soma";
		} else {
			$soma = $soma -5;
			echo "Menor/igual a 20: <br>Total = $soma";
		}
	}
	// Script do Exercício 02
	if(isset($_POST["btn_2"])) {
		$num3 = $_POST["num_3"];

		if($num3 % 10 == 0) {
			echo "O número $num3 é divisível por 10, 5 e 2! <br>";
		} else if($num3 % 5 == 0) {
			echo "O número $num3 é divisível por 5!<br>";
		} else if($num3 % 2 == 0) {
			echo "O número $num3 é divisível por 2!<br>";
		} else {
			echo "O número $num3 não é divisível por 2, 5 ou 10";
		}
	}
	//Script do Exercício 03
	if(isset($_POST["btn_exe3"])) {
		$nome = $_POST["nome"];
		$idade = $_POST["idade"];
		$genero = $_POST["genero"];

		if($genero == "feminino" and $idade < 25) {
			echo "Aceita!";
		} else {
			echo "Não Aceita!";
		}
	}



	echo "<br><a href='index.php'> <= Voltar</a>"
?>