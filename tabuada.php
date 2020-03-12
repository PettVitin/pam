<!DOCTYPE HTML>
<html lang = "pt-br">
    <head>
        <title>Tabuada!</title>
        <meta charset = "UTF-8">
    </head>
    <body>
        <form action="calculadora.php" method="get" >
            Primeiro Numero: <input name="num1" type="number" />
            Segundo numero: <input name="num2" type="number" /> 
            * <input name="tabuada" type="text" /> 
            <input type="submit" value="Calcular" />     
    </form> 
    <?php
        $a =  $_GET "num1";
        $b =  $_GET "num2";
        $op = $_GET "x";
        $resultado = []
            if($a <= 0 || >=50){
                echo "O primeiro número da equação é negativa ou igual a zero"
            }
            else if($b <= 0 || >=50){
                echo "O segundo número da equação é negativa ou igual a zero"
            }
           else ($op == "*")
           $resultado = $a*$b;
    
        echo "O resultado é: $resultado";
    ?>      
    </body>