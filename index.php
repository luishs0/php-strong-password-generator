<?php
$length = intval($_GET["length"] ?? 0);

$caracters = "ABCDEFGHIJKLMNÑOPQRSTUVWXYZabdcefghijklmnñopqrstuvwxyz0123456789+*^-_<>¿?¡![]#$%&/()={}";
$caracters_length = strlen($caracters);
$password = "";

function createPassword($length, $caracters, $caracters_length, $password)
{

    for ($i = 0; $i < $length; $i++) {
        $cur_caracter = $caracters[rand(0, ($caracters_length - 1))];
        $password = $password . $cur_caracter;
    }
    return $password;
}

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

        <form action="index.php" method="GET">
            <label for="length">Lunghezza</label>
            <input class="form-control mt-3" type="number" id="length" name="length">
            <button class="btn btn-primary mt-3 mb-3" type="submit">Submit</button>
        </form>

        <h5>Password:</h5>

        <?php
        echo createPassword($length, $caracters, $caracters_length, $password);
        ?>

    </div>
</body>

</html>