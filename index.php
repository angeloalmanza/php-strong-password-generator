<?php
function generatePassword($lunghezza) {
    $characters = array_merge(range(0, 9), range("a","z"), range("A","Z"), str_split('!@#$%^&*()-_=+'));
    $password = "";
    $max = count($characters) - 1;

    for ($i = 0; $i < $lunghezza; $i++) {
        $password .= $characters[rand(0, $max)];
    }

    return $password;
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
    <h1 class="mt-3">Genera la tua password</h1>

    <form method="GET">
        <div>
            <label class="form-label" for="length">Quanti caratteri deve avere la tua password?</label>
            <br>
            <input class="form-control w-25" type="number" name="length" id="length" min="1">
        </div>
        <button class="btn btn-primary mt-3 mb-5">Genera Password</button>
    </form>


   <?php
   $length = $_GET['length'];
   if(isset($length) && $length > 0) {
    $password = generatePassword($length);
    echo "La tua password di $length caratteri è: $password"; 
   }    
    ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>