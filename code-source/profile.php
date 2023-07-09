<?php
include "init.php";

$userInfo = new get_user($_GET['id']);
?>
<?= web('header'); ?>
<h1><?= $userInfo->username ?></h1>
<span>Join <?= $userInfo->createDay ?></span>
<?= web('footer'); ?>