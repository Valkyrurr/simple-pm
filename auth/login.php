<?php
require_once('../inc/utility.php');
require_once('../db/PDORepository.php');

if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
	if (isset($_POST) && ($_POST != null)) {
		if ((isset($_POST['username']) && $_POST['username'] != null) &&
			(isset($_POST['password']) && $_POST['password'] != null)) {
				$dbh = PDORepository::getConnection();
				$username = $_POST['username'];
				$password = $_POST['password'];

				$sth = $dbh->prepare("SELECT * FROM users WHERE username=:username;");
				$sth->bindParam(':username', $username);
				$sth->execute();
				$row = $sth->fetch();

				if (password_verify($password, $row['password'])) {
					header('Location:../employee/tasks.php');

					$loginCookie = Utility::unique_id();
					$sth = $dbh->prepare("UPDATE users SET loginCookie=:loginCookie WHERE username=:username;");
					$sth->bindParam(':loginCookie', $loginCookie);
					$sth->bindParam(':username', $username);
					$sth->execute();
					setcookie('persistent_login', '', time() - 3600);
					setcookie('persistent_login', $loginCookie, time() + (86400 * 30), "/");
				}
		}
	}
}
?>
 <!DOCTYPE html>
<html>
<head>
	<title>Project Management Tool | phpGrid</title>
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="../css/style.css" />
</head>
<body>
	<div class="wrapper">
		<div>
      <form class="" action="login.php" method="post">
        Username <input type="text" name="username">
        Password <input type="password" name="password">
        <menu>
          <input type="submit" value="Submit">
          <input type="reset" value="Reset">
        </menu>
      </form>
    </div>
  </div>
  <div class="footer">
    <strong>@Koko Torralba</strong> | Powered by <a href="https://phpgrid.com/">phpGrid</a>&copy; <?= date('Y'); ?>.
  </div>
</body>
</html>
