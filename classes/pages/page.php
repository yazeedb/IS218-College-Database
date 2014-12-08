<?php
	namespace classes\pages;

	abstract class Page {
		public $content = '';

		public function __construct() {
			$this->content .= \classes\html\Header::makeHeader();
		}

		public function __destruct() {
			$this->content .= \classes\html\Footer::makeFooter();
			echo $this->content;
		}
	}
?>