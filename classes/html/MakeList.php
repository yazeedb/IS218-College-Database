<?php
	namespace classes\html;

	class MakeList {

		public static function makeHrefList($list) {
			$listContent = '<ul id="options">';

			foreach($list as $key => $value) {
				$listContent .= '<li class="option"><a href="?pageType=' . $key . '">' . $value . '</a></li>';
			} //end foreach

			$listContent .= '</ul>';
			
			return $listContent;
		} //end function

		public static function makeResultList($results, $index) {
			$listContent = '<ul id="results">';

			foreach($results as $result) {
				$listContent .= '<li class="result">' . $result[$index] . '</li>';
			}

			$listContent .= '</ul>';

			return $listContent;
		} //end function
	} //end class
?>
