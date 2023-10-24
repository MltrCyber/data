<?php
    require('../config/koneksi.php');
   
        $user = "jokowi";
        $id = "5";
        $password = '$2y$10$OVRTFcwKLk13TqInDOTIDOklEEUNwCoNp0M6ilQaTvZeJgtLwOXvG';
        $status = "superadmin";
        $info = "1";
        $query = "INSERT INTO 'tb_user' (user ,cuid ,pass,level,status) VALUES('$user', '$id', '$password','$status',"$info")";
        $result = mysqli_query($query);
        if($result){
            $msg = "Registered Sussecfully";
            echo $msg;
        }
        else
            $msg = "Error Registering";
            echo $msg;
    
?>
