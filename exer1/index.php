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
    <div>
        <form action="exer1.php" method="POST" class="container text-center col-md-6 mt-3 border border-1">
            <h1 class="mt-3">Rifa da felicidade</h1>
            <p>Item da rifa</p>
            <input class="form-control mb-3" id="itemRifa" placeholder="Ex: Cesta de café da manhã" name="item">
            <p>Data do evento</p>
            <input type="date" class="mb-3 form-control" name="data">
            <p>Quantidade de n°</p>
            <input type="number" class="form-control mb-3" id="quant" placeholder="Ex: 30" name="quant">
            <p>Valor R$</p>
            <input type="number" class="form-control mb-3" id="valor" placeholder="Ex: 2,00" name="valor">

            <button class="btn btn-primary btn-lg" type="submit">Gerar</button>

        </form>
    </div>
</body>

</html>