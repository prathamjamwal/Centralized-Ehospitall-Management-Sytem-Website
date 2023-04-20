<html>
<head>
    <title>entry</title>
</head>
<body>
<?php
    $hostName = "localhost";
    $dbName = "hospital";
    $userName = "root";
    $password = "";

    try {
        $pdo = new PDO("mysql:host=$hostName;dbname=$dbName",$userName,$password);
        
        //ERRMODE_SILENT is default.
        //ERRMODE_WARNING will still keep executing code.
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
?>
</body>
</html>
