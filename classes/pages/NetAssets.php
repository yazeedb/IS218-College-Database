<?php
	namespace classes\pages;

	class NetAssets extends Page {

		protected $sql = 'SELECT hd2011.INSTNM FROM hd2011 join F1011_f1a ON F1011_f1a.UNITID = hd2011.UNITID order by F1011_f1a.F1A18 DESC';

		public function __construct() {
			parent::__construct();
			$this->content .= 'Net Assets';
			$this->content .= $this->useSql($this->sql, 'INSTNM');
		} //end function
	} //end class
?>
