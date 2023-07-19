<?php
$main_route="/test/index.php";
?>
<!DOCTYPE html>
<html>
<head>
  <title>User Management</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
  <!-- Navigation bar -->
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="index.php">User Management</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="<?php echo $GLOBALS['main_route']; ?>?controller=contacts">Users</a></li>
      </ul>
    </div>
  </nav>

  <div class="container">
    <?php require $view; ?>
  </div>
</body>
</html>