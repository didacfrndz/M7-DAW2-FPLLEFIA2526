<?php
 function aleatorio (){ 
    $random = rand(0, 100);
    if($random % 2 == 0){
        echo "El numero $random es Par";
    }else{
        echo "El numero $random es Inpar";
    }  
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="bg-dark text-white card" style="width: 30rem;">
        <div class="container mt-5">
            <h1>Ejercicio 3: Nombre aleatorio; par o impar</h1>
            <?php aleatorio();?>
            <a href="../index.php" class="btn btn-primary">Volver</a>
        </div>
        

    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</html>