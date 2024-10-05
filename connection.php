<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-38606SS5F6"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-38606SS5F6');
    </script>
    <script type="text/javascript" data-cmp-ab="1" src="https://cdn.consentmanager.net/delivery/autoblocking/31566d9c7185e.js" data-cmp-host="a.delivery.consentmanager.net" data-cmp-cdn="cdn.consentmanager.net" data-cmp-codesrc="16"></script>
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
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    //require 'vendor/autoload.php';
    //$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    //$dotenv->load();
    $host = 'sql12.freesqldatabase.com';
    $db = 'sql12732575';
    $user = 'sql12732575';
    $pass = 'anq5vMnmJf';
    $port = '3306';
    $charset = 'utf8mb4';
    $dsn = "mysql:host=$host;port=$port;dbname=$db;charset=$charset";
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
        PDO::MYSQL_ATTR_SSL_CA => './ca.pem',
        PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT => false,
    ];
    try {
        $pdo = new PDO($dsn, $user, $pass, $options);
        echo "Connected to the Aiven MySQL database successfully!";
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $pdo->query('SOURCE ./db.sql; SHOW DATABASES;');
        $databases = $stmt->fetchAll();
        print_r($databases);
        $pdo->exec('USE sql12732575');
        $createTableSQL = 'CREATE TABLE IF NOT EXISTS users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(50) NOT NULL,
        email VARCHAR(100),
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )';
        $pdo->exec($createTableSQL);
        $insertDataSQL = 'INSERT INTO users (username, email) VALUES
        (:username1, :email1),
        (:username2, :email2)';
        $stmt = $pdo->prepare($insertDataSQL);
        $stmt->execute([
        ':username1' => 'jane',
        ':email1' => 'jane@example.com',
        ':username2' => 'alice',
        ':email2' => 'alice@example.com'
        ]);
        $stmt = $pdo->query('DESCRIBE users');
        $tableStructure = $stmt->fetchAll();
        print_r($tableStructure);
        $stmt = $pdo->query('SELECT * FROM users');
        $users = $stmt->fetchAll();
        print_r($users);
        foreach ($rows as $row) {
            echo $row['username'] . "<br>";
        }
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage() . "." . " Please check your database credentials and try again.";
        error_log($e->getMessage());
    }
    ?>
    </h2>
</body>
</html>
