<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset='utf-8' />
  <meta name="viewport" , content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" , content="IE=edge" />
  <meta http-equiv="Content-Style-Type" , content="text/css" />
  <?php
  $GLOBALS['title'] = 'Connection';
  $GLOBALS['error'] = 'Connection failed: ';
  $GLOBALS['success'] = 'Connected successfully';
  ?>
  <title><?php echo $GLOBALS['title']; ?></title>
</head>
<body>
<h1><?php echo $GLOBALS['title']; ?></h1>
<h2>
<?php
　$servername = getenv('DB_SERVER');
　$port = getenv('DB_PORT');
　$username = getenv('DB_USERNAME');
　$password = getenv('DB_PASSWORD');
　$dbname = getenv('DB_DATABASE');
　$conn = new mysqli($servername, $username, $password, $dbname, $port);
　if ($conn->connect_error) {
  　  echo die($GLOBALS['error'] . $conn->connect_error);
　}
　echo $GLOBALS['success'];
?>
</h2>
</body>
</html>
