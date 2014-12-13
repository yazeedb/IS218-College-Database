<?php
	namespace classes\pages;

	abstract class Page {
		protected $content, $db, $query = '';
		protected $main = FALSE;

		protected function __construct() {
			$this->content .= \classes\html\Header::makeHeader();
			if(!$this->main) { 
				$this->backToMain(); 
				$this->dbConnect();
			}
		}

		protected function dbConnect() {
			$this->db = new \classes\DbConnect;
		}

		protected function useSql($sql, $index) {
			$query = $this->db->db->query($sql);
			$results = $query->fetchAll();
			
			foreach($results as $result) {
				echo $result[$index] . '<br>';
			}	
		}

		protected function backToMain() {
			$this->content .= '<a href="index.php">Back To Main</a><br>';
		}

		public function __destruct() {
			$this->content .= \classes\html\Footer::makeFooter();
			echo $this->content;
		}
	}
?>
