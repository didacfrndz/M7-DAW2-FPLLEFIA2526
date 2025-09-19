<?php
    $pelicula1= "Bienvenidos al fin del mundo";
    $pelicula2= "Valerian y la ciudad de los mil planetas";
    $pelicula3= "Niños grandes";
    $pelicula4= "El lobo de Wall Street";
    $pelicula5= "El hombre de acero";
    $imgPeli1= "assets/bienvenidos.jpg";
    $imgPeli2= "assets/valerian.jpg";
    $imgPeli3= "assets/ninos.jpg";
    $imgPeli4= "assets/lobo.jpg";
    $imgPeli5= "assets/superman.jpg";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body class="bg-dark text-white">
    <div class="container text-center mt-5">
        <h1>Lista de mis películas favoritas</h1>
        <h2>Didac Fernandez</h2>
    </div>
    
    <div class="container bg-secondary">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Imagen</th>
                </tr>
            </thead>
            <tbody>
                <?php
                        for($i=1; $i <=5 ; $i++) { 
                                echo "<tr>";
                                echo "<th scope='row'>$i</th>";
                                $nombrePeli = "pelicula".$i;
                                $imgPeli = "imgPeli".$i;
                                //El doble signo de $ es para variables variables
                                echo "<td>".$$nombrePeli."</td>";
                                echo "<td><img src='".$$imgPeli."' width='100px'></td>";
                                echo "</tr>";
                        }
                ?>
            </tbody>
        </table>

    </div>
        
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</html>
   
