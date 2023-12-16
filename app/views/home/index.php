<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SerieApp</title>
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora&display=swap">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    
</head>

<style>
body {
    font-family: "Lora", serif;
    background-color: #f9f9f9;
    color: #333;
    margin: 10px 15px;
}

/* Estilo del encabezado */
header {
    background-color: #29b97d;
    color: #fff;
    text-align: center;
    padding: 20px 0;
    border: 1px solid #29b97d;
}

header h1 {
    font-size: 36px;
}

/* Estilo del contenido principal */
main {
    max-width: 100%;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border: 1px solid #29b97d;
}

main h2 {
    font-size: 24px;
    margin-bottom: 10px;
}

main p {
    font-size: 16px;
    line-height: 1.5;
}

/* Estilo del formulario calculadora */
form.calculator-container {
    background-color: #29b97d;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    padding: 20px;
    width: 300px;
    text-align: center;
}

form.center-form {
    margin: 0 auto;
    max-width: 400px; /* Adjust the max-width as needed */
}

form label {
    font-weight: bold;
    font-size: 18px;
    display: block;
    margin-bottom: 5px;
}

form input[type="text"],
form input[type="date"] {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    margin-bottom: 20px;
    border: 1px solid #29b97d;
    border-radius: 5px;
    background-color: #fff;
    color: #333;
    font-size: 16px;
    appearance: none;
}

select {
    position: relative;
    width: 100%;
    padding: 10px 20px 10px 10px;
    margin-top: 5px;
    margin-bottom: 20px;
    border: 1px solid #29b97d;
    border-radius: 5px;
    background-color: #fff;
    color: #333;
    font-size: 16px;
    appearance: none;
}

select::after {
    content: '\25BC';
    position: absolute;
    top: 50%;
    right: 10px;
    transform: translateY(-50%);
    pointer-events: none;
}

select option {
    background-color: #fff;
    color: #333;
    font-size: 16px;
}

select option:hover {
    background-color: #29b97d;
    color: #fff;
}

/* Estilo del pie de página */
footer {
    text-align: center;
    padding: 10px 0;
    background-color: #29b97d;
    color: #fff;
    border: 1px solid #29b97d;
}

footer p {
    font-size: 14px;
}
/* Estilo del formulario calculadora y del contenedor de resultados */
.calculator-container,
.result-container {
    background-color: #29b97d;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    padding: 20px;
    text-align: center;
}

/* Ajustes para centrar horizontalmente */
.row {
    display: flex;
    justify-content: center;
}

.col-md-6 {
    flex: 0 0 auto;
    width: 50%;
}

/* Estilo para el formulario */
form.calculator-container {
    width: 100%; /* Ajustar el ancho según sea necesario */
}

form label {
    font-weight: bold;
    font-size: 18px;
    display: block;
    margin-bottom: 5px;
}

form input[type="text"],
form input[type="number"],
form input[type="date"],
select {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    margin-bottom: 20px;
    border: 1px solid #29b97d;
    border-radius: 5px;
    background-color: #fff;
    color: #333;
    font-size: 16px;
    appearance: none;
}

select::after {
    content: '\25BC';
    position: absolute;
    top: 50%;
    right: 10px;
    transform: translateY(-50%);
    pointer-events: none;
}

select option {
    background-color: #fff;
    color: #333;
    font-size: 16px;
}

select option:hover {
    background-color: #29b97d;
    color: #fff;
}

/* Estilo para el contenedor de resultados */
.result-container {
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    padding: 20px;
    max-width: 400px; 
    height: 80%;    
    margin-top: 20px;
}

</style>

<body>
    <header>
        <div class="container">
            <h1>Bienvenido a la SerieApp</h1>
        </div>
    </header>

    <main>
        <div class="container">

            <h2>Bienvenido a SerieApp - Generador</h2>
            <p> Un generador de serie con template, estrategia y proxy</p>
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
                <form class="calculator-container" action="/generadorSerie" method="post">
                    <label for="num">Cantidad de Series:</label>
                    <input type="number" id="num" name="num" placeholder="Ingrese el número">

                    <label for="tipo">Serie:</label>
                    <select id="tipo" name="tipo" required>
                        <option value="1">Serie F= 1+10+100+1000..</option>
                        <option value="2">Serie F= 1+3+6+10+15+..</option>
                 
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