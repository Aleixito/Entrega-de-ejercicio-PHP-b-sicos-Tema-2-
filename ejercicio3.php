<html>
<head>
    <title>PHP BASIC</title>
</head>
<body>
    <?php
    function calculadora($num1, $num2, $operacion) {
        $resultado = 0;
    
        switch ($operacion) {
            case 'suma':
                $resultado = $num1 + $num2;
                break;
            case 'resta':
                $resultado = $num1 - $num2;
                break;
            case 'multiplicacion':
                $resultado = $num1 * $num2;
                break;
            case 'division':
                if ($num2 != 0) {
                    $resultado = $num1 / $num2;
                } else {
                    echo "No se puede dividir por cero.";
                }
                break;
            default:
                echo "Operación no válida.";
        }
    
        return $resultado;
    }
    
    $x = 5;
    $y = 3;
    $n = 2.5;
    $m = 1.5;
    
    echo "Valores de X e Y: " . $x . " " . $y . "<br>";
    echo "Suma: " . ($x + $y) . "<br>";
    echo "Resto: " . ($x % $y) . "<br>";
    echo "Producto: " . ($x * $y) . "<br>";
    echo "Módulo: " . abs($x - $y) . "<br>";
    
    echo "Valores de N e M: " . $n . " " . $m . "<br>";
    echo "Suma: " . ($n + $m) . "<br>";
    echo "Resta: " . ($n - $m) . "<br>";
    echo "Producto: " . ($n * $m) . "<br>";
    echo "Módulo: " . abs($n - $m) . "<br>";
    
    $resultado_suma = calculadora($x, $y, 'suma');
    $resultado_resta = calculadora($x, $y, 'resta');
    $resultado_multiplicacion = calculadora($x, $y, 'multiplicacion');
    $resultado_division = calculadora($x, $y, 'division');
    
    echo "Resultado suma: " . $resultado_suma . "<br>";
    echo "Resultado resta: " . $resultado_resta . "<br>";
    echo "Resultado multiplicación: " . $resultado_multiplicacion . "<br>";
    echo "Resultado división: " . $resultado_division . "<br>";
    ?>
</body>
</html>