<?php
	namespace classes\pages;

	class MostLiabilities extends Page {
		public function __construct() {
			parent::__construct();
			$this->content .= 'Most liabilities';
			$this->content .= $this->useSql('SELECT * FROM college_csv LIMIT 10');
		} //end function
	} //end class
?>
