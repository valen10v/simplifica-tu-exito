<?php 
session_start();
include('conexion_be.php');

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
//$contrasena = hash('sha512', $contrasena);

$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo' AND contrasena = '$contrasena'");

if(mysqli_num_rows($validar_login) > 0){
    $usuario = mysqli_fetch_assoc($validar_login);
    $_SESSION['usuario'] = $correo;

    // Verifica el id_cargo y redirige
    if ($usuario['id_cargo'] == 1) {
        header("Location: ../bienvenida_admin.php");
    } elseif ($usuario['id_cargo'] == 2) {
        header("Location: ../bienvenida_clientes.php");
    } else {
        // Redirige a una página por defecto si es necesario
        header("Location: ../bienvenida.php");
    }
    exit;
} else {    
    echo '
    <script>
        alert("Usuario no existe, por favor verifique los datos introducidos");
        window.location = "../index.php";
    </script>
    ';
    exit;
}
?>
