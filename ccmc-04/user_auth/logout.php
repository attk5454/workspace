<?php
session_start();
if (isset($_SESSION["id"])){
    $_SESSION = [];
    session_destroy();
}
print_r($_SESSION);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>ccmc-04</title>
	<link rel="stylesheet" href="../../assets/css/style.css" />
	<link rel="stylesheet" href="../../assets/css/ccmc-03.css" />
	<link rel="stylesheet" href="../../assets/css/ccmc-04.css" />
</head>
<body>
	<h1>簡単なユーザ認証</h1>
	<p>ログアウトしました。</p>
	<p><a href="entry.php">ログインページへ</a></p>
</body>
</html>