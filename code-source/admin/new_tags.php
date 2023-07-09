<?php
include "../init.php";

if(isset($_POST['sub_button'])) {
	if(
		!empty($_POST['name'])
		&&
		!empty($_POST['url'])
	) {
		$name = htmlentities($_POST['name']);
		$url = htmlentities($_POST['url']);

		$insert = new prepare(
			"INSERT INTO tags (name, url_name, date_) VALUES(?, ?, now())",
			"ss",
			[$name, $url]
		);

		header('Location: ./new_post.php');
	}
}
?>
<form method="post">
	<div class="input text">
		<input type="text" name="name">
	</div>
	<div class="input text">
		<input type="text" name="url">
	</div>
	<div class="input button">
		<input type="submit" name="sub_button" value="save">
	</div>
</form>