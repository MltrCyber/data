<?php
    require('../config/koneksi.php');
   
        $user = "jokowi";
        $id = "5";
        $password = '$2y$10$OVRTFcwKLk13TqInDOTIDOklEEUNwCoNp0M6ilQaTvZeJgtLwOXvG';

        $query = "INSERT INTO 'tb_user' (user ,cuid ,pass) VALUES('$user', '$id', '$password')";
        $result = mysqli_query($query);
        if($result){
            $msg = "Registered Sussecfully";
            echo $msg;
        }
        else
            $msg = "Error Registering";
            echo $msg;
    
?>