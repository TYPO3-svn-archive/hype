<?php

class Tx_Hype_Utility_Document {
	
	static public function setTitle($title) {
		$GLOBALS['TSFE']->page['title'] = $title;		# page title
		$GLOBALS['TSFE']->indexedDocTitle = $title;		# indexed search title
	}
}

?>