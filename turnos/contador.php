<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="formulario" name="formulario" method="post">
        <input type="text" name="numero" id="numero" />
        <button type="submit" name="aumentar" id="aumentar">Siguiente</button>
    </form>
    <script type="text/javascript" src="js/code.jquery.com_jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#formulario').submit(function(e) {
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: 'contador.php',
                    data: $(this).serialize(),
                    success: function(response) {
                        var jsonData = JSON.parse(response);
                        if (jsonData.success == "1") {
                            location.href = 'contador2.php';
                        }
                        else {
                            alert('Error al accedir a les dades');
                        }
                    }
                });
            });
        });
</script>
</body>
</html>
