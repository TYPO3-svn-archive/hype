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
 * StaticCurrency
 *
 * @package Hype
 * @subpackage Domain/Model
 * @version $Id:$
 * @copyright Copyright belongs to the respective authors
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License, version 2
 * @scope prototype
 * @valueobject
 */
class Tx_Hype_Domain_Model_StaticCurrency extends Tx_Extbase_DomainObject_AbstractValueObject {
	
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
	 * @var string
	 * @validate String
	 */
	protected $leftSymbol;
	
	/**
	 * @var string
	 * @validate String
	 */
	protected $rightSymbol;
	
	/**
	 * @var string
	 * @validate String
	 */
	protected $thousandsSeparator;
	
	/**
	 * @var string
	 * @validate String
	 */
	protected $decimalSeparator;
	
	/**
	 * @var integer
	 * @validate Integer
	 */
	protected $decimalDigits;
	
	/**
	 * @var string
	 * @validate String
	 */
	protected $fractionDivisor;
	
	/**
	 * @var string
	 * @validate String
	 */
	protected $leftFractionSymbol;
	
	/**
	 * @var string
	 * @validate String
	 */
	protected $rightFractionSymbol;
	
	/**
	 * @var string
	 * @validate String
	 */
	protected $englishName;
	
	/**
	 * @var string
	 * @validate String
	 */
	protected $englishFractionName;
	
	/**
	 * @var string
	 * @validate String
	 */
	protected $germanName;
	
	/**
	 * @var string
	 * @validate String
	 */
	protected $germanFractionName;
	
	/**
	 * Getter for isoCode3
	 *
	 * @return string
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
	 * Getter for leftSymbol
	 *
	 * @return string
	 */
	public function getLeftSymbol() {
		return $this->leftSymbol;
	}
	
	/**
	 * Getter for rightSymbol
	 *
	 * @return string
	 */
	public function getRightSymbol() {
		return $this->rightSymbol;
	}
	
	/**
	 * Getter for thousandsSeparator
	 *
	 * @return string
	 */
	public function getThousandsSeparator() {
		return $this->thousandsSeparator;
	}
	
	/**
	 * Getter for decimalSeparator
	 *
	 * @return string
	 */
	public function getDecimalSeparator() {
		return $this->decimalSeparator;
	}
	
	/**
	 * Getter for decimalDigits
	 *
	 * @return integer
	 */
	public function getDecimalDigits() {
		return $this->decimalDigits;
	}
	
	/**
	 * Getter for fractionDivisor
	 *
	 * @return string
	 */
	public function getFractionDivisor() {
		return $this->fractionDivisor;
	}
	
	/**
	 * Getter for leftFractionSymbol
	 *
	 * @return string
	 */
	public function getLeftFractionSymbol() {
		return $this->leftFractionSymbol;
	}
	
	/**
	 * Getter for rightFractionSymbol
	 *
	 * @return string
	 */
	public function getRightFractionSymbol() {
		return $this->rightFractionSymbol;
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
	 * Getter for englishFractionName
	 *
	 * @return string
	 */
	public function getEnglishFractionName() {
		return $this->englishFractionName;
	}
	
	/**
	 * Getter for germanName
	 *
	 * @return string
	 */
	public function getGermanName() {
		return $this->germanName;
	}
	
	/**
	 * Getter for germanFractionName
	 *
	 * @return string
	 */
	public function getGermanFractionName() {
		return $this->germanFractionName;
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