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
 * View helper for rendering the file size of a file
 *
 * @version $Id$
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Tx_Hype_ViewHelpers_File_SizeViewHelper extends Tx_Fluid_Core_ViewHelper_AbstractViewHelper {
	
	protected $units = array('b', 'k', 'm', 'g', 't', 'e', 'z', 'y');
	protected $modes = array('binary' => 1024, 'decimal' => 1000);
	
	/**
	 * Render the filesize
	 *
	 * @param string $path Path to the file
	 * @param string $unit The SI unit suffix to use
	 * @param int $precision The optional number of decimal digits to round to
	 * @param string $mode The mode to calculate the size and determine the SI unit
	 * @return string The filesize with SI unit appended
	 */
	public function render($path, $unit = NULL, $precision = 2, $mode = 'binary') {
		
		$path = realpath($path);
		
		if(!is_file($path)) {
			return FALSE;
		}
		
		$size = filesize($path);
		
		while(($size > $this->modes[$mode] && is_null($unit)) || (!is_null($unit) && current($this->units) != strtolower($unit))) {
			$size /= $this->modes[$mode];
			next($this->units);
		}
		
		return round($size, $precision) . ' ' . strtoupper(current($this->units)) . ($mode == 'binary' ? 'i' : '') . 'B';
	}
}

?>