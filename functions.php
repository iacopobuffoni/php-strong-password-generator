<?php
function generatePassword ($password, $characters) {
    if ($_GET['pswlength'] < 8) {
        echo 'Lunghezza fuori dagli standard';
    } elseif ($_GET['pswlength'] > 32) {
        echo 'Lunghezza fuori dagli standard';
    } else {
        for ($i = 0; $i < $_GET['pswlength']; $i++) {
            $password .= $characters[rand(0, strlen($characters) - 1)];
        }
    }

    return $password;
}
?>