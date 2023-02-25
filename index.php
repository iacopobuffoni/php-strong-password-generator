<?php
include __DIR__ . '/vars.php';
include __DIR__ . '/functions.php';
$_GET['pswlength'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP Strong Password Generator </title>
</head>

<body>
    <form action="" method="get">
        <input type="number" name="pswlength" id="" required min="8" max="32" placeholder="Inserisci la lunghezza della password">
        <h1> PASSWORD GENERATA : <?php echo generatePassword($password, $characters) ?> </h1>
    </form>
</body>

</html>