<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SerieApp</title>
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora&display=swap">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/serie.css">
    
</head>

<body>
    <header>
        <div class="container">
            <h1>Bienvenido a la SerieApp</h1>
        </div>
    </header>

    <main>
        <div class="container">

            <h2>Bienvenido a SerieApp - Conversor</h2>
            <p> Un generador de serie con template y estrategia</p>
            <br>
        </div>
        <?php if (!empty($validacion)): ?>
                <div class="alert alert-danger" role="alert">
                    <?= $validacion ?>
                </div>
            <?php endif; ?>

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-4">
                <form class="calculator-container" action="/conversor" method="post">
                    <label for="num">Cantidad de Series:</label>
                    <input type="number" id="num" name="num" placeholder="Ingrese el número">

                    <label for="base">Base:</label>
                    <select id="base" name="base" required>
                        <option value="2">Serie F= 1+3+6+10+15+..</option>
                        <option value="8">Serie F= 1+10+100+1000..</option>
                        <option value="16">Serie F= 1+10+100+1000..</option>
                    </select>

                    <button class="add-button" type="submit">Convertir</button>
                </form>
            </div>

            <div class="col-md-4">
                <div class="result-container">
                    <h2>Resultado:</h2>
                    <p><?= !empty($r) ? $r : "Ingresa un número para la serie :)"; ?></p>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>

        <br>

    </main>

    <footer>
        <div class="container">
            <p>&copy; <?php echo date("Y"); ?> SerieApp</p>
        </div>
    </footer>
</body>

</html>