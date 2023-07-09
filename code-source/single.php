<?php
include "init.php";

$userInfo = new get_posts($_GET['id']);
?>
<?= web('header'); ?>
<img src="<?= $userInfo->min ?>" width="500">
<h1><?= $userInfo->title ?></h1>
<div><?= $userInfo->content ?></div>
<span>Added <?= $userInfo->createDay ?></span>
<?= web('footer'); ?>