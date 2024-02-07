<html>
<head>
    <title>PHP BASIC</title>
</head>
<body>
    <?php 
    $string = "Hello, World!";

    echo " String original: " . $string . "<br>";

    $uppercase_string = strtoupper($string);
    echo "String en mayusculas: " . $uppercase_string . "<br>";

    $length = strlen($string);
    echo "Longitud del string: " . $length . "<br>";

    $reversed_string = strrev($string);
    echo "String invertido: " . $reversed_string . "<br>";

    $new_string = " Este es el curso de PHP ";
    $concatenated_string = $string . $new_string;
    echo "String concatenado: " . $concatenated_string . "<br>";
    ?>
</body>
</html>