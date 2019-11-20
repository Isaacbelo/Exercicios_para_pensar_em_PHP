<?php
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
?>