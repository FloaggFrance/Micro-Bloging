<?php
class list_posts extends in_sql {
	public $fetchAll;

	public function __construct() {
		$reqUser = new prepare(
			"SELECT * FROM posts"
		);
		$reqUser->execute();
		$this->fetchAll = $reqUser->fetch_all();
	}
}

class get_posts extends in_sql {
	public $title, $min, $content, $createDay;

	public function __construct($stringID) {
		$reqUser = new prepare(
			"SELECT * FROM posts WHERE uniqid = ?",
			"s",
			[$stringID]
		);
		$reqUser->execute();
		$data = $reqUser->get('fetch_assoc');
		if($reqUser->rows > 0) {
			$this->min = $data['min_'];
			$this->title = $data['title'];
			$this->content = $data['content'];
			$this->createDay = $data['date_'];
		}
	}
}