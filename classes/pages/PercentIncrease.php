<?php
	namespace classes\pages;

	class PercentIncrease extends Page {

		protected $sql = 'SELECT hd2011.INSTNM FROM hd2011 JOIN effy2010 ON hd2011.UNITID = effy2010.UNITID JOIN effy2011 ON hd2011.UNITID = effy2011.UNITID ORDER BY (effy2010.EFYTOTLT / effy2011.EFYTOTLT) * 100 DESC';

		public function __construct() {
			parent::__construct();
			$this->content .= 'Percent Increase';
			$this->content .= $this->useSql($this->sql, 'INSTNM');
		} //end function
	} //end class
?>

