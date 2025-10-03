<form action="operacao.php" method="POST">
    Digite a operação: <input type="text" name="operacao"><br>
    Digite um numero <input type="number" name="num1"><br>
    Digite um numero <input type="number" name="num2"><br>
    <button type="submit">ENVIAR</button>
</form>

<?php
$num1=$_POST['num1'];
$num2=$_POST['num2'];

$soma = $num1 + $num2;
$mult = $num1 * $num2;
$div = $num1 / $num2;
$sub = $num1 - $num2;

switch (@$_REQUEST['operacao']) {
    case '*':
        print "A multiplicação é: $mult";
        break;
    case '/':
        print "A divisão é: $div";
        break;
    case '+':
        print "A soma é: $soma";
        break;
    case '-':
        print "A subtração é: $sub";
        break;
}
