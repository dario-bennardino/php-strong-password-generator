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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Verifico se è stata specificata la lunghezza della password
    if (isset($_POST['lunghezza_password'])) {
        //ottengo la lunghezza della password e la genero
        $lunghezza = intval($_POST['lunghezza_password']);
        $password_generata = generate_password($lunghezza);
        // $_SESSION['password_generata'] = generate_password($lunghezza);
        // header("Location: ./partials/show_password.php");
    }
}

// Verifica se è stato inviato il modulo con il pulsante Reset
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['reset'])) {
    // Resetta la variabile della password generata
    $password_generata = '';
}
