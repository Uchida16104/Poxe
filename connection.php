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
    <?php
    $GLOBALS['title'] = 'Connection Result';
    $GLOBALS['error'] = 'Connection failed: ';
    $GLOBALS['success'] = 'Connected successfully';
    ?>
    <h1><?php echo $GLOBALS['title']; ?></h1>
    <h2>
    <?php
　  $servername = mysql-uho02741358.e.aivencloud.com;
　  $port = 27750;
　  $username = avnadmin;
　  $password = AVNS_VQjeR3X7mMJJXQWC8nL;
　  $dbname = defaultdb;
　  $conn = new mysqli($servername, $username, $password, $dbname, $port);
  　if ($conn->connect_error) {
    　  echo die($GLOBALS['error'] . $conn->connect_error);
  　}
  　echo $GLOBALS['success'];
    ?>
   </h2>
</body>
</html>
