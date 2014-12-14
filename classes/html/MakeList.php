<?php
	namespace classes\html;

	class MakeList {

		public static function makeHrefList($list) {
			$listContent = '<ul>';

			foreach($list as $key => $value) {
				$listContent .= '<a href="?pageType=' . $key . '"><li>' . $value . '</li></a>';
			} //end foreach

			$listContent .= '</ul>';
			
			return $listContent;
		} //end function

		public static function makeResultList($results, $index) {
			echo '<ul id="results">';

			foreach($results as $result) {
				echo '<li class="result">' . $result[$index] . '</li>';
			}

			echo '</ul>';
		} //end function
	} //end class
?>
