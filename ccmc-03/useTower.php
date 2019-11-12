<?php
require_once("class/Tower.php");
$skytree = new Tower("東京スカイツリー",634,2012);
$tokyotower = new Tower("東京タワー",333,1958);
/**echo "<pre>";
var_dump($skytree);
echo "</pre>";
exit(0)*/
?>
<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<title>Towerクラスを利用する</title>
	<link rel="stylesheet" href="../assets/css/style.css" />
	<link rel="stylesheet" href="../assets/css/ccmc-03.css" />
</head>

<body>
	<h1>Towerクラスを利用する</h1>
	<dl>
		<dt><?= $tokyotower->getName() ?></dt>
		<dd><?= $tokyotower->getProfile() ?></dd>
	</dl>
	<dl>
		<dt><?= $skytree->getName() ?></dt>
		<dd><?= $skytree->getProfile() ?></dd>
	</dl>
	<p><a href="index.php">インデックスに戻る</a></p>
</body>

</html>