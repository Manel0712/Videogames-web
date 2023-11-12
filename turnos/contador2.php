<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
        if(!empty($_POST)) {
            session_start();
            $_SESSION["numero"] = $_POST["numero"];
            $numero = $_SESSION["numero"];
            echo "$numero";
            session_abort();
        }
        else {
            echo "NULL";
        }
        ?>
    </div>
</body>
</html>