<?php
require_once("funx.php");

session_start();
$cart = null;
if (isset($_SESSION["cart"])){
    $cart = $_SESSION["cart"];
} else {
    $cart = [];
}

$id=-1;
if (isset($_REQUEST["cart"])){
    $cart = $_REQUEST["cart"];
}

$items = createItems();
$items = $items[$id];

$cart[] = $items;

$_SESSION["cart"] = $cart;
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>ccmc-04 - ショップシステム</title>
	<link rel="stylesheet" href="../../assets/css/style.css" />
	<link rel="stylesheet" href="../../assets/css/ccmc-03.css" />
	<link rel="stylesheet" href="../../assets/css/ccmc-04.css" />	
</head>

<body>
	<h1>ショップシステム</h1>
	<p><a href="shop.php">買い物を続ける</a>　<a href="cart.html?mode=clear">カートをクリアする</a></p>
	<table>
		<tr>
			<th>楽器名</th>
			<th>価格</th>
			<th></th>
		</tr>
		<tr>
			<td>アコースティックギター</td>
			<td>200,000円</td>
		</tr>
			</table>
</body>

</html>
