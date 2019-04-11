<?php

if(isset($_POST['button-submit'])){
    $user = $_POST['user'];
    $age = $_POST['age'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordConfirm = $_POST['confirmPassword'];


    if(empty($user) || empty($age) ||  empty($city) || empty($state)  ||  empty($email) || empty($password) || empty($passwordConfirm) ){
        $error = "Todos los campos son obligatorios";
        header("Location:index.php?error=".$error);
        exit();
    }

    elseif($age < 18){
        $error  = "Necesitas ser mayor de 18 años"; 
        header("Location:index.php?error=".$error);
        exit();    
    }

    elseif(strlen($password) < 6 || strlen($password) > 12 ){
        $error  = "La contraseña no puede ser menor a 6 caracteres ni mayor a 12"; 
        header("Location:index.php?error=".$error);
        exit();     
    }

    elseif($password != $passwordConfirm){
        $error  = "Las Contraseñas no coinciden"; 
        header("Location:index.php?error=".$error);
        exit();
    }

    elseif(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)){
        $error  = "Email invalido"; 
        header("Location:index.php?error=".$error);
        exit();
    }
    else{
        $passwordHashed = password_hash($password,PASSWORD_DEFAULT);
        $mysqli = new mysqli("localhost","root","","login");
        $sql = "SELECT * FROM users WHERE username = ?"; 
        $stmt = mysqli_stmt_init($mysqli);
        if(!$stmt->prepare($sql)){
            header("Location: index.php?error=sqlerror");
            exit();
        }else{
            $stmt->bind_param("s",$email);
            $stmt->execute();
            $result = $stmt->get_result();
            if($result > 0){
                $error = "El email ya ha sido registrado";
                header("Location: index.php?error=".$error);
                exit();              
            }else{
                $sql = "INSERT INTO users(username, email, password, age, city, state, ) VALUES ( ? , ?, ? , ? , ? , ? ) ";
                $stmt->prepare($sql);
                $stmt->bind_param("ssssis",$user,$email,$passwordHashed,$age,$city,$state);
                $stmt->execute();
                $success = "Se registro exitosamente";
                header("Location: index.php?success=".$success);
            }
        }
        $stmt->close();
    }
}

