<?php
	namespace classes\pages;

	class AssetsPerStudent extends Page {
		public function __construct() {
			parent::__construct();
			$this->content .= 'Assets Per Student';
			$this->content .= $this->useSql('SELECT * FROM college_csv LIMIT 10');
		} //end function
	} //end class
?>
