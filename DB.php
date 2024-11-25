<?php
$servername = 'localhost';
$username = 'axror';
$password = 'Xc0~t05VF"`_';

try {
    $conn = new PDO(dsn: "maysql:host=$servername;dbname",
        username: $username, password: $password);

    $conn->getAttribute(attribute: PDO::ATTR_ERRMODE,
        value: PDO::ERRMODE_EXCEPTION);
    return "Connected successfully";
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
?>