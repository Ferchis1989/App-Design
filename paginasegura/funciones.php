<?php
/////////////////////////////////////
////////variables globales//////////
/////////////////////////////////////
define('servidor', 'localhost');
define('basededatos', 'dbperrona');
define('usuario', 'lectura');
define('password', 'mipasswored'); // ¡Recuerda cambiar esta contraseña por una segura!

function conectar()
{
    if (!($conexion = mysqli_connect(servidor, usuario, password, basededatos))) {
        echo "Error conectando a la base de datos";
        exit();
    }
    return $conexion;
}

function agregar_usuario($usuario, $password, $nombre, $apellido, $correo)
{
    $password = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO usuario (usuario, password, nombre, apellido, correo) VALUES (?, ?, ?, ?, ?)"; // Corregido: nombre de la tabla
    $conexion = conectar();
    $stmt = mysqli_prepare($conexion, $sql); // Corregido: variable $stmt

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "sssss", $usuario, $password, $nombre, $apellido, $correo); // Corregido: variable $stmt y tipo de datos

        if (mysqli_stmt_execute($stmt)) {
            echo "Registro exitoso";
            header("location:login.php"); // ¡Asegúrate de que la ruta sea correcta!
            exit(); // Agregado: para detener la ejecución del script después de la redirección
        } else {
            echo "Error al ejecutar la consulta: " . mysqli_error($conexion); // Mostrar el error específico de MySQL
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error en la preparación de la consulta: " . mysqli_error($conexion); // Mostrar el error específico de MySQL
    }

    mysqli_close($conexion); // Cerrar la conexión después de usarla
}
?>