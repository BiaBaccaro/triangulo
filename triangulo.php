<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Triângulo</title>
    <meta charset="utf-8">
</head>
<body>
    <h1>Atividade do triângulo!</h1>

    <form action="" method="post">
        Lado 1: <input type="number" name="ladoa"><br>
        Lado 2: <input type="number" name="ladob"><br>
        Lado 3: <input type="number" name="ladoc"><br>
        <input type="submit" name="submit" value="Ver">
    </form> 

    <?php
    if(isset($_POST["submit"])) {
        $a = $_POST["ladoa"];
        $b = $_POST["ladob"];
        $c = $_POST["ladoc"];

        if (($a + $b > $c) && ($a + $c > $b) && ($b + $c > $a)) {
            if ($a == $b && $b == $c)
                echo "Forma um triângulo equilátero";
            elseif ($a == $b || $a == $c || $b == $c)
                echo "Forma um triângulo isósceles!";
            else
                echo "Forma um triângulo escaleno!";
        } else {
            echo "Não forma triângulo!";
        }
    }
    ?>
</body>
</html>
