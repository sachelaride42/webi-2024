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
    <div class="row">
        <?php
        if (isset($_REQUEST['notices'])) {
            $_REQUEST['size'] = '3';
            foreach ($_REQUEST['notices'] as $key => $value) {
                $_REQUEST['notice'] = $value;
                include('notices.php');
            }
        } else if (isset($_REQUEST['notice'])) {
            $_REQUEST['size'] = '6';
            include_once('notices.php');
        }
        ?>
    </div>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>