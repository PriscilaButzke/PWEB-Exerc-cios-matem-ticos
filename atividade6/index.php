<!--5. Construir uma página PHP que efetue o cálculo do salário líquido de um professor. Para  fazer este 
programa, você deverá possuir alguns dados, tais como: valor da hora aula, número  de horas 
trabalhadas no mês e percentual de desconto do INSS. Em primeiro  lugar, deve-se  estabelecer 
qual será o seu salário bruto para efetuar o desconto e ter o valor do salário  líquido. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Exercicio 6</title>
</head>

<body>
    <form action="index.php" method="POST">
        <div class="container">
            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-lg">Valor horas: </span>
                </div>
                <input type="number" name="valor" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
            </div>

            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-lg">Horas trabalhadas: </span>
                </div>
                <input type="number" name="horas" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
            </div>


            <<div class="d-flex justify-content-center">
                <button class="btn btn-primary m-1" type="submit" name="calcular">Calcular</button>
        </div>
        </div>
        
        <?php

        if (isset($_POST['calcular'])) {
            $valorHora = $_POST['valor'];
            $horasTotais = $_POST['horas'];
            $salarioBruto = $valorHora * $horasTotais;
        }

        if ($salarioBruto <= 1212) {
            $INSS = $salarioBruto * 0.075;
        } else if ($salarioBruto < 2427.36) {
            $INSS = $salarioBruto * 0.09;
        } else if ($salarioBruto < 3641.04) {
            $INSS = $salarioBruto * 0.12;
        } else {
            $INSS = $salarioBruto * 0.14;
        }

        $salarioLiquido = $salarioBruto - $INSS;
        echo "<p  class='text-center text-primary fs-3'> Salário líquido: $salarioLiquido </p>";

        ?>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>