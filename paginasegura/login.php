<?php
session_start();
//usuario predifinidos
$usuarios=["usuario1"=>"123456","admin"=>"admin"];
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $user = $_POST["usuario"];
    $pass =$_POST["llave"];
    if(isset($usuarios[$user])&& $usuarios[$user]==$pass){
        $_SESSION["usuario"]=$user;
        header("location:main.php");
        exit();
    }else{
        $error ="Usuario o password incorrecto";
    }
}
?>
<HTML>
    <HEAD>
        <TITLE>Login Page</TITLE>
    </HEAD>
    <BODY>
        <form method="POST" action="login.php">
            <LABEL>Usuario</LABEL>
            <INPUT TYPE= "TEXT" NAME= "usuario"><br>
            <LABEL>Contraseña</LABEL>
            <INPUT TYPE= "PASSWORD" NAME= "llave"><br>
            <BUTTON type="submit">Ingresar</BUTTON>
        </form>
        <?php
        if(isset($error)) echo "<p>".$error."</p>";
        ?>
        <a href="nuevo_usuario.php">Sign Up</a>
    </BODY>
</HTML>