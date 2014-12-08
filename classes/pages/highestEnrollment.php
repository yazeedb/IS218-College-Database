<?php
	namespace classes\pages;

	class HighestEnrollment extends Page {
		public function __construct() {
			parent::__construct();
			$this->backToMain();
			$this->content .= 'Highest enrollment';
		}

		public function __destruct() {
			parent::__destruct();
		}
	}
?>