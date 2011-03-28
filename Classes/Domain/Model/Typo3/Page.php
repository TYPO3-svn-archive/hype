<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2011 Thomas "Thasmo" Deinhamer <thasmo@gmail.com>
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
 * Page
 *
 * @package Hype
 * @subpackage Domain/Model
 * @version $Id:$
 * @copyright Copyright belongs to the respective authors
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License, version 2
 * @scope prototype
 * @entity
 */
class Tx_Hype_Domain_Model_Typo3_Page extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * @var integer
	 */
	protected $pid;

	/**
	 * @var string
	 */
	protected $title;

	/**
	 * @var DateTime
	 */
	protected $modificationDate;

	/**
	 * @var integer
	 */
	protected $sorting;

	/**
	 * @var boolean
	 */
	protected $deleted;

	/**
	 * @var Tx_Hype_Domain_Model_Typo3_BackendUser
	 */
	//protected $owner;

	/**
	 * @var Tx_Hype_DomainModel_Typo3_BackendUsergroup
	 */
	//protected $group;

	/**
	 * @var integer
	 */
	protected $ownerPermissions;

	/**
	 * @var integer
	 */
	protected $groupPermissions;

	/**
	 * @var integer
	 */
	protected $defaultPermissions;

	/**
	 * @var boolean
	 */
	protected $editLock;

	/**
	 * @var DateTime
	 */
	protected $creationDate;

	/**
	 * @var Tx_Hype_Domain_Model_Typo3_BackendUser
	 */
	//protected $creationUser;

	/**
	 * @var boolean
	 */
	protected $hidden;

	/**
	 * @var string
	 */
	protected $type;

	/**
	 * @var string
	 */
	protected $typoscriptConfiguration;

	/**
	 * @var Tx_Hype_Domain_Model_Typo3_Page
	 */
	protected $storagePage;

	/**
	 * @var boolean
	 */
	protected $isRoot;

	/**
	 * @var boolean
	 */
	protected $phpTreeStop;

	/**
	 * @var string
	 */
	protected $url;

	/**
	 * @var DateTime
	 */
	protected $startTime;

	/**
	 * @var DateTime
	 */
	protected $endTime;

	/**
	 * @var string
	 */
	protected $urlType;

	/**
	 * @var string
	 */
	protected $shortcut;

	/**
	 * @var string
	 */
	protected $shortcutMode;

	/**
	 * @var boolean
	 */
	protected $noCache;

	/**
	 * @var Tx_Hype_Domain_Model_Typo3_FrontendUsergroup
	 */
	protected $frontendGroup;

	/**
	 * @var string
	 */
	protected $subtitle;

	/**
	 * @var string
	 */
	protected $layout;

	/**
	 * @var string
	 */
	protected $target;

	/**
	 * @var string
	 */
	protected $media;

	/**
	 * @var DateTime
	 */
	protected $lastUpdated;

	/**
	 * @var string
	 */
	protected $keywords;

	/**
	 * @var string
	 */
	protected $cacheTimeout;

	/**
	 * @var string
	 */
	protected $newUntil;

	/**
	 * @var string
	 */
	protected $description;

	/**
	 * @var boolean
	 */
	protected $noSearch;


	/**
	 * @var string
	 */
	protected $asbtract;

	/**
	 * @var string
	 */
	protected $module;

	/**
	 * @var boolean
	 */
	protected $extendToSubpages;

	/**
	 * @var string
	 */
	protected $author;

	/**
	 * @var string
	 */
	protected $authorEmailAddress;

	/**
	 * @var string
	 */
	protected $navigationTitle;

	/**
	 * @var string
	 */
	protected $hide;

	/**
	 * @var Tx_Hype_Domain_Model_Typo3_Page
	 */
	protected $contentFromPage;

	/**
	 * @var Tx_Hype_Domain_Model_Typo3_Page
	 */
	protected $mountPage;

	/**
	 * @var boolean
	 */
	protected $mountPageOverlay;

	/**
	 * @var string
	 */
	protected $alias;

	/**
	 * @var string
	 */
	protected $internationalizationConfiguration;

	/**
	 * @var string
	 */
	protected $frontendLoginMode;

	/**
	 *
	 */
	public function initializeObject() {
		$this->contentRepository = t3lib_div::makeInstance('Tx_Hype_Domain_Repository_Typo3_ContentRepository');
	}

	/**
	 * @param integer $pid
	 * @return void
	 */
	public function setPid($pid) {
		$this->pid = $pid;
	}

	/**
	 * @return integer
	 */
	public function getPid() {
		return $this->pid;
	}

	/**
	 * @param string $title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * @return string
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * @param string $subtitle
	 * @return void
	 */
	public function setSubtitle($subtitle) {
		$this->subtitle = $subtitle;
	}

	/**
	 * @return string
	 */
	public function getSubtitle() {
		return $this->subtitle;
	}

	/**
	 * @return
	 */
	public function getContents() {
		return $this->contentRepository->findByPid($this->getUid());
	}

	public function __toString() {
		return $this->getTitle();
	}
}
?>