<?php
	namespace classes\pages;

	class HighestEnrollment extends Page {
		public function __construct() {
			parent::__construct();
			$this->content .= 'Highest enrollment';
			$this->content .= $this->useSql('SELECT * FROM college_csv LIMIT 10');
		} //end function
	} //end class
?>
