<?php
session_start();

$password = $_SESSION['password'];
$length = $_SESSION['length'];
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risultato Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark">
    <h1 class="mt-3 text-white text-center">Password Generata</h1>
    <div class="container d-flex justify-content-center align-items-center flex-wrap">
        <div class="mt-3 mb-3 text-white">
            <?php echo "La tua password di $length caratteri è: $password" ?>
        </div>
       <div class="col-md-12 d-flex justify-content-center align-items-center">
            <a href="index.php" class="btn btn-primary mt-3">Genera un'altra password</a>
       </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
