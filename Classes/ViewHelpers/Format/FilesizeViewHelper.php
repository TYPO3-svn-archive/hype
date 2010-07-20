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
 * View helper for formatting the size of a file
 *
 * @version $Id$
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 *
 * = Examples =
 *
 * Example 1:
 * <f:format.filesize size="123456" />
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
class Tx_Hype_ViewHelpers_Format_FilesizeViewHelper extends Tx_Fluid_Core_ViewHelper_AbstractViewHelper {
	
	protected $units = array('b', 'k', 'm', 'g', 't', 'e', 'z', 'y');
	
	/**
	 * Initializes the viewhelper
	 *
	 * @return void
	 */
	public function __construct() {
		reset($this->units);
	}
	
	/**
	 * Formats the filesize
	 *
	 * @param integer $size					The file's size in bytes
	 * @param string $unit					The SI unit suffix to use
	 * @param integer $decimals				The maximum number of decimal places to show
	 * @param string $decimalSeparator		The symbol used as decimal separator
	 * @param string $thousandsSeparator	The symbol used as thousands separator
	 * @param boolean $useDecimalSystem		If set the decimal number system is used, instead of the binary number system
	 * @return string						The filesize with SI unit appended
	 * @author								Thomas "Thasmo" Deinhamer <thasmo@gmail.com>
	 * @api
	 */
	public function render($size = NULL, $unit = NULL, $decimals = 2, $decimalSeparator = ',', $thousandsSeparator = '.', $useDecimalSystem = FALSE) {
		
		# get the size
		if(is_null($size)) {
			$size = (int)$this->renderChildren();
		}
		
		# determine the quotient for the calculation
		$quotient = $useDecimalSystem ? 1000 : 1024;
		
		# determine the unit and calculate the final size
		while(($size > $quotient && is_null($unit)) || (!is_null($unit) && current($this->units) != strtolower($unit))) {
			$size /= $quotient;
			next($this->units);
		}
		
		$unit = current($this->units);
		$unit = strtoupper($unit) . ((!$isDecimal && $unit != 'b') ? 'i' : '') . ($unit != 'b' ? 'B' : '');
		
		# format the final size
		$size = number_format(round($size, $decimals), max(0, $decimals), $decimalSeparator, $thousandsSeparator);
		
		# append the unit to the final size
		return implode(' ', array($size, $unit));
	}
}
?>