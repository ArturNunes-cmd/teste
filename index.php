<form action = "index.php" method = "POST">
    Digite um número: <input type = "number" name="num1"><br>
    <button type = "submit">Enviar</button><p>
</form>

<?php
$a = $_POST['num1'];

$sum = $a + $b;

echo "A soma de $a e $b é $sum";
