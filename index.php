<?php 
    include __DIR__ . '/logic.php';
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"
		defer></script>
</head>
<body>
    <div class="container" style="width: 1000px; margin: 10px auto;">
        <h1> Generatore di Password a Prova di Hacker</h1>
        <form action="" method="get" class="mt-5">
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="pass_number" class="col-form-label"> Lunghezza Password</label>
                </div>
                <div class="col-auto">
                    <input type="number" id="pass_number" class="form-control" name="pass_number" min="1" max="15">
                </div>
            </div>
        </form>
    </div>
    <div class="container mt-4" style="width: 1000px; margin: 0 auto;">
        <div class="alert alert-info" role="alert">
            SUPER-PASSWORD: <?= GeneratePassword($passLength, $letters, $numbers, $symbols) ?>
        </div>
    </div>
</body>
</html>