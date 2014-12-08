<?php
	namespace classes\pages;

	class NetAssets extends Page {
		public function __construct() {
			parent::__construct();
			$this->content .= 'Net Assets';
		}

		public function __destruct() {
			parent::__destruct();
		}
	}
?>