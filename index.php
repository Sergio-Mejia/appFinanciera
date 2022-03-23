<?php
    include('./Class/class_ingreso.php');
?>

<!doctype html>
<html lang="es">

<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    -->
    <link rel="stylesheet" language="javascript" href="./bootstrap/css/bootstrap.min.css">

    <!-- Sweet alert-->
    <link rel="stylesheet" href="./sw/dist/sweetalert2.min.css">

    <!-- Iconos -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script type="text/javascript" language="javascript" src="./js/funciones.js"></script>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&family=Outfit:wght@300&family=Poppins:wght@300&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css">

    <title>Aplicación financiera</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
        <h1 style="color:white;">Aplicación Gestión Financiera</h1>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3 align = "center">Ingresos</h3>
                <table class="table caption-top">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Valor</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $ing = new Ingresos();
                            $reg = $ing->Mostrar();

                            for ($i = 0; $i < count($reg); $i++) {
                                echo "<tr>";
                                echo "<td>" . $reg[$i]['id'] . "</td>";
                                echo "<td>" . $reg[$i]['descripcion'] . "</td>";
                                echo "<td>" . $reg[$i]['valor'] . "</td>";
                        ?>
                        <td>
                            <button class="btn btn-warning" onclick=window.location="./editarI.php?id=<?php echo $reg[$i]['id']; ?>">
                                <span class="material-icons">mode_edit</span>
                            </button>
                            <button class="btn btn-danger" onclick="eliminar('eliminarI.php?id=<?php echo $reg[$i]['id']; ?>')">
                                <span class="material-icons">cancel</span>
                            </button>
                        </td>
                        <?php
                        }
                    ?>
                    </tr>
                    </tbody>
                    
                </table>
                <tr>
                        <form action="./Ingreso/insertar.php" method="POST">
                                <td></td>
                                <td colspan="2">
                                    <input type="text" id="descripcion" name="descripcion" placeholder="Descripción">
                                </td>
                                <td>
                                    <input type="number" id="valor" name="valor" placeholder="Valor">
                                </td>
                                <td>
                                    <button class="btn btn-success">
                                    <span class="material-icons">add_circle</span>
                                    </button>
                                </td>
                            </tr>
                        </form>
            </div>
            <div class="col-lg-6">
                <h3 align = "center">Egresos</h3>
                <table class="table caption-top">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="./jquery/jquery-3.6.0.min.js"></script>
    <script src="./sw/dist/sweetalert2.all.min.js"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>
</body>

</html>