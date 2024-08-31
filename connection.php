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
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    require 'vendor/autoload.php';
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();
    $host = $_ENV['DB_HOST'];
    $db = $_ENV['DB_DATABASE'];
    $user = $_ENV['DB_USERNAME'];
    $pass = $_ENV['DB_PASSWORD'];
    $port = $_ENV['DB_PORT']
    $charset = 'utf8mb4';
    $dsn = "mysql:host=$host;port=$port;dbname=$db;charset=$charset";
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    try {
        $pdo = new PDO($dsn, $user, $pass, $options);
        echo "Connected to the Aiven MySQL database successfully!";
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $pdo->prepare('SHOW DATABASES; USE defaultdb; CREATE TABLE users (id INT AUTO_INCREMENT PRIMARY KEY, username VARCHAR(50) NOT NULL, email VARCHAR(100), created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP); INSERT INTO users (username, email) VALUES ('jane', 'jane@example.com'), ('alice', 'alice@example.com'); DESCRIBE users; SELECT * FROM users;');
        $stmt->execute(['email' => 'alice@example.com']);
        $rows = $stmt->fetchAll();
        foreach ($rows as $row) {
            echo $row['username'] . "<br>";
        }
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage() . "Please check your database credentials and try again.";
        error_log($e->getMessage());
    }
    ?>
    </h2>
</body>
</html>
