<!--5. Desenvolva uma página PHP que calcule a média de 3 valores e mostre o resultado. -->
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
<form action="index.php" method="POST">

form action="index.php" method="post" class="form-control form-control-sm">
        <div class="container">
            <div class="d-flex justify-content-center fs-2">Calculadora de média:</div>

            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-lg">A: </span>
                </div>
                <input type="number"  name="n1" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
            </div>

            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-lg">B: </span>
                </div>
                <input type="number"  name="n2" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
            </div>

            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-lg">C: </span>
                </div>
                <input type="number"  name="n3" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
            </div>
            <div class="d-flex justify-content-center">
                <button class="btn btn-primary m-1" type="submit" name="calcular">Calcular</button>
            </div>
 
        </div>
        <div class="d-flex justify-content-center fs-2">Resultado:</div>


        <?php
        if(isset($_POST['calcular'])){
            $n1 = $_POST['n1'];
            $n2 = $_POST['n2'];
            $n3 = $_POST['n3'];

            $media = ($n1 + $n2 + $n3)/3;
            echo "<p  class='text-center text-primary fs-3'> Média: $media </p>";
        }
        ?>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>