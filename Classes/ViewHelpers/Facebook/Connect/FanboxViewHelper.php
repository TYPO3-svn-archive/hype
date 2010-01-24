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
class Tx_Hype_ViewHelpers_Facebook_Connect_FanboxViewHelper extends Tx_Fluid_Core_ViewHelper_TagBasedViewHelper {
	
	/**
	 * @var string
	 */
	protected $tagName = 'fb:fan';
	
	/**
	 * Initialize arguments
	 *
	 * @return void
	 */
	public function initializeArguments() {
		parent::initializeArguments();
		$this->registerUniversalTagAttributes();
	}
	
	/**
	 * Render the facebook fanbox
	 *
	 * @return string The rendered link tag
	 */
	public function render() {
		
		return '<fb:fan profile_id="119833069990" stream="" connections="10" width="300"></fb:fan>';
		
		# all available share types
		$types = array('box_count', 'button_count', 'button', 'icon_link', 'icon');
		
		# get type
		$type = strtolower($type);
		if($type && !in_array($type, $types)) {
			$type = NULL;
		}
		
		# add name attribute
		$this->tag->addAttribute('name', 'fb_share');
		
		# add type attribute
		if($type) {
			$this->tag->addAttribute('type', $type);
		}
		
		# add url attribute
		if($url) {
			$this->tag->addAttribute('share_url', $url);
		}
		
		# render children
		$this->tag->setContent($this->renderChildren());
		
		# return the rendered tag
		return $this->tag->render();
	}
}

?>