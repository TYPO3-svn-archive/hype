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
 * View helper for formatting a telephone number
 *
 * @version $Id$
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 *
 * = Examples =
 *
 * Example 1:
 * {f:format.telephoneNumber(telephoneNumber: '123456789', countryCode: '43', areaCode: '321', directDialNumber: '99', segmentLength: '3')}
 * Output:
 * +43 321 123 456 789-99
 *
 * Example 2:
 * {h:format.telephoneNumber(telephoneNumber: '123456789', areaCode: '321')}
 * Output:
 * 0321 123456789
 */
class Tx_Hype_ViewHelpers_Format_TelephoneNumberViewHelper extends Tx_Fluid_Core_ViewHelper_AbstractViewHelper {
	
	protected $phonewordMapping = array(
		2 => array('a', 'b', 'c'),
		3 => array('d', 'e', 'f'),
		4 => array('g', 'h', 'i'),
		5 => array('j', 'k', 'l'),
		6 => array('m', 'n', 'o'),
		7 => array('p', 'q', 'r', 's'),
		8 => array('t', 'u', 'v'),
		9 => array('w', 'x', 'y', 'z'),
	);
	
	/**
	 * Formats the telephone number
	 *
	 * @param string $telephoneNumber			The telephone number
	 * @param integer $directDialNumber			The direct dial number
	 * @param integer $areaCode					The area code of the telephone number
	 * @param integer $countryCode				The international country code of the telephone number
	 * @param integer $segmentLength			The length of the number segments to split the number to
	 * @param string $segmentSeparator			The separator used to separate the segments
	 * @param string $countryCodeSeparator		The separator used to separate the country code from the area code
	 * @param string $areaCodeSeparator			The separator used to separate the area code from the telephone number
	 * @param string $countryCodePrefix			The prefix which is prepended to the country code
	 * @param string $directDialNumberSeparator	The separator which separates the telephone number from the direct dial number
	 * @param boolean $convertPhonewords		
	 * @return string							The formatted telephone number
	 * @author									Thomas "Thasmo" Deinhamer <thasmo@gmail.com>
	 * @api
	 */
	public function render($telephoneNumber, $directDialNumber = NULL, $areaCode = NULL, $countryCode = NULL, $segmentLength = 0, $segmentSeparator = ' ', $countryCodeSeparator = '/', $areaCodeSeparator = '/', $countryCodePrefix = '+', $directDialNumberSeparator = '-', $convertPhonewords = FALSE) {
		
		# clean up the number
		$telephoneNumber = preg_replace('~[^0-9a-z]~i', '', $telephoneNumber);
		
		# convert phonewords to numbers
		//if($convertPhonewords) {
		//	$telephoneNumber = preg_replace('~a-z~i', $this->phonewordMapping, $telephoneNumber);
		//}
		
		# split number into segments
		if($segmentLength > 0) {
			
			$excess = strlen($telephoneNumber) % $segmentLength;
			
			$segments = array_merge(
				array(substr($telephoneNumber, 0, $excess)),
				str_split(substr($telephoneNumber, $excess), $segmentLength)
			);
			
			$telephoneNumber = implode($segmentSeparator, $segments);
		}
		
		# process the direct dial number
		if($directDialNumber) {
			$telephoneNumber .= $directDialNumberSeparator . $directDialNumber;
		}
		
		# process the country code
		if($countryCode) {
			$countryCode = $countryCodePrefix . $countryCode;
		} else {
			unset($countryCodeSeparator);
		}
		
		# process the area code
		if($areaCode) {
			$areaCode = ltrim($areaCode, '0');
			
			if(!$countryCode) {
				$areaCode = '0' . $areaCode;
			}
		} else {
			unset($countryCode);
			unset($countryCodeSeparator);
			unset($areaCodeSeparator);
		}
		
		# return the number
		return implode(' ', array_filter(array($countryCode, $countryCodeSeparator, $areaCode, $areaCodeSeparator, $telephoneNumber)));
	}
}
?>