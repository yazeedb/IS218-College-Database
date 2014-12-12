<?php
	namespace classes\pages;

	abstract class Page {
		public $content = '';
		public $db = '';
		public $query = '';
		public $main = FALSE;

		public function __construct() {
			$this->content .= \classes\html\Header::makeHeader();
			if(!$this->main) { 
				$this->backToMain(); 
				$this->dbConnect();
			}
		}

		public function dbConnect() {
			$this->db = new \classes\DbConnect;
		}

		public function useSql($sql) {
			$query = $this->db->db->query($sql);
			echo '<pre>';
				foreach($query as $row) {
					echo $row['UNITID'] . '<br>';
				}
			echo '</pre>';
		}

		public function backToMain() {
			$this->content .= '<a href="index.php">Back To Main</a><br>';
		}

		public function __destruct() {
			$this->content .= \classes\html\Footer::makeFooter();
			echo $this->content;
		}
	}
?>
