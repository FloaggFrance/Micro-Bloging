<?php
include "init.php";

if(isset($_POST['sub_button'])) {
	if(
		!empty($_POST['name_user'])
		&&
		!empty($_POST['mail_user'])
		&&
		!empty($_POST['password_user'])
		&&
		!empty($_POST['conf_password_user'])
	) {
		$name_user = htmlentities($_POST['name_user']);

		$mail_user = htmlentities($_POST['mail_user']);
		$password_user = htmlentities($_POST['password_user']);
		$conf_password_user = htmlentities($_POST['conf_password_user']);

		if(username_verify($name_user)) {
			if(filter_var($mail_user, FILTER_VALIDATE_EMAIL)) {
				if(strcmp($password_user, $conf_password_user) == 0) {
					$uniqID = uniqid();
					$newPassword = password_hash($password_user, PASSWORD_DEFAULT);
					$insertCompte = new prepare(
						"INSERT INTO users (uniqid, username, mail_, password, date_) VALUES(?, ?, ?, ?, now()) ",
						"ssss",
						[$uniqID, $name_user, $mail_user, $newPassword]
					);

					header('Location: ./profile.php?id='.$uniqID);
				} else {
					echo "Mot de passe ne correcponde pas";
				}
			} else {
				echo "Adress mail incorrect";
			}
		} else {
			echo "Nom d'utilsiateur incrroect";
		}
	} else {
		echo "Champs non remplit";
	}
}
?>
<form method="post">
	<div class="input text">
		<label>Username</label>
		<input type="text" name="name_user" placeholder="Username">
	</div>
	<div class="input text">
		<label>Mail</label>
		<input type="mail" name="mail_user" placeholder="Mail">
	</div>
	<div class="input text">
		<label>Password</label>
		<input type="password" name="password_user" placeholder="Password">
	</div>
	<div class="input text">
		<label>Confirme Password</label>
		<input type="password" name="conf_password_user" placeholder="Conf. Password">
	</div>

	<div class="input button">
		<input type="submit" name="sub_button" value="sing up">
	</div>
</form>