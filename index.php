<?php
function generate_password($length)
{
    $caratteri = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+{}|:"<>?-=[]\;,./';
    $password = '';
    $lunghezza_password = strlen($caratteri) - 1;

    for ($i = 0; $i < $length; $i++) {
        $password .= $caratteri[mt_rand(0, $lunghezza_password)];
    }

    return $password;
}

// Verifico se è stata inviata una richiesta POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Verifico se è stata specificata la lunghezza della password
    if (isset($_POST['lunghezza_password'])) {
        //ottengo la lunghezza della password e la genero
        $lunghezza = intval($_POST['lunghezza_password']);
        $password_generata = generate_password($lunghezza);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container my-4">
        <h1>PHP Strong Password Generator</h1>

        <form action="index.php" method="POST" class="mt-4">

            <label for="lunghezza_password"><strong>Lunghezza Password</strong></label>
            <input type="number" class="form-control" id="lunghezza_password" name="lunghezza_password">
            <button type="submit">Genera</button>

        </form>

        <!-- stampo la password solo se è stata generata -->
        <?php if (isset($password_generata)) : ?>
            <h4>La password generata è: <?php echo $password_generata; ?> </h4>
        <?php endif; ?>
    </div>

</body>

</html>