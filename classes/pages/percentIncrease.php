<?php
	namespace classes\pages;

	class PercentIncrease extends Page {
		public function __construct() {
			parent::__construct();
			$this->backToMain();
			$this->content .= 'Percent Increase';
		}

		public function __destruct() {
			parent::__destruct();
		}
	}
?>