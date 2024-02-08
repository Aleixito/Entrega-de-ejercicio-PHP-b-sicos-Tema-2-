<html>
<head>
    <title>PHP BASIC</title>
</head>
<body>
    <?php
        
        $integer = 42;
        
        $double = 3.1415;

        $string = "Buenas noches";

        $boolean = true;


        echo "Integer: " . $integer . "<br>";

        echo "Double: " . $double . "<br>";

        echo "String: " . $string . "<br>";

        echo "Boolean: " . ($boolean ? "true" : "false") . "<br>";


        define("Mi_Nombre", "Aleix");
        print "<h1>" . Mi_Nombre . "</h1>";
    ?>
</body>
</html