<?php
//Variables
$n1=0; $n2=0; $s=0;

//Entrada
if(isset($_POST["btncalcular"])){
    $n1=(int)$_POST["txtn1"];
    $n2=(int)$_POST["txtn2"];
    //Salida
    $s=$n1*$n2;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:#D8DACD ;">
<nav><a href="index.php">Regresar al Inicio</a></nav>
<form action="multiplicacion.php" method="post">
<center><table width="500" border="3"></center>

<center><tr>
   <td style="text-align:center;">Calculo de dos Numeros </td>
</tr></center>

<tr>
    <td>Numero 1</td>
<td><input name="txtn1" type="text" id="txtn1" value="<?=$n1?>"></td>
</tr>

<tr>
    <td>Numero 2</td>
<td><input name="txtn2" type="text" id="txtn2" value="<?=$n2?>"></td>
</tr>

<tr>
    <td>Resultado de la Multiplicacion</td>
<td><input name="txts" type="text" id="txts" value="<?=$s?>"></td>
</tr>

<tr>
    <td></td>
<td><input name="btncalcular" type="submit" id="btncalcular" value="calcular"></td>
</tr>

</table>
    </form>
</body>
</html>