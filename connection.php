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
    <!-- Google Tag Manager -->
    <script>
      (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                                                    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
          j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
                          })(window,document,'script','dataLayer','GTM-MWTK6627');
    </script>
    <!-- End Google Tag Manager -->
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
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MWTK6627"
                      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
  <?php
  $pdo = new PDO('sqlite:my_database.db');
  if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $pdo->exec("DELETE FROM users WHERE id=$id");
    echo "Data deleted successfully!";
  }
  
  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    
    $stmt = $pdo->prepare("UPDATE users SET name = ?, email = ? WHERE id = ?");
    $stmt->execute([$name, $email, $id]);
    echo "Data updated successfully!";
  }
  
  $stmt = $pdo->query("SELECT * FROM users");
  $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
  ?>
  <button onclick="location.href='./form.php'">Enter your information into the form</button>
  <h1>User List</h1>
  <table>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Actions</th>
    </tr>
    <?php foreach ($users as $user): ?>
    <tr>
      <td><?= $user['id'] ?></td>
      <td><?= $user['name'] ?></td>
      <td><?= $user['email'] ?></td>
      <td>
        <button onclick="location.href='connection.php?delete=<?= $user['id'] ?>'">Delete</button>
        <form method="POST" action="connection.php">
          <input type="hidden" name="id" value="<?= $user['id'] ?>">
          <input type="text" name="name" value="<?= $user['name'] ?>">
          <input type="email" name="email" value="<?= $user['email'] ?>">
          <button onclick="location.href='connection.php?update=<?= $user['id'] ?>'">Update</button>
        </form>
      </td>
    </tr>
    <?php endforeach; ?>
  </table>
</body>
</html>
