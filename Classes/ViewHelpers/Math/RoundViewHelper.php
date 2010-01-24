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
 * View helper for returning the rounded value of a number
 *
 * @version $Id$
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Tx_Hype_ViewHelpers_Math_RoundViewHelper extends Tx_Fluid_Core_ViewHelper_AbstractViewHelper {
	
	protected $modes = array(
		'up' => PHP_ROUND_HALF_UP,
		'down' => PHP_ROUND_HALF_DOWN,
		'even' => PHP_ROUND_HALF_EVEN,
		'odd' => PHP_ROUND_HALF_ODD,
	);
	
	/**
	 * Render the rounded value of a number
	 *
	 * @param mixed $number The number to round
	 * @param int $precision The optional number of decimal digits to round to
	 * @param string $mode The special mode to apply to half values (x.5)
	 * @return string The absolute value of the number
	 */
	public function render($number, $precision = 2, $mode = 'up') {
		return round($number, $precision, $this->modes[$mode]);
	}
}

?>