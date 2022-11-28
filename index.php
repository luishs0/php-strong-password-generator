<?php
session_start();
include_once __DIR__ . "/functions.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Password Generator</title>
</head>

<body>

    <div class="container mt-5">

        <h1>PASSWORD GENERATOR</h1>

        <form action="index.php" method="GET">
            <label for="length">Lunghezza</label>
            <input class="form-control mt-3" type="number" id="length" name="length">
            <button class="btn btn-primary mt-3 mb-3" type="submit">Submit</button>
        </form>

        <?php if ($length !== 0) { ?>
            <a href="password.php">Vedere la tua Password</a>
        <?php } ?>
        <?php
        createPassword($length, $caracters, $caracters_length, $password);
        ?>

    </div>
</body>

</html>