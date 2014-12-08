<?php
	namespace classes\pages;

	class Main extends Page {
		public $list = array(
				'HighestEnrollment' => 'List colleges with highest enrollment',
				'MostLiabilities' => 'List colleges with the most liabilities',
				'NetAssets' => 'List colleges with most net assets',
				'AssetsPerStudent' => 'List colleges with most net assets <i>per student</i>',
				'PercentIncrease' => 'List colleges with largest percentage increased in enrollment between 2011 and 2010'
			);

		public function __construct() {
			parent::__construct();
			$this->content .= \classes\html\MakeList::makeList($this->list);
		}

		public function __destruct() {
			parent::__destruct();
		}
	} //end class
?>