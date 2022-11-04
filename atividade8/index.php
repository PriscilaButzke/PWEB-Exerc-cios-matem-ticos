<!--8 . Desenvolver uma página PHP para efetuar o cálculo da quantidade de litros de combustível 
 gasta em uma viagem, utilizando um automóvel que faz 12 KM por litro. Para obter o cálculo,  
 o usuário deve fornecer o tempo gasto (TEMPO) e a velocidade média (VELOCIDADE) durante 
  a viagem. Desta forma, será possível obter a distância percorrida com a fórmula:

 DISTÂNCIA =  TEMPO * VELOCIDADE.


Possuindo o valor da distância, basta calcular a quantidade de litros de  combustível utilizada 
na viagem com a fórmula:

 LITROS_USADOS = DISTÂNCIA / 12. 

Ao final o  programa deve apresentar os valores da velocidade média (VELOCIDADE), 
tempo gasto na  viagem (TEMPO), a distância percorrida (DISTÂNCIA) 
e a quantidade de litros  (LITROS_USADOS) utilizada na viagem. -->

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Exercicio 7</title>
</head>

<body>
    <form action="index.php" method="POST">
        <div class="container">
            <div class="d-flex justify-content-center fs-2">Cálculadora da quantidade de litros de combustível gastos em
                uma viagem:</div>
                <div class="d-flex justify-content-center fs-3">Carro gastando 12Km/l</div>
            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-lg">Tempo gasto: </span>
                </div>
                <input type="number" name="tempo" class="form-control" aria-label="Large"
                    aria-describedby="inputGroup-sizing-sm">
            </div>

            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-lg">velocidade média: </span>
                </div>
                <input type="number" name="velocidade" class="form-control" aria-label="Large"
                    aria-describedby="inputGroup-sizing-sm">
            </div>


            <div class="d-flex justify-content-center">
                <button class="btn btn-primary m-1" type="submit" name="calcular">Calcular</button>
        </div>
        </div>

        <?php

        if(isset($_POST['calcular'])){
            $tempo = $_POST['tempo'];
            $velocidade = $_POST['velocidade'];
            $distancia = $tempo * $velocidade;
            $gasto = $distancia / 12; 

            echo "<p  class='text-center text-primary fs-3'> Velocidade: $velocidade  </p>";
            echo "<p  class='text-center text-primary fs-3'> Distância: $distancia </p>";
            echo "<p  class='text-center text-primary fs-3'> Velocidade: Tempo: $tempo  </p>";
            echo "<p  class='text-center text-primary fs-3'> Litros gastos: $gasto  </p>";
        }
        ?>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>