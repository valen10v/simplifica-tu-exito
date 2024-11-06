<?php 


    include 'conexion_be.php';

      $cedula = $_POST['cedula'];
      $nombre_completo = $_POST['nombre_completo'];
      $correo = $_POST['correo'];
      $usuario = $_POST['usuario'];
      $contrasena = $_POST['contrasena'];
      $tipo_persona = $_POST['tipo_persona'];
      $telefono = $_POST['telefono'];

      
      //encriptamiento de contraseña
      $contrasena = hash('sha512', $contrasena);

     $query = "INSERT INTO usuarios(cedula,nombre_completo, correo, usuario, contrasena, tipo_persona, telefono) 
               VALUES ('$cedula','$nombre_completo','$correo','$usuario','$contrasena','$tipo_persona', $telefono)";



     // verificar que el correo no se repita en la base de datos 
     $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios  WHERE correo='$correo' ");


     if (mysqli_num_rows($verificar_correo) > 0){
          echo'
          <script>
            alert("Este correo ya esta registrado, intenta otro diferente");
             window.location = "../index.php";
          </script>
          ';
          exit();
     }
      // verificar que el Usuario no se repita en la base de datos 
      $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios  WHERE usuario='$usuario' ");


      if (mysqli_num_rows($verificar_usuario) > 0){
           echo'
           <script>
             alert("Este usuario ya esta registrado, intenta otro diferente");
              window.location = "../index.php";
           </script>
           ';
           exit();
      }


    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
        <script>
             alert("Usuario registrado exitosamente");
             window.location = "../index.php";
        </script>
        ';
    }else{

        echo '
           <script>
           alert("intentalo de nuevo, usuario no registrado")
            window.location = "../index.php";
           </script>
        ';
    }

    mysqli_close($conexion);
?>