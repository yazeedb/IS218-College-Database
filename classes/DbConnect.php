<?php
	namespace classes;

	class DbConnect {
		public $db = '';

		public function __construct() {
			try { 
				$this->db = new \PDO('mysql:host=localhost; dbname=csv_upload_test', 'root', 'root');
				echo 'Successfully connected';
			} catch(Exception $e) {
				echo 'Error: ' . $e->getMessage();
				die();
			}
		}

		public function __destruct() {
			unset($this->db);
			$this->db = NULL;
		}
	}
?>