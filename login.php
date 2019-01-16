<?php 
    $host = 'localhost';
    $user = 'root';
    $pass = 'root';
    $dbname = 'login_info';

    $conn = mysqli_connect($host, $user, $pass, $dbname);
    if($conn)
        echo 'connected successfully to my database';

    $sql = "INSERT INTO users_data (`id`, `username`, `password`, `email_id`) VALUES (1, 'username', 'password', 'sam@gmail.com')";
    $query = mysqli_query ($conn, $sql);

    

     ?>