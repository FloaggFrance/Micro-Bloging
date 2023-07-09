<?php
class get_user extends in_sql {
	public $username, $createDay;

	public function __construct($stringID) {
		$reqUser = new prepare(
			"SELECT ID, uniqid, username, date_ FROM users WHERE uniqid = ?",
			"s",
			[$stringID]
		);
		$reqUser->execute();
		$data = $reqUser->get('fetch_assoc');
		if($reqUser->rows > 0) {
			$this->username = $data['username'];
			$this->createDay = $data['date_'];
		}
	}
}