<?php
/////////////////////////////////////
////////variables gloabales//////////
/////////////////////////////////////
define("servidor","localhost");
define(basededatos,dbperrona);
define(usuario,lectura);
define(password,mipasswored);
function conectar(){
    if(!($conexion=mysqli_connect(servidor,usuario,password,basededatos))){
        echo"Eror conectando a la base de datos";
        exit();
    }
    return $conexion;
}
function agregar_usuario($usuario,$password,$nombre,$apellido,$correo){
    $password =password_hash($password,PASSWORD_DEFAULT);
    $sql="INSERT INTO usuarios(usuario,password,nombre,apellido,correo)
     VALUES(?,?,?,?,?)";
    $conexion=conectar();
    $stml=mysqli_prepare($conexion,$sql);
    if(stml){
        mysqli_stmt_bind_param($smtl,$"sssss",$usuario,$password,$nombre,$apellido,$correo);
        if(mysqli_stmt_execute($stml)){
            echo "Registro exitoso";
        }
        else{
            echo "Ocurrio un error al ejecutar la consulta";
        }
        mysqli_stmt_close($stml);
    }else{
        echo "Ocurrio un error al ejecutar la consulta";
    }
}
?>