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
            <h4>stampa password</h4>
        </form>
    </div>

</body>

</html>