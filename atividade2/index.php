<!-- 2. Faça um programa em que o usuário indique um valor inteiros e imprima intervalo numérico 
 em cores diferentes de fonte para os
valores pares e impares tendo como inicio o valor um e  como término o valor digitado pelo usuário.-->
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
            <div class="box">
                <label>Digite o número:</label>
                <input name="valor" type="number" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
            </div>

            <div class="d-flex justify-content-center">
                <button class="btn btn-primary m-1" type="submit" name="m">Mostrar</button>
            </div>
        </div>
        <div class="d-flex justify-content-center fs-2">Resultado:</div>

        <?php
        if (isset($_POST['m'])) {
            $v = $_POST['valor'];
            for ($i = 1; $i <= $v; $i++) {
                if ($i % 2) {
                    echo " <p  class='text-center  text-primary fs-3'> $i </p>";
                } else {
                    echo " <p  class='text-center  text-danger fs-3'> $i </p>";
                }
            }
        }
        ?>
    </form>
</body>
</html>