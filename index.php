<?php
   session_start();

   require_once './functions.php';

   $length = $_GET['length'];
   if(isset($length) && $length > 0) {
    $_SESSION['password'] = generatePassword($length);
    $_SESSION['length'] = $length;
    header('Location: ./result.php');
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
<body>
    <div class="container">
        <h1 class="mt-3">Genera la tua password</h1>
    
        <form method="GET">
            <div>
                <label class="form-label" for="length">Quanti caratteri deve avere la tua password?</label>
                <br>
                <input class="form-control w-25" type="number" name="length" id="length" min="1">
            </div>
            <button class="btn btn-primary mt-3 mb-5">Genera Password</button>
        </form>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>