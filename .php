<!DOCTYPE html>
<html>
  <head>
    <title>Calcular IMC</title>
  </head>
  <body>
    <h2>Calculadora de indice de massa corporal (IMC) </h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  Peso: <input type="text" name= "altura"><br>
  <input type="submit" value= "calcular">
  </form>
  
<?php
  function calcularIMC($peso, $altura){
  return $peso / ($altura * $altura);
}
if ($_SERVER["REQUEST_METHOD"] == "POST"){
  $peso = $_POST['peso'];
  $altura = $_POST['altura'];

  if(!empty($peso) && !empty($altura)){
    $imc = calcularIMC($peso, $altura);

    echo "<h3>Seu IMC é: " . number_format($imc, 2) . "<h3>";
    echo "<p> Interpretacao do IMC:<br>";
    echo "Abaixo do 18.5: Abaixo do peso <br>";
    echo "18.5 - 24.9: Peso normal <br>";
    echo "25.0 - 29.9: Obesidade <br>";
    echo "30.0 - 34.9: Obesidade grau 1 <br>";
    echo "35.0 - 39.9: Obesidade grau 2 <br>";
    echo "40.0 ou mais: Obesidade grau 3 (morbida) </p>";

  }else{
    echo "<p style= 'color: red;'>Por favor, preencha ambos os campos.</p>";
  }
}
?>
  </body>
</html>