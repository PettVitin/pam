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
        json_decode($resultado);
    ?>      
