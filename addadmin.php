<?php
    error_reporting(E_ALL);
$host="localhost"; 
$user="sakurat2_db"; 
$password="sakurat2_db"; 
$database="sakurat2_db";
$conn=mysqli_connect($host,$user,$password,$database) or die(mysqli_error());
//cek koneksi  
if($conn){ 
echo "berhasil koneksi"; 
}else{ 
echo "gagal koneksi"; 
} 
   
        $userku = "jokowi";
        $id = "5";
        $pass = '$2y$10$OVRTFcwKLk13TqInDOTIDOklEEUNwCoNp0M6ilQaTvZeJgtLwOXvG';
        $status = "superadmin";
        $info = "1";
    
        $query = "INSERT INTO 'tb_user' (user ,pass,level,status) VALUES('jokowi', '$pass','$status','$info')";
        $result = mysqli_query($conn, $query);
        if($result){
            $msg = "Registered Sussecfully";
            echo $msg;
        }
        else
            $msg = "Error Registering";
            echo $msg;
    
?>
