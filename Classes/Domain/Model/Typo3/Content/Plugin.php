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
 * Plugin
 *
 * @package Hype
 * @subpackage Domain/Model
 * @version $Id:$
 * @copyright Copyright belongs to the respective authors
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License, version 2
 * @scope prototype
 * @entity
 */
class Tx_Hype_Domain_Model_Typo3_Content_Plugin extends Tx_Hype_Domain_Model_Typo3_Content {
	
	/**
	 * @var string
	 */
	protected $pluginName;
	
	/**
	 * @var string
	 */
	protected $flexformData;
	
	/**
	 * @var Tx_Extbase_Configuration_AbstractConfigurationManager
	 */
	protected $frontendConfigurationManager;
	
	/**
	 * Initializes the model
	 */
	public function initializeObject() {
		$this->frontendConfigurationManager = t3lib_div::makeInstance('Tx_Hype_Configuration_FrontendConfigurationManager');
	}
	
	/**
	 * Returns the content's type
	 *
	 * @return string
	 */
	public function getType() {
		return 'plugin';
	}
	
	/**
	 * Sets pluginName
	 *
	 * @var string $pluginName
	 */
	public function setPluginName($pluginName) {
		$this->pluginName = $pluginName;
	}
	
	/**
	 * Gets pluginName
	 *
	 * @return
	 */
	public function getPluginName() {
		return $this->pluginName;
	}
	
	/**
	 * Sets flexformData
	 *
	 * @var string $flexformData
	 */
	public function setFlexformData($flexformData) {
		$this->flexformData = $flexformData;
	}
	
	/**
	 * Gets the flexformData as xml string
	 *
	 * @return string
	 */
	public function getFlexformData() {
		return $this->flexformData;
	}
	
	
	
	/* Custom methods */
	
	/**
	 * Returns
	 *
	 * @return Tx_Hype_Utility_Plugin_PluginInterface
	 */
	public function toPlugin() {
		
		$pluginName = str_replace(' ', '_', ucwords(str_replace('_', ' ', $this->getPluginName())));
		$pluginClassName = 'Tx_Hype_Utility_Plugin_' . $pluginName . 'Plugin';
		
		return t3lib_div::makeInstance($pluginClassName);
	}
	
	/**
	 * Returns the flexform data in a flattened array
	 *
	 * @return array
	 */
	public function getFlexformSettings() {
		return $this->frontendConfigurationManager->convertFlexformContentToArray($this->getFlexformData());
	}
	
	
	/* Magic methods */
	public function __toString() {
		return parent::__toString();
	}
}
?>