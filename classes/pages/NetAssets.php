<?php
	namespace classes\pages;

	class NetAssets extends Page {
		public function __construct() {
			parent::__construct();
			$this->content .= 'Net Assets';
			$this->content .= $this->useSql('SELECT * FROM college_csv LIMIT 10');
		} //end function
	} //end class
?>
