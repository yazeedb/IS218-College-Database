<?php
	namespace classes\pages;

	class HighestEnrollment extends Page {

		protected $sql = 'SELECT hd2011.INSTNM FROM hd2011 join effy2011 ON effy2011.UNITID = hd2011.UNITID WHERE EFFYLEV = 1 ORDER BY EFYTOTLT DESC';

		public function __destruct() {
			$this->content .= '<h2>Highest enrollment</h2>';
			$this->content .= $this->useSql($this->sql, 0);
			parent::__destruct();
		}
	} //end class
?>
