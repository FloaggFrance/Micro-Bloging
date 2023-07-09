<?php
include "init.php";

$userInfo = new list_posts();
?>
<?= web('header'); ?>
<ul>
<?php
foreach ($userInfo->fetchAll as $key => $value) {
?>
<li>
	<img src="<?= $value['min_'] ?>" width="200">
	<h2><?= $value['title'] ?></h2>
	<span>Added <?= $value['date_'] ?></span>
	<a href="single.php?id=<?= $value['uniqid'] ?>">read</a>
</li>
<?php
}
?>
</ul>
<?= web('footer'); ?>