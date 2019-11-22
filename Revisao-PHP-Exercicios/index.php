<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercícios PHP</title>
  </head>
  <body>
	<h1>Exercícios para pensar em PHP</h1>
	<hr>
	<ul>
  	<li><p><a href="#exercicio_01">Exercício 01</a></p></li>
		<li><p><a href="#exercicio_02">Exercício 02</a></p></li>
		<li><p><a href="#exercicio_03">Exercício 03</a></p></li>
	</ul>

	<hr>

    <div id="exercicio_01">
      
      <h3>Exercício 01</h3>
			
        <p> 
          Construir um algoritmo que leia 2 números e
          efetue a adição. Caso o valor somado seja
          maior que 20, este deverá ser apresentando
          somando-se a ele mais 8; caso o valor
          somado seja menor ou igual a 20, este deverá
          ser apresentado subtraindo-se 5.
        </p>
      <form action="script.php"method="POST">
        Primeiro Número: <input type="text" placeholder="Digite o primeiro número..." name="num_1"><br><br>
        Segundo Número: <input type="text"placeholder="Digite o segundo número..." name="num_2"><br><br>

        <input type="submit" name="btn" value="Calcular">
      
      </form>
 
    </div>
		<hr>

	<div id="exercicio_02">
		<h3>Exercício 02</h3>
			<p>
				Entrar com um número e informar se ele é divisível por 10, por 5, por 2 ou se não é divisível por nenhum destes.
			</p>

		<form action="script.php" method="POST">
			Digite um número: <input type="text" placeholder="Digite o número..." name="num_3">
			<input type="submit" name="btn_2" value="Entra"><br>
		</form>
	</div>
	<hr>

	<div id="exercicio_03">
		<h3>Exercício 03</h3>
			<p>
				Entrar com nome, genero e idade de uma pessoa. Se a pessoa for do genero feminino e tiver menos que 25 anos, imprimir nome e a a mensagem: ACEITA. Caso contrário, imprimir nome e a mensagem: NÃO ACEITA.
			</p>
			<form action="script.php" method="POST">
				Nome: <input type="Text" name="nome" size="auto"><br><br>
				Idade: <input ype="number" name="idade" size="5%"><br><br>
				<input type="radio" name="genero"
				<?php if (isset($gender) && $gender=="feminino") echo "checked";?> value="feminino">Feminino
				<input type="radio" name="genero"
				<?php if (isset($gender) && $gender=="masculino") echo "checked";?>
				value="masculino">Masculino
				<input type="radio" name="genero"
				<?php if (isset($gender) && $gender=="outro") echo "checked";?>
				value="outro">Outro<br>
				<br><input type="submit" name="btn_ex3" value="Validar">

			</form>

	</div>


		<footer><br>Desenvolvido por Isaac Belo</footer>
  </body>
</html>