<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    -->
    <link rel="stylesheet" language="javascript" href="../bootstrap/css/bootstrap.min.css">
    <!-- Sweet alert-->
    <link rel="stylesheet" href="../sw/dist/sweetalert2.min.css">
    <!-- Link para animation -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script type="text/javascript" language="javascript" src="../js/Funciones.js"></script>
</head>

<body>
    <?php
    include("../Conexion/Conexion.php");

    //clase empleado 
    class Usuario
    {
        private $usuario;

        public function __construct()
        {
            $this->usuario = array();
        }

        //mostar Empleados

        public function insertar($user, $pasw,$mail)
        {
            $sql = "INSERT INTO `usuario`(`usuario`, `contraseña`, `correo`) VALUES ('$user','$pasw','$mail')";
            $res = mysqli_query(Conexion::conectar(), $sql) or die("Error en la consulta sql al insertar usuario");
            echo " 
                <script type = 'text/javascript'>
                Swal.fire({
                    title: 'Exito',
                    text: 'El ingreso se registro correctamente',
                    icon: 'success',
                    showClass: {
                        popup: 'animate__animated animate__fadeInDown'
                      },
                      hideClass: {
                        popup: 'animate__animated animate__fadeOutUp'
                      }
                }).then((result)=>{
                        if(result.value){
                            window.location ='../Home/home.php';
                        }
                    });
                </script>
            ";
        }

        //Crear una función para capturar el id de los botones de acción 
        public function usuarioID($id)
        {
            $sql = " Select * from usuario where idUsuario = '$id'";
            // $sql ="select * from empleado where cedula = '$id'";
            $res = mysqli_query(Conexion::Conectar(), $sql) or die("Error en la consulta sql al buscar");
            if ($reg = mysqli_fetch_assoc($res)) {
                $this->usuario[] = $reg;
            }
            return $this->usuario;
        }
    }


    ?>
    <script src="../jquery/jquery-3.6.0.min.js"></script>
    <script src="../sw/dist/sweetalert2.all.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>

</body>

</html>