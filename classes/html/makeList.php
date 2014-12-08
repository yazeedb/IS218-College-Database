<?php
	namespace classes\html;

	class MakeList {
		public $listContent = '';

		public static function makeList($list) {
			$listContent .= '<ul>';

			foreach($list as $listItem) {
				$listContent .= '<li>' . $listItem . '</li>';
			} //end foreach

			$listContent .= '</ul>';
			
			return $listContent;
		} //end function
	} //end class
?>