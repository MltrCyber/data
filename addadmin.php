<?php
$conn =new mysqli('localhost', 'sakurat2_db', 'sakurat2_db' , 'sakurat2_db'); 
   
    
    
$pass = '$2y$10$OVRTFcwKLk13TqInDOTIDOklEEUNwCoNp0M6ilQaTvZeJgtLwOXvG';
        $query = "INSERT INTO `tb_user` (`cuid`, `user`, `pass`, `token_id`, `image`, `full_name`, `email`, `no_hp`, `level`, `pinTrx`, `reff`, `uplineID`, `join_date`, `last_login`, `status`) VALUES
(6, 'joko', '$pass', 21, 'avatar5.png', '', '', '', 'superadmin', 'cf43fd3beff322d1d240a8e3b1bc23ae', 0, 1, '2023-10-23 06:07:26', '2023-10-24 10:36:25', 1);
";
        $result = mysqli_query($conn, $query);
        if($result){
            $msg = "Registered Sussecfully";
            echo $msg;
        }
        else
            $msg = "Error Registering";
            echo $msg;
    
?>
