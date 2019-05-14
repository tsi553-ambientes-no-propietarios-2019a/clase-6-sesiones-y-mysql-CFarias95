<?php
session_start();
if($_POST){
    if(isset($_POST['usuario']) and isset($_POST['password'])){
        $usuario=$_POST['usuario'];
        $contraseña=$_POST['password'];
        if($usuario=='Carlos' and $contraseña=='carlos1234'){
            $_SESSION['user'] = "$usuario"; 
            header('Location: inicio.php');
            exit();
        }else{
            header('Location: ../index.php?usuarios o contraseña incorrectos');
        }
    }

}else{
    header('Locarion: ../index.php');
}