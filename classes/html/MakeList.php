<?php
	namespace classes\html;

	class MakeList {

		public static function makeList($list) {
			$listContent = '<ul>';

			foreach($list as $key => $value) {
				$listContent .= '<a href="?pageType=' . $key . '"><li>' . $value . '</li></a>';
			} //end foreach

			$listContent .= '</ul>';
			
			return $listContent;
		} //end function
	} //end class
?>
