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
 * BackendUsergroup
 *
 * @package Hype
 * @subpackage Domain/Model
 * @version $Id:$
 * @copyright Copyright belongs to the respective authors
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License, version 2
 * @scope prototype
 * @entity
 */
class Tx_Hype_Domain_Model_Typo3_BackendUsergroup extends Tx_Extbase_DomainObject_AbstractEntity {
	
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
	protected $title;
	
	/**
	 * @var string
	 * @validate String
	 */
	protected $allowedFields;
	
	/**
	 * @var string
	 * @validate String
	 */
	protected $deniedPlugins;
	
	/**
	 * @var string
	 * @validate String
	 */
	protected $allowedLanguages;
	
	/**
	 * @var string
	 * @validate String
	 */
	protected $options;
	
	/**
	 * @var string
	 * @validate String
	 */
	protected $databaseMountpoints;
	
	/**
	 * @var string
	 * @validate String
	 */
	protected $pageTypes;
	
	/**
	 * @var string
	 * @validate String
	 */
	protected $viewableTables;
	
	/**
	 * @var string
	 * @validate String
	 */
	protected $editableTables;
	
	/**
	 * @var string
	 * @validate String
	 */
	protected $allowedModules;
	
	/**
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Hype_Domain_Model_Typo3_SystemFilemount>
	 */
	protected $fileMountpoints;
	
	/**
	 * @var integer
	 * @validate Integer
	 */
	protected $filePermissions;
	
	/**
	 * @var boolean
	 * @validate Boolean
	 */
	protected $enableAccessLists;
	
	/**
	 * @var string
	 * @validate String
	 */
	protected $description;
	
	/**
	 * @var string
	 * @validate String
	 */
	protected $allowedDomain;
	
	/**
	 * @var string
	 * @validate String
	 */
	protected $typoscriptConfiguration;
	
	/**
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Hype_Domain_Model_Typo3_BackendUsergroup>
	 */
	protected $usergroups;
	
	/**
	 * @var boolean
	 * @validate Boolean
	 */
	protected $hideInLists;
	
	/**
	 * @var integer
	 * @validate Integer
	 */
	protected $workspacePermissions;
	
	
	
	/* Magic methods */
	
	public function __toString() {
		return get_class($this);
	}
}
?>