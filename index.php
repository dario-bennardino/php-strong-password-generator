<?php
require_once __DIR__ . '/data/functions.php'

// Verifico se è stata inviata una richiesta POST


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container my-4">
        <h1 class="text-center p-4 ">PHP Strong Password Generator</h1>

        <form action="index.php" method="POST" class="mt-4">

            <label for="lunghezza_password"><strong>Lunghezza Password</strong></label>
            <input type="number" class="form-control" id="lunghezza_password" name="lunghezza_password">
            <div class="buttons mt-4 ">
                <button type="submit" class="btn btn-primary">Genera</button>
                <button type="submit" class="btn btn-secondary" name="reset">Reset</button>
            </div>


        </form>

        <!-- stampo la password solo se è stata generata -->
        <?php if (isset($password_generata)) : ?>
            <h4>La password generata è: <?php echo $password_generata; ?> </h4>

        <?php endif; ?>
    </div>

</body>

</html>