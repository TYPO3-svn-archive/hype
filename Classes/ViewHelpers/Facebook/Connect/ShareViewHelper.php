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
 * See http://www.gravatar.com
 *
 * @version $Id$
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Tx_Hype_ViewHelpers_Facebook_Connect_ShareViewHelper extends Tx_Fluid_Core_ViewHelper_TagBasedViewHelper {
	
	/**
	 * @var string
	 */
	protected $tagName = 'fb:share-button';
	
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
	 * Render the facebook share button
	 *
	 * @param string $type Size of the gravatar image
	 * @param string $href absolute URI of the image to be shown if no gravatar was found
	 * @return string The rendered link tag
	 */
	public function render($type = NULL, $href = NULL) {
		
		# all available share types
		$types = array('box_count', 'button_count', 'button', 'icon_link', 'icon');
		
		# add class attribute
		$this->tag->addAttribute('class', 'url');
		
		# add type attribute
		$type = strtolower($type);
		
		if($type && !in_array($type, $types)) {
			$type = NULL;
		}
		
		if($type) {
			$this->tag->addAttribute('type', $type);
		}
		
		# add href attribute
		if(!$href) {
			$href = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
		}
		$this->tag->addAttribute('href', $href);
		
		# render children
		$this->tag->setContent(' ');
		
		# return the rendered tag
		return $this->tag->render();
	}
}

?>