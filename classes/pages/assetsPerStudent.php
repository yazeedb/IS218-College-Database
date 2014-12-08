<?php
	namespace classes\pages;

	class AssetsPerStudent extends Page {
		public function __construct() {
			parent::__construct();
			$this->backToMain();
			$this->content .= 'Assets Per Student';
		}

		public function __destruct() {
			parent::__destruct();
		}
	}
?>