<html>
<head>
    <title>PHP BASIC</title>
</head>
<body>
    <?php 
    function contar($to = 10, $paso = 1) {
        for ($i = 1; $i <= $to; $i = $i + $paso) {
            echo $i . "\n";
        }
    }
    contar();
    
    contar(20, 2);
    ?>
</body>
</html>