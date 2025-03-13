<?php
   session_start();

   require_once './functions.php';

   if (isset($_GET['length'])) {
    $length = $_GET['length'];
    
    // Verifica se sono stati selezionati dei set di caratteri
    $lowercase = isset($_GET['lowercase']) ? true : false;
    $uppercase = isset($_GET['uppercase']) ? true : false;
    $numbers = isset($_GET['numbers']) ? true : false;
    $symbols = isset($_GET['symbols']) ? true : false;
    
    // Verifica se almeno un set di caratteri è stato selezionato
    if ($length > 0 && ($lowercase || $uppercase || $numbers || $symbols)) {
        $_SESSION['password'] = generatePassword($length, $lowercase, $uppercase, $numbers, $symbols);
        $_SESSION['length'] = $length;
        header('Location: result.php');
        exit;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark">
    <div class="container">
        <h1 class="text-center text-secondary mt-3">Strong Password Generator</h1>
        <h3 class="mt-3 mb-3 text-center text-white">Genera la tua password</h3>
    
        <form method="GET" class="bg-white rounded p-3 d-flex flex-wrap justify-content-between">
            <div class="col-md-4">
                <label class="form-label" for="length">Lunghezza password</label>
                <input class="form-control w-50" type="number" name="length" id="length" min="1">
            </div>

            <div class="col-md-4">
                <h5>Seleziona i set di caratteri da usare</h5>
                <div>
                    <input type="checkbox" name="lowercase" id="lowercase" checked>
                    <label for="lowercase">Lettere minuscole</label>
                </div>
                <div>
                    <input type="checkbox" name="uppercase" id="uppercase" checked>
                    <label for="uppercase">Lettere maiuscole</label>
                </div>
                <div>
                    <input type="checkbox" name="numbers" id="numbers" checked>
                    <label for="numbers">Numeri</label>
                </div>
                <div>
                    <input type="checkbox" name="symbols" id="symbols" checked>
                    <label for="symbols">Simboli</label>
                </div>
            </div>

            <div class="col-md-12 mt-5 d-flex justify-content-center">
                <button class="btn btn-primary">Genera Password</button>
            </div>
        </form>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>