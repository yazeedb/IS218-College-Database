<?php
	namespace classes\pages;

	class AssetsPerStudent extends Page {

		protected $sql = 'SELECT hd2011.INSTNM FROM hd2011 JOIN effy2011 ON hd2011.UNITID = effy2011.UNITID JOIN F1011_f1a ON hd2011.UNITID = F1011_f1a.UNITID ORDER BY F1011_f1a.F1A18 / effy2011.EFYTOTLT DESC';

		public function __destruct() {
			$this->content .= 'Highest enrollment';
			$this->content .= $this->useSql($this->sql, 'INSTNM');
			parent::__destruct();
		}
	} //end class
?>
