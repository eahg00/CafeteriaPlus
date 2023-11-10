<?php



if(!empty($_POST['btnenviar'])) {
    if (empty($_POST["cemail"]) and empty($_POST["pass"])){
        echo '<div class="alert alert-danger">LOS CAMPOS ESTAN VACIOS</div>';
    }else{

    $correo = $_POST["cemail"];
    $contraseña = $_POST["pass"];

    $sql=$conexion->query(" select * from usuarios where correo = '$correo' and contraseña = '$contraseña'");
    
    
    if($datos = $sql -> fetch_object()){
        header("location:admin.php");
    } else {
        echo '<div class="alert alert-danger">Acceso Denegado</div>';
    }
}
 }
?>