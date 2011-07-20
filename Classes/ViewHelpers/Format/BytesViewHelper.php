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
 * View helper for formatting bytes
 *
 * @version $Id$
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 *
 * = Examples =
 *
 * Example 1:
 * <f:format.bytes size="123456" />
 * Output:
 * 120.56 KiB
 *
 * Example 2:
 * <f:format.bytes decimals="3" useDecimalSystem="1">123456</h:format.bytes>
 * Output:
 * 123.456 KB
 *
 * Example 3:
 * {f:format.bytes(size: 123456, unit: 'm', decimals: 3, decimalSeparator: '.')}
 * Output:
 * 0.118 MiB
 *
 * Example 4:
 * {f:format.bytes(size: 123456, threshold: 100, decimals: 3)}
 * Output:
 * 0,118 MiB
 */
class Tx_Hype_ViewHelpers_Format_BytesViewHelper extends Tx_Fluid_Core_ViewHelper_AbstractViewHelper {

	protected $units = array('b', 'k', 'm', 'g', 't', 'e', 'z', 'y');

	/**
	 * Formats the bytes
	 *
	 * @param integer $size					The size in bytes
	 * @param string $unit					The SI unit suffix to use
	 * @param integer $threshold			The threshold of the final bytes used to force the next SI unit
	 * @param integer $decimals				The maximum number of decimal places to show
	 * @param string $decimalSeparator		The symbol used as decimal separator
	 * @param string $thousandsSeparator	The symbol used as thousands separator
	 * @param boolean $useDecimalSystem		If set the decimal number system is used, instead of the binary number system
	 * @return string						The bytes with SI unit appended
	 * @author								Thomas "Thasmo" Deinhamer <thasmo@gmail.com>
	 * @api
	 */
	public function render($size = NULL, $unit = NULL, $threshold = 0, $decimals = 2, $decimalSeparator = ',', $thousandsSeparator = '.', $useDecimalSystem = FALSE) {

		# get the size
		if(is_null($size)) {
			$size = (int)$this->renderChildren();
		}

		# determine the quotient for the calculation
		$quotient = $useDecimalSystem ? 1000 : 1024;

		# determine the valid threshold
		$threshold = min(max(0, $threshold), $quotient);

		# reset the units
		reset($this->units);

		# determine the unit and calculate the final size
		while(
			($size >= $quotient && is_null($unit)) || # if size is still greater than the quotient
			(current($this->units) != strtolower($unit) && !is_null($unit)) || # or the SI unit is manually defined and reached
			($threshold > 0 && $size > $threshold && is_null($unit)) # or the threshold forces to use the next unit
		) {
			$size /= $quotient;
			next($this->units);
		}

		# get the SI unit
		$unit = current($this->units);
		$unit = strtoupper($unit) . ((!$isDecimal && $unit != 'b') ? 'i' : '') . ($unit != 'b' ? 'B' : '');

		# format the final size
		$size = number_format(round($size, $decimals), max(0, $decimals), $decimalSeparator, $thousandsSeparator);

		# append the unit to the final size
		return implode(chr(32), array($size, $unit));
	}
}
?>