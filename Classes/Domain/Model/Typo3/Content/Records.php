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
 * Records
 *
 * @package Hype
 * @subpackage Domain/Model
 * @version $Id:$
 * @copyright Copyright belongs to the respective authors
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License, version 2
 * @scope prototype
 * @entity
 */
class Tx_Hype_Domain_Model_Typo3_Content_Records extends Tx_Hype_Domain_Model_Typo3_Content {
	
	/**
	 * @var string
	 */
	protected $records;
	
	/**
	 * Returns the content's type
	 *
	 * @return string
	 */
	public function getType() {
		return 'records';
	}
	
	/**
	 *
	 *
	 * @return array
	 */
	public function getRecords() {
		
		$recordNames = explode(',', $this->records);
		
		$records = array();
		foreach($recordNames as $recordName) {
			
			$repository = Tx_Hype_Persistence_RepositoryFactory::createByRecordName($recordName);
			
			if($repository) {
				$uid = end(explode('_', $recordName));
				array_push($records, $repository->findByUid($uid));
			}
		}
		
		return $records;
	}
}
?>