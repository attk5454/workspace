<?php
require_once("class/IntelligentBuilding.php");
$midTown = new IntelligentBuilding("midtown",248);
/**echo "<pre>";
var_dump($midTown);
echo "</pre>";
exit(0)*/
?>
<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<title>IntelligentBuildingクラスを利用する</title>
	<link rel="stylesheet" href="../assets/css/style.css" />
	<link rel="stylesheet" href="../assets/css/ccmc-03.css" />
</head>

<body>
	<h1>IntelligentBuildingクラスを利用する</h1>
	<dl>
		<dt><?= $midTown->getName() ?></dt>
		<dd>
			<?= $midTown->getProfile() ?><br />
			<?= $midTown->isAutoLocked() ?><br />
			<?= $midTown->accessWiFi() ?>
		</dd>
	</dl>
	<p><a href="index.php">インデックスに戻る</a></p>
</body>

</html>