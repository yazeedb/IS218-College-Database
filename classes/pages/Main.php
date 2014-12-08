<?php
	namespace classes\pages;

	class Main extends Page {
		public $list = array(
				'List colleges with highest enrollment',
				'List colleges with the most liabilities',
				'List colleges with most net assets',
				'List colleges with most net assets <i>per student</i>',
				'List colleges with largest percentage increased in enrollment between 2011 and 2010'
			);

		public function __construct() {
			parent::__construct();
			$this->content .= \classes\html\MakeList::makeList($list);
		}

		public function __destruct() {
			parent::__destruct();
			echo $this->content;
		}
	} //end class
?>