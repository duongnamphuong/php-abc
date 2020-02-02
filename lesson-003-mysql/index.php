<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>MySQL connection</title>
</head>
<body>
    <?php
        $servername = "localhost";
        $username = "newuser";
        $password = "HQ^M$>2#ZmLFFvm";

        // Create connection
        $conn = new mysqli($servername, $username, $password);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully";
    ?>

</body>
</html>
