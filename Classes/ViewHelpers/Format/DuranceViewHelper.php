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
 * View helper for formatting a time durance
 *
 * @version $Id$
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 *
 */
class Tx_Hype_ViewHelpers_Format_DuranceViewHelper extends Tx_Fluid_Core_ViewHelper_AbstractViewHelper {

	/**
	 * Formats the durance in hours, minutes and seconds
	 *
	 * @param integer $seconds				The durance in seconds
	 * @param string $separator				The separator for hours, minutes and seconds
	 * @param boolean $stripHours			Remove hours value if empty
	 * @param boolean $stripMinutes			Remove minutes value if empty
	 * @return string						The formatted durance
	 * @author								Thomas "Thasmo" Deinhamer <thasmo@gmail.com>
	 * @api
	 */
	public function render($seconds = NULL, $separator = ':', $stripHours = TRUE, $stripMinutes = FALSE) {

		# get the durance
		if(is_null($seconds)) {
			$seconds = (integer)$this->renderChildren();
		}

		# format the seconds
		$format = implode($separator, array('H', 'i', 's'));
		$durance = gmdate($format, $seconds);
		$parts = explode($separator, $durance);

		# strip of empty hours
		if($stripHours && intval($parts[0]) == 0) {
			unset($parts[0]);
		}

		# strip of empty minutes
		if($stripMinutes && intval($parts[1]) == 0) {
			unset($parts[1]);
		}

		# build final string
		$durance = implode($separator, $parts);

		return $durance;
	}
}
?>