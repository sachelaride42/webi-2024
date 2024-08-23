<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
    $weigth = filter_input(INPUT_POST, "weigth", FILTER_VALIDATE_FLOAT);
    $height = filter_input(INPUT_POST, "height", FILTER_VALIDATE_FLOAT);
    if(!empty($name) && !empty($weigth) && !empty($height)){
        var_dump($_POST);
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <div class="container">
        <form method="POST">
            <div class="row">
                <div class="col s4 offset-s4">
                    <div class="row">
                        <h4 class="center">Formulário IMC</h4>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="name" name="name" type="text" class="validate">
                            <label for="name">Name</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="weigth" name="weigth" type="number" step="0.01" class="validate">
                            <label for="weigth">Peso</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="height" name="height" type="number" step="0.01" class="validate">
                            <label for="height">Altura</label>
                        </div>
                        <div class="input-field col s12 right-align">
                            <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                                <i class="material-icons right">send</i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>