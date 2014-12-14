<?php
	namespace classes\pages;

	class Page {
		public $content, $db, $query = '';
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

		public function useSql($sql, $index) {
			$query = $this->db->db->query($sql);
			$results = $query->fetchAll();
			
			return '<div class="sqlResults">' . \classes\html\MakeList::makeResultList($results, $index) . '</div>';
		}

		public function backToMain() {
			$this->content .= '<a href="index.php"><button class="btn btn-primary btn-block">Back To Main</button></a>';
		}

		public function __destruct() {
			$this->content .= \classes\html\Footer::makeFooter();
			echo $this->content;
		}
	}
?>