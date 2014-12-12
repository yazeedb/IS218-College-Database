<?php
	namespace classes\pages;

	class PercentIncrease extends Page {
		public function __construct() {
			parent::__construct();
			$this->content .= 'Percent Increase';
			$this->content .= $this->useSql('SELECT * FROM college_csv LIMIT 10');
		} //end function
	} //end class
?>
