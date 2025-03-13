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
<body>
    <div class="container">
        <h1 class="mt-3">Password Generata</h1>
        <div class="mt-3 mb-3">
            <?php echo "La tua password di $length caratteri è: $password" ?>
        </div>
        <a href="index.php" class="btn btn-primary">Genera un'altra password</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
