<?php 


    include 'conexion_be.php';

      $nombre_empresa = $_POST['nombre_empresa'];
      $nit  = $_POST['nit '];
      $num_empleados = $_POST['num_empleados'];
      $num_practicantes = $_POST['num_practicantes'];
      $importa = $_POST['importa'];
    

     $query = "INSERT INTO empresas(nombre_empresa,nit, num_empleados, num_practicantes, importa) 
               VALUES ('$nombre_empresa','$nit','$num_empleados','$num_practicantes','$importa')";



     

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
        <script>
             alert("Datos registrados exitosamente");
             window.location = "../datosManuales.php";
        </script>
        ';
    }else{

        echo '
           <script>
           alert("intentalo de nuevo, datos no registrados")
            window.location = "../datosManuales.php";
           </script>
        ';
    }

    mysqli_close($conexion);
?>