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
	 * Getter for isoCode2
	 *
	 * @return integer
	 */
	public function getIsoCode2() {
		return $this->isoCode2;
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
	 * Getter for isoCountryCode2
	 *
	 * @return integer
	 */
	public function getIsoCountryCode2() {
		return $this->isoCountryCode2;
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
	 * Getter for localName
	 *
	 * @return integer
	 */
	public function getLocalName() {
		return $this->localName;
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
	 * Getter for constructed
	 *
	 * @return integer
	 */
	public function getConstructed() {
		return $this->constructed;
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
	 * Getter for germanName
	 *
	 * @return integer
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