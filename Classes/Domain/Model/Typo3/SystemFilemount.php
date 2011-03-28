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
 * SystemFilemount
 *
 * @package Hype
 * @subpackage Domain/Model
 * @version $Id:$
 * @copyright Copyright belongs to the respective authors
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License, version 2
 * @scope prototype
 * @entity
 */
class Tx_Hype_Domain_Model_Typo3_SystemFilemount extends Tx_Extbase_DomainObject_AbstractEntity {
	
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
	 * @var boolean
	 * @validate Boolean
	 */
	protected $deleted;
	
	/**
	 * @var integer
	 * @validate Integer
	 */
	protected $sorting;
	
	/**
	 * @var DateTime
	 */
	protected $modificationDate;
	
	/**
	 * @var string
	 * @validate String
	 */
	protected $title;
	
	/**
	 * @var string
	 * @validate String
	 */
	protected $path;
	
	/**
	 * @var boolean
	 * @validate Boolean
	 */
	protected $isRelative;
	
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
	 * @var integer $pid
	 * @return void
	 */
	public function setPid($pid) {
		$this->pid = $pid;
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
	 * @var integer $sorting
	 * @return void
	 */
	public function setSorting($sorting) {
		$this->sorting = $sorting;
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
	 * @var DateTime $modificationDate
	 * @return void
	 */
	public function setModificationDate(DateTime $modificationDate) {
		$this->modificationDate = $modificationDate;
	}
	
	/**
	 * Getter for title
	 *
	 * @return string
	 */
	public function getTitle() {
		return $this->title;
	}
	
	/**
	 * Setter for title
	 *
	 * @var string $title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
	}
	
	/**
	 * Getter for path
	 *
	 * @return string
	 */
	public function getPath() {
		return $this->path;
	}
	
	/**
	 * Setter for path
	 *
	 * @var string $path
	 * @return void
	 */
	public function setPath($path) {
		$this->path = $path;
	}
	
	/**
	 * Getter for isRelative
	 *
	 * @return boolean
	 */
	public function getIsRelative() {
		return $this->isRelative;
	}
	
	/**
	 * Setter for isRelative
	 *
	 * @var boolean $isRelative
	 * @return void
	 */
	public function setIsRelative($isRelative) {
		$this->isRelative = $isRelative;
	}
	
	
	
	/* Custom methods */
	
	/**
	 * Returns the complete path
	 *
	 * @return string
	 */
	public function getCompletePath() {
		return ($this->isRelative()) ? 'fileadmin/' . $this->getPath() : $this->getPath();
	}
	
	
	
	/* Magic methods */
	
	/**
	 * Returns as a formatted string
	 *
	 * @return string
	 */
	public function __toString() {
		return $this->getTitle();
	}
}
?>