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
class Tx_Hype_ViewHelpers_Format_FilesizeViewHelper extends Tx_Fluid_Core_ViewHelper_AbstractViewHelper {
	
	protected $units = array('b', 'k', 'm', 'g', 't', 'e', 'z', 'y');
	protected $modes = array('binary' => 1024, 'decimal' => 1000);
	
	/**
	 * Initializes the viewhelper
	 *
	 * @return void
	 */
	public function __construct() {
		reset($this->units);
	}
	
	/**
	 * Render the filesize
	 *
	 * @param integer $size The files size in bytes
	 * @param string $unit The SI unit suffix to use
	 * @param integer $precision The optional number of decimal digits to round to
	 * @param string $mode The mode to calculate the size and determine the SI unit
	 * @return string The filesize with SI unit appended
	 */
	public function render($size = 0, $unit = NULL, $precision = 2, $mode = 'binary') {
		
		while(($size > $this->modes[$mode] && is_null($unit)) || (!is_null($unit) && current($this->units) != strtolower($unit))) {
			$size /= $this->modes[$mode];
			next($this->units);
		}
		
		return round($size, $precision) . ' ' . strtoupper(current($this->units)) . ($mode == 'binary' ? 'i' : '') . 'B';
	}
}

?>