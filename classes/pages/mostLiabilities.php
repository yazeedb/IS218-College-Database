<?php
	namespace classes\pages;

	class MostLiabilities extends Page {
		public function __construct() {
			parent::__construct();
			$this->content .= 'Most liabilities';
		}

		public function __destruct() {
			parent::__destruct();
		}
	}
?>