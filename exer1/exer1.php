<!doctype html>
<html lang="pt">

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
    <div class="border border-info container text-left col-md-6 mt-3 rounded">
        <h1 class="text-center">Rifa:</h1>
        <p>Item rifado: </p> <?php echo $_POST['item']; ?>
        <p>Data: </p> <?php $data = $_POST['data'];echo $data; ?>
        <p>Quantidade de números: </p> <?php echo $_POST['quant']; ?>
        <p>Valor: </p> <?php echo $_POST['valor']; ?>
    </div>

</body>

</html>