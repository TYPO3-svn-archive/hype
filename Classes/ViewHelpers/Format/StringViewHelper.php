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
 * View helper for formatting a string with various php string functions
 *
 * @version $Id$
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 *
 * = Examples =
 *
 * Example 1:
 * <f:format.string size="123456" />
 * Output:
 * 120.56 KiB
 *
 * Example 2:
 * <f:format.filesize decimals="3" useDecimalSystem="1">123456</h:format.filesize>
 * Output:
 * 123.456 KB
 *
 * Example 3:
 * {f:format.filesize(size: 123456, unit: 'm', decimals: 3, decimalSeparator: ',')}
 * Output:
 * 0,118 MiB
 */
class Tx_Hype_ViewHelpers_Format_StringViewHelper extends Tx_Fluid_Core_ViewHelper_AbstractViewHelper {

	/**
	 *
	 */
	protected $options = array(
		'ucfirst',
		'strtolower'
	);

	/**
	 * Formats the string
	 *
	 * @param string $string				The string to format
	 * @param array $options				The options to format the string with
	 * @return string						The formatted string
	 * @author								Thomas "Thasmo" Deinhamer <thasmo@gmail.com>
	 * @api
	 */
	public function render($string = NULL, array $options = NULL) {

		# get the string
		if(is_null($string)) {
			$string = (string)$this->renderChildren();
		}

		foreach($options as $option) {
			if(in_array($option, $this->options)) {
				$string = call_user_func_array($option, array($string));
			}
		}

		return $string;
	}
}
?>