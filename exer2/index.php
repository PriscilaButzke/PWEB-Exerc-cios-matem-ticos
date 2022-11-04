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
    <div class="container text-center col-md-6 mt-3 border border-1 rounded">
        <form action="exer2.php" method="GET"  >
            <h1>Escola XYZ</h1>
            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span  class="input-group-text" id="inputGroup-sizing-lg">Nome do aluno</span>
                </div>
                <input type="text" name="nome" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
            </div>

            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-lg">Nota 1:</span>
                </div>
                <input type="number" name="nota1" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
            </div>

            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-lg">Nota 2:</span>
                </div>
                <input type="number" name="nota2" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
            </div>
        
            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-lg">Quantidade de aulas:</span>
                </div>
                <input type="number"  name="aulas" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
            </div>

            <button type="submit" name="faltas" class="btn btn-success btn-lg btn-block">Calcular</button>
        </form>
    </div>
</body>

</html>