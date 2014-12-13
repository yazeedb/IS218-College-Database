<?php
	namespace classes\pages;

	class HighestEnrollment extends Page {

		protected $sql = 'SELECT hd2011.INSTNM FROM hd2011 join effy2011 ON effy2011.UNITID = hd2011.UNITID WHERE EFFYLEV = 1 ORDER BY EFYTOTLT DESC';

		public function __construct() {
			parent::__construct();
			$this->content .= 'Highest enrollment';
			$this->content .= $this->useSql($this->sql, 0);
		} //end function
	} //end class
?>
