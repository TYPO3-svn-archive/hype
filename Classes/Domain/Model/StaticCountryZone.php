<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2010 Thomas "Thasmo" Deinhamer <thasmo@gmail.com>
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

/**
 * StaticCountryZone
 *
 * @package Hype
 * @subpackage Domain/Model
 * @version $Id:$
 * @copyright Copyright belongs to the respective authors
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License, version 2
 * @scope prototype
 * @valueobject
 */
class Tx_Hype_Domain_Model_StaticCountryZone extends Tx_Extbase_DomainObject_AbstractValueObject {
	
	/**
	 * @var string
	 * @validate String
	 */
	protected $isoCountryCode2;
	
	/**
	 * @var string
	 * @validate String
	 */
	protected $isoCountryCode3;
	
	/**
	 * @var integer
	 * @validate Integer
	 */
	protected $isoCountryNumber;
	
	/**
	 * @var string
	 * @validate String
	 */
	protected $code;
	
	/**
	 * @var string
	 * @validate String
	 */
	protected $localName;
	
	/**
	 * @var string
	 * @validate String
	 */
	protected $englishName;
	
	/**
	 * @var string
	 * @validate String
	 */
	protected $germanName;
	
	/**
	 * Getter for isoCountryCode2
	 *
	 * @return string
	 */
	public function getIsoCountryCode2() {
		return $this->isoCountryCode2;
	}
	
	/**
	 * Getter for isoCountryCode3
	 *
	 * @return string
	 */
	public function getIsoCountryCode3() {
		return $this->isoCountryCode3;
	}
	
	/**
	 * Getter for isoCountryNumber
	 *
	 * @return integer
	 */
	public function getIsoCountryNumber() {
		return $this->isoCountryNumber;
	}
	
	/**
	 * Getter for code
	 *
	 * @return string
	 */
	public function getCode() {
		return $this->code;
	}
	
	/**
	 * Getter for localName
	 *
	 * @return string
	 */
	public function getLocalName() {
		return $this->localName;
	}
	
	/**
	 * Getter for englishName
	 *
	 * @return string
	 */
	public function getEnglishName() {
		return $this->englishName;
	}
	
	/**
	 * Getter for germanName
	 *
	 * @return string
	 */
	public function getGermanName() {
		return $this->germanName;
	}
	
	
	
	/* Magic methods */
	
	/**
	 * Returns as a formatted string
	 *
	 * @return string
	 */
	public function __toString() {
		return $this->getEnglishName();
	}
}
?>