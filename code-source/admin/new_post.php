<?php
include "../init.php";

if(isset($_POST['sub_button'])) {
	if(
		!empty($_POST['name'])
		&&
		!empty($_POST['content'])
	) {
		$uniqID = uniqid();
		$title = htmlentities($_POST['name']);
		$content = htmlentities($_POST['content']);
		$min = htmlentities($_POST['min']);

		$insert = new prepare(
			"INSERT INTO posts (uniqid, user_id, title, content, date_, min_) VALUES(?, ?, ?, ?, now(), ?)",
			"sssss",
			[$uniqID, $userID, $title, $content, $min]
		);

		header('Location: ./');
	}
}
?>
<form method="post">
	<div class="input text">
		<input type="text" name="min" placeholder="img url">
	</div>
	<div class="input text">
		<input type="text" name="name">
	</div>
	<div class="input text">
		<textarea name="content"></textarea>
	</div>
	<div class="input button">
		<input type="submit" name="sub_button" value="save">
	</div>
</form>