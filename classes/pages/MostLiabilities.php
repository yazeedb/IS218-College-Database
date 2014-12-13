<?php
	namespace classes\pages;

	class MostLiabilities extends Page {

		protected $sql = 'SELECT hd2011.INSTNM FROM hd2011 join F1011_f1a ON F1011_f1a.UNITID = hd2011.UNITID ORDER BY F1011_f1a.F1A13 DESC';

		public function __construct() {
			parent::__construct();
			$this->content .= 'Most liabilities';
			$this->content .= $this->useSql($this->sql, 'INSTNM');
		} //end function
	} //end class
?>
