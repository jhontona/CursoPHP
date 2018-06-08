<!doctype html>

<html lang="es">

<head>
    <meta charset="utf-8">

    <title>PHP y MySQL</title>
    <meta name="description" content="PHP y MySQL template">
    <meta name="author" content="Jhontona.com">
</head>

<body>
    <?php
        $host = "localhost";
        $user = "jhontona";
        $password = "phpcurso1";
        $database = "test";

        $mysqli = new mysqli($host, $user, $password, $database);
        if ($mysqli->connect_errno) {
            echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }
        echo $mysqli->host_info . "\n";
    ?>
</body>

</html>