<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" , content="IE=edge" />
    <meta http-equiv="Content-Style-Type" , content="text/css" />
    <link rel="stylesheet/css" type="text/css" href="./style.css">
    <link rel="stylesheet/sass" type="text/sass" href="./style.sass">
    <link rel="stylesheet/scss" type="text/scss" href="./style.scss">
    <link rel="stylesheet/less" type="text/less" href="./style.less">
    <script type="text/javascript" src="./server.js">
    </script>
    <script type="text/javascript" src="./script.js">
    </script>
    <title>Connection Result</title>
</head>
<body>
    <h2>
    <?php
    $host = 'mysql-uho02741358.e.aivencloud.com';
    $port = '27750';
    $dbname = 'defaultdb';
    $username = 'avnadmin';
    $password = 'AVNS_VQjeR3X7mMJJXQWC8nL';
    $ssl_mode = 'REQUIRED';
    $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4";
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::MYSQL_ATTR_SSL_CA => './ca-cert.pem',
    ];
    try {
        $pdo = new PDO($dsn, $username, $password, $options);
        echo "Connected successfully!";
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    ?>
    </h2>
</body>
</html>
