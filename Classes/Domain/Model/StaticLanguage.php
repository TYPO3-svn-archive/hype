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
 * StaticLanguage
 *
 * @package Hype
 * @subpackage Domain/Model
 * @version $Id:$
 * @copyright Copyright belongs to the respective authors
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License, version 2
 * @scope prototype
 * @valueobject
 */
class Tx_Hype_Domain_Model_StaticLanguage extends Tx_Extbase_DomainObject_AbstractValueObject {
	
	/**
	 * @var string
	 * @validate String
	 */
	protected $isoCode2;
	
	/**
	 * @var string
	 * @validate String
	 */
	protected $typo3Code;
	
	/**
	 * @var string
	 * @validate String
	 */
	protected $isoCountryCode2;
	
	/**
	 * @var string
	 * @validate String
	 */
	protected $locale;
	
	/**
	 * @var string
	 * @validate String
	 */
	protected $localName;
	
	/**
	 * @var integer
	 * @validate Integer
	 */
	protected $sacred;
	
	/**
	 * @var integer
	 * @validate Integer
	 */
	protected $constructed;
	
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
	 * Getter for isoCode3
	 *
	 * @return integer
	 */
	public function getIsoCode3() {
		return $this->isoCode3;
	}
	
	/**
	 * Setter for isoCode2
	 *
	 * @param integer $isoCode2
	 * @return void
	 */
	public function setIsoCode2($isoCode2) {
		$this->isoCode2 = $isoCode2;
	}
	
	/**
	 * Getter for typo3Code
	 *
	 * @return integer
	 */
	public function getTypo3Code() {
		return $this->typo3Code;
	}
	
	/**
	 * Setter for typo3Code
	 *
	 * @param integer $typo3Code
	 * @return void
	 */
	public function setTypo3Code($typo3Code) {
		$this->typo3Code = $typo3Code;
	}
	
	/**
	 * Getter for isoCountryCode2
	 *
	 * @return integer
	 */
	public function getIsoCountryCode2() {
		return $this->isoCountryCode2;
	}
	
	/**
	 * Setter for isoCountryCode2
	 *
	 * @param integer $isoCountryCode2
	 * @return void
	 */
	public function setIsoCountryCode2($isoCountryCode2) {
		$this->isoCountryCode2 = $isoCountryCode2;
	}
	
	/**
	 * Getter for locale
	 *
	 * @return integer
	 */
	public function getLocale() {
		return $this->locale;
	}
	
	/**
	 * Setter for locale
	 *
	 * @param integer $locale
	 * @return void
	 */
	public function setLocale($locale) {
		$this->locale = $locale;
	}
	
	/**
	 * Getter for localName
	 *
	 * @return integer
	 */
	public function getLocalName() {
		return $this->localName;
	}
	
	/**
	 * Setter for localName
	 *
	 * @param integer $localName
	 * @return void
	 */
	public function setLocalName($localName) {
		$this->localName = $localName;
	}
	
	/**
	 * Getter for sacred
	 *
	 * @return integer
	 */
	public function getSacred() {
		return $this->sacred;
	}
	
	/**
	 * Setter for sacred
	 *
	 * @param integer $sacred
	 * @return void
	 */
	public function setSacred($sacred) {
		$this->sacred = $sacred;
	}
	
	/**
	 * Getter for constructed
	 *
	 * @return integer
	 */
	public function getConstructed() {
		return $this->constructed;
	}
	
	/**
	 * Setter for constructed
	 *
	 * @param integer $constructed
	 * @return void
	 */
	public function setConstructed($constructed) {
		$this->constructed = $constructed;
	}
	
	/**
	 * Getter for englishName
	 *
	 * @return integer
	 */
	public function getEnglishName() {
		return $this->englishName;
	}
	
	/**
	 * Setter for englishName
	 *
	 * @param integer $englishName
	 * @return void
	 */
	public function setEnglishName($englishName) {
		$this->englishName = $englishName;
	}
	
	/**
	 * Getter for germanName
	 *
	 * @return integer
	 */
	public function getGermanName() {
		return $this->germanName;
	}
	
	/**
	 * Setter for germanName
	 *
	 * @param integer $germanName
	 * @return void
	 */
	public function setGermanName($germanName) {
		$this->germanName = $germanName;
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