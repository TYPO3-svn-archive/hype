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
 * StaticCountry
 *
 * @package Hype
 * @subpackage Domain/Model
 * @version $Id:$
 * @copyright Copyright belongs to the respective authors
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License, version 2
 * @scope prototype
 * @valueobject
 */
class Tx_Hype_Domain_Model_StaticCountry extends Tx_Extbase_DomainObject_AbstractValueObject {
	
	/**
	 * @var string
	 * @validate String
	 */
	protected $isoCode2;
	
	/**
	 * @var string
	 * @validate String
	 */
	protected $isoCode3;
	
	/**
	 * @var integer
	 * @validate Integer
	 */
	protected $isoNumber;
	
	/**
	 * @var integer
	 * @validate Integer
	 */
	protected $territory;
	
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
	protected $capital;
	
	/**
	 * @var string
	 * @validate String
	 */
	protected $topLevelDomain;
	
	/**
	 * @var string
	 * @validate String
	 */
	protected $currencyCode;
	
	/**
	 * @var integer
	 * @validate Integer
	 */
	protected $currencyNumber;
	
	/**
	 * @var integer
	 * @validate Integer
	 */
	protected $countryCode;
	
	/**
	 * @var boolean
	 * @validate Boolean
	 */
	protected $euMember;
	
	/**
	 * @var boolean
	 * @validate Boolean
	 */
	protected $unoMember;
	
	/**
	 * @var integer
	 * @validate Integer
	 */
	protected $addressFormat;
	
	/**
	 * @var integer
	 * @validate Integer
	 */
	protected $zoneFlag;
	
	/**
	 * @var string
	 * @validate String
	 */
	protected $shortLocalName;
	
	/**
	 * @var string
	 * @validate String
	 */
	protected $shortEnglishName;
	
	/**
	 * Getter for isoCode2
	 *
	 * @return integer
	 */
	public function getIsoCode2() {
		return $this->isoCode2;
	}
	
	/**
	 * Getter for isoCode3
	 *
	 * @return integer
	 */
	public function getIsoCode3() {
		return $this->isoCode3;
	}
	
	/**
	 * Getter for isoNumber
	 *
	 * @return integer
	 */
	public function getIsoNumber() {
		return $this->isoNumber;
	}
	
	/**
	 * Getter for territory
	 *
	 * @return integer
	 */
	public function getTerritory() {
		return $this->territory;
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
	 * Getter for capital
	 *
	 * @return string
	 */
	public function getCapital() {
		return $this->capital;
	}
	
	/**
	 * Getter for topLevelDomain
	 *
	 * @return string
	 */
	public function getTopLevelDomain() {
		return $this->topLevelDomain;
	}
	
	/**
	 * Getter for currencyCode
	 *
	 * @return string
	 */
	public function getCurrencyCode() {
		return $this->currencyCode;
	}
	
	/**
	 * Getter for currencyNumber
	 *
	 * @return integer
	 */
	public function getCurrencyNumber() {
		return $this->currencyNumber;
	}
	
	/**
	 * Getter for countryCode
	 *
	 * @return integer
	 */
	public function getCountryCode() {
		return $this->countryCode;
	}
	
	/**
	 * Getter for euMember
	 *
	 * @return integer
	 */
	public function getEuMember() {
		return $this->euMember;
	}
	
	/**
	 * Getter for unoMember
	 *
	 * @return integer
	 */
	public function getUnoMember() {
		return $this->unoMember;
	}
	
	/**
	 * Getter for addressFormat
	 *
	 * @return integer
	 */
	public function getAddressFormat() {
		return $this->addressFormat;
	}
	
	/**
	 * Getter for zoneFlag
	 *
	 * @return integer
	 */
	public function getZoneFlag() {
		return $this->zoneFlag;
	}
	
	/**
	 * Getter for shortLocalName
	 *
	 * @return string
	 */
	public function getShortLocalName() {
		return $this->shortLocalName;
	}
	
	/**
	 * Getter for shortEnglishName
	 *
	 * @return string
	 */
	public function getShortEnglishName() {
		return $this->shortEnglishName;
	}
	
	
	
	/* Magic methods */
	
	/**
	 * Returns as a formatted string
	 *
	 * @return string
	 */
	public function __toString() {
		return $this->getShortEnglishName();
	}
}
?>