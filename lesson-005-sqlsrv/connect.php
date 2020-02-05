<?php
    // Your SQL Server server name
    $serverName = ".";

    // If you don't put Uid and PWD, then PHP will try to connect using current thread's authentication (Windows authentication)
    // Uid and PWD comes together, you must declare BOTH in case if using SQL Server authentication
    $connectionOptions = array(
        "Database" => "Pokemon"
        //, "Uid" => "your_user",
        //, "PWD" => "your_password"
    );

    //Establishes the connection
    $conn = sqlsrv_connect($serverName, $connectionOptions);
    if ($conn)
        echo "Connected!"
?>
