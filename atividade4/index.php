<!--4.  Desenvolva  uma  função  em  PHP  que  calcule  a  fórmula  de  báskara.  O  usuário  deve informar
os valores de a, b e c. Fórmulas em anexo ou PPT -->
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }
    </style>
</head>

<body>
    <form action="index.php" method="post" class="form-control form-control-sm">
        <div class="container">
            <div class="d-flex justify-content-center fs-2">Calculadora:</div>

            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-lg">A: </span>
                </div>
                <input type="number" min="0" name="a" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
            </div>

            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-lg">B: </span>
                </div>
                <input type="number" min="0" name="b" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
            </div>

            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-lg">C: </span>
                </div>
                <input type="number" min="0" name="c" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
            </div>
            <div class="d-flex justify-content-center">
                <img src="../img/baskara.PNG" alt="formulas">
            </div>
            <div class="d-flex justify-content-center">
                <button class="btn btn-primary m-1" type="submit" name="calc1">Calcular</button>
            </div>
 
        </div>
        <div class="d-flex justify-content-center fs-2">Resultado:</div>

        <?php
        if (isset($_POST['calc1'])) {
            $a = $_POST['a'];
            $b = $_POST['b'];
            $c = $_POST['c'];

           $delta = sqrt(pow($b,2));
           
           $x1 = (-$b + $delta)/(2 * $a);
           $x2 =  (-$b - $delta)/(2 * $a);

            echo " <p  class='text-center text-primary fs-3'> D = $x </p>";
        }
        ?>
    </form>
</body>

</html>