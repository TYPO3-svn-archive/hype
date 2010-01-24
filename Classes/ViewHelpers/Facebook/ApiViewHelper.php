<?php
/*                                                                        *
 * This script belongs to the FLOW3 package "Fluid".                      *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU Lesser General Public License as published by the *
 * Free Software Foundation, either version 3 of the License, or (at your *
 * option) any later version.                                             *
 *                                                                        *
 * This script is distributed in the hope that it will be useful, but     *
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHAN-    *
 * TABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU Lesser       *
 * General Public License for more details.                               *
 *                                                                        *
 * You should have received a copy of the GNU Lesser General Public       *
 * License along with the script.                                         *
 * If not, see http://www.gnu.org/licenses/lgpl.html                      *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */

/**
 * View helper for rendering gravatar images.
 *
 * @version $Id$
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Tx_Hype_ViewHelpers_Facebook_ApiViewHelper extends Tx_Fluid_Core_ViewHelper_TagBasedViewHelper {
	
	/**
	 * @var string
	 */
	protected $tagName = '';
	
	/**
	 * Initialize arguments
	 *
	 * @return void
	 */
	public function initializeArguments() {
		parent::initializeArguments();
	}
	
	/**
	 * Add needed facebook javascript files
	 *
	 * @param string $key The Facebook API key
	 * @return void
	 */
	public function render($key) {
		$GLOBALS['TSFE']->getPageRenderer()->addHeaderData('<script src="http://static.ak.connect.facebook.com/js/api_lib/v0.4/FeatureLoader.js.php" type="text/javascript"></script><script type="text/javascript">FB.init(\'' . strip_tags($key) . '\');</script>');
	}
}

?>