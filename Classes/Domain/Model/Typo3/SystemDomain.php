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
 * SystemDomain
 *
 * @package Hype
 * @subpackage Domain/Model
 * @version $Id:$
 * @copyright Copyright belongs to the respective authors
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License, version 2
 * @scope prototype
 * @entity
 */
class Tx_Hype_Domain_Model_Typo3_SystemDomain extends Tx_Extbase_DomainObject_AbstractEntity {
	
	/**
	 * @var integer
	 * @validate Integer
	 */
	protected $pid;
	
	/**
	 * @var boolean
	 * @validate Boolean
	 */
	protected $hidden;
	
	/**
	 * @var integer
	 * @validate Integer
	 */
	protected $sorting;
	
	/**
	 * @var Tx_Hype_Domain_Model_Typo3_BackendUser
	 */
	protected $creationUser;
	
	/**
	 * @var DateTime
	 */
	protected $creationDate;
	
	/**
	 * @var DateTime
	 */
	protected $modificationDate;
	
	/**
	 * @var string
	 * @validate String
	 */
	protected $domainName;
	
	/**
	 * @var string
	 * @validate String
	 */
	protected $redirectionAddress;
	
	/**
	 * @var integer
	 * @validate Integer
	 */
	protected $redirectionHttpStatusCode;
	
	/**
	 * @var boolean
	 * @validate Boolean
	 */
	protected $prependParameters;
	
	/**
	 * @var boolean
	 * @validate Boolean
	 */
	protected $forced;
	
	/**
	 * Getter for pid
	 *
	 * @return integer
	 */
	public function getPid() {
		return $this->pid;
	}
	
	/**
	 * Setter for pid
	 *
	 * @param integer $pid
	 * @return void
	 */
	public function setPid($pid) {
		$this->pid = $pid;
	}
	
	/**
	 * Getter for hidden
	 *
	 * @return boolean
	 */
	public function getHidden() {
		return $this->hidden;
	}
	
	/**
	 * Setter for hidden
	 *
	 * @param boolean $hidden
	 * @return void
	 */
	public function setHidden($hidden) {
		$this->hidden = $hidden;
	}
	
	/**
	 * Getter for sorting
	 *
	 * @return integer
	 */
	public function getSorting() {
		return $this->sorting;
	}
	
	/**
	 * Setter for sorting
	 *
	 * @param integer $sorting
	 * @return void
	 */
	public function setSorting($sorting) {
		$this->sorting = $sorting;
	}
	
	/**
	 * Getter for creationUser
	 *
	 * @return Tx_Hype_Domain_Model_Typo3_BackendUser
	 */
	public function getCreationUser() {
		return $this->creationUser;
	}
	
	/**
	 * Setter for creationUser
	 *
	 * @param Tx_Hype_Domain_Model_Typo3_BackendUser $creationUser
	 * @return void
	 */
	public function setCreationUser(Tx_Hype_Domain_Model_Typo3_BackendUser $creationUser) {
		$this->creationUser = $creationUser;
	}
	
	/**
	 * Getter for creationDate
	 *
	 * @return DateTime
	 */
	public function getCreationDate() {
		return $this->creationDate;
	}
	
	/**
	 * Setter for creationDate
	 *
	 * @param DateTime $creationDate
	 * @return void
	 */
	public function setCreationDate(DateTime $creationDate) {
		$this->creationDate = $creationDate;
	}
	
	/**
	 * Getter for modificationDate
	 *
	 * @return DateTime
	 */
	public function getModificationDate() {
		return $this->modificationDate;
	}
	
	/**
	 * Setter for modificationDate
	 *
	 * @param DateTime $modificationDate
	 * @return void
	 */
	public function setModificationDate(DateTime $modificationDate) {
		$this->modificationDate = $modificationDate;
	}
	
	/**
	 * Getter for domainName
	 *
	 * @return string
	 */
	public function getDomainName() {
		return $this->domainName;
	}
	
	/**
	 * Setter for domainName
	 *
	 * @param string $domainName
	 * @return void
	 */
	public function setDomainName($domainName) {
		$this->domainName = $domainName;
	}
	
	/**
	 * Getter for redirectionAddress
	 *
	 * @return string
	 */
	public function getRedirectionAddress() {
		return $this->redirectionAddress;
	}
	
	/**
	 * Setter for redirectionAddress
	 *
	 * @param string $redirectionAddress
	 * @return void
	 */
	public function setRedirectionAddress($redirectionAddress) {
		$this->redirectionAddress = $redirectionAddress;
	}
	
	/**
	 * Getter for redirectionHttpStatusCode
	 *
	 * @return integer
	 */
	public function getRedirectionHttpStatusCode() {
		return $this->pid;
	}
	
	/**
	 * Setter for redirectionHttpStatusCode
	 *
	 * @param integer $redirectionHttpStatusCode
	 * @return void
	 */
	public function setRedirectionHttpStatusCode($redirectionHttpStatusCode) {
		$this->redirectionHttpStatusCode = $redirectionHttpStatusCode;
	}
	
	/**
	 * Getter for prependParameters
	 *
	 * @return boolean
	 */
	public function getPrependParameters() {
		return $this->pid;
	}
	
	/**
	 * Setter for prependParameters
	 *
	 * @param boolean $prependParameters
	 * @return void
	 */
	public function setPrependParameters($prependParameters) {
		$this->prependParameters = $prependParameters;
	}
	
	/**
	 * Getter for forced
	 *
	 * @return boolean
	 */
	public function getForced() {
		return $this->pid;
	}
	
	/**
	 * Setter for forced
	 *
	 * @param boolean $forced
	 * @return void
	 */
	public function setForced($forced) {
		$this->forced = $forced;
	}
	
	
	
	/* Magic methods */
	
	/**
	 * Returns as a formatted string
	 *
	 * @return string
	 */
	public function __toString() {
		return $this->getDomainName();
	}
}
?>