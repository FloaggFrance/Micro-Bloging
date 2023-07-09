<?php
class in_sql {
	public $sqlConnect;

	public function init() {
		$this->sqlConnect = null;

		$this->sqlConnect = new mysqli("localhost", "root", "", "micro_blog");
	}
}

class prepare extends in_sql {
	private $request, $get_result;
	public $rows;

	public function __construct($requestSQL, $requestDataType = "", $requestData = NULL) {
		$this->init();

		$this->request = $this->sqlConnect->prepare($requestSQL);

		if(is_array($requestData)) {
			$this->request->bind_param($requestDataType, ...$requestData);
		}
		$this->request->execute();
	}

	public function execute() {
		$this->get_result = $this->request->get_result();

		$this->rows = $this->get_result->num_rows;
	}
	public function get($function) {
		return $this->get_result->$function();
	}

	public function fetch_all() {
		return $this->get_result->fetch_all(MYSQLI_ASSOC);
	}
}