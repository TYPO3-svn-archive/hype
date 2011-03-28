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
 * BackendUser
 *
 * @package Hype
 * @subpackage Domain/Model
 * @version $Id:$
 * @copyright Copyright belongs to the respective authors
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License, version 2
 * @scope prototype
 * @entity
 */
class Tx_Hype_Domain_Model_Typo3_BackendUser extends Tx_Extbase_DomainObject_AbstractEntity {
	
	/**
	 * @var string
	 * @validate String
	 */
	protected $username;
	
	/*
	pid
	disable
	deleted
	starttime.mapOnProperty = startTime
	endtime.mapOnProperty = endTime
	cruser_id.mapOnProperty = creationUser
	crdate.mapOnProperty = creationDate
	tstamp.mapOnProperty = modificationDate
	username
	password
	admin.mapOnProperty = isAdmin
	usergroup.mapOnProperty = usergroups
	lang.mapOnProperty = language
	email
	db_mountpoints.mapOnProperty = databaseMountpoints
	options
	realName.mapOnProperty = realName
	userMods.mapOnProperty = allowedModules
	allowed_languages.mapOnProperty = allowedLanguages
	uc.mapOnProperty = backendConfiguration
	file_mountpoints.mapOnProperty = fileMountpoints
	fileoper_perms.mapOnProperty = filePermissions
	workspace_perms.mapOnProperty = workspacePermissions
	lockToDomain.mapOnProperty = allowedDomain
	disableIPlock.mapOnProperty = disableIpLock
	TSconfig.mapOnProperty = typoscriptConfiguration
	lastlogin.mapOnProperty = lastLogin
	createdByAction.mapOnProperty = createAction
	usergroup_cached_list
	workspace_id
	workspace_preview
	*/
	
	/**
	 * Getter for username
	 *
	 * @return string
	 */
	public function getUsername() {
		return $this->username;
	}
	
	/**
	 * Setter for username
	 *
	 * @param string $username
	 * @return void
	 */
	public function setUsername($username) {
		$this->username = $username;
	}
	
	public function __toString() {
		return $this->getUsername();
	}
}
?>