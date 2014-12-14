<?php
	namespace classes\pages;

	class Main extends Page {
		private $list = array(
				'HighestEnrollment' => 'List colleges with highest enrollment',
				'MostLiabilities' => 'List colleges with the most liabilities',
				'NetAssets' => 'List colleges with most net assets',
				'AssetsPerStudent' => 'List colleges with most net assets <i>per student</i>',
				'PercentIncrease' => 'List colleges with largest percentage increased in enrollment between 2011 and 2010'
			);

		public function __construct() {
			$this->main = TRUE;
			parent::__construct();
			$this->content .= '<h1>College Database</h1>';
			$this->content .= \classes\html\MakeList::makeHrefList($this->list);
		} //end function
	} //end class
?>
