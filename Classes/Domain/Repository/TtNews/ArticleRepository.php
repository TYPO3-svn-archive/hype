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
 * A repository for Articles
 */
class Tx_Hype_Domain_Repository_TtNews_ArticleRepository extends Tx_Extbase_Persistence_Repository {
	
	/**
	 * Finds the most recent news articles
	 *
	 * @var integer $limit
	 * @return
	 */
	public function findRecent($limit = 0) {
		
		# create new query
		$query = $this->createQuery();
		
		# set orderings
		$query->setOrderings(array('datetime' => Tx_Extbase_Persistence_QueryInterface::ORDER_DESCENDING));
		
		# set query limit
		if($limit > 0) {
			$query->setLimit((int)$limit);
		}
		
		# run query
		return $query->execute();
	}
}
?>