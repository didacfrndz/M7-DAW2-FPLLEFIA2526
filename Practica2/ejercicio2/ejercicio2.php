<?php
function multiplicar(){
    for ($base = 1; $base <= 10; $base++) {
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $base * $i;
            echo "<div class='tabla'>$base * $i = $resultado</div>";
            if ($i == 10) {
                echo "<br>";
            }
        }
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .tabla {
            border: 1px solid black;
            display: inline-block;
            width: 100px;
            text-align: center;
            margin: 2px;
            padding: 5px;
            background-color: white;
            color: black;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body class="bg-dark text-white">
    <div class="container mt-5">
        <?php multiplicar(); ?>
        <a href="../index.php" class="btn btn-primary">Volver</a>
    </div>
    

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</html>