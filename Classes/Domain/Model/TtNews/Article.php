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
 * Article
 *
 * @package Hype
 * @subpackage Domain/Model
 * @version $Id:$
 * @copyright Copyright belongs to the respective authors
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License, version 2
 * @scope prototype
 * @entity
 */
class Tx_Hype_Domain_Model_TtNews_Article extends Tx_Extbase_DomainObject_AbstractEntity {
	
	/**
	 * @var string
	 */
	protected $title;
	
	/**
	 * @var DateTime
	 */
	protected $publicationDate;
	
	/**
	 * @var DateTime
	 */
	protected $archiveDate;
	
	/**
	 * @var string
	 */
	protected $images;
	
	/**
	 * @var string
	 */
	protected $captions;
	
	/**
	 * @var string
	 */
	protected $imagealttext;
	
	/**
	 * @var string
	 */
	protected $imagetitletext;
	
	/**
	 * @var string
	 */
	protected $introduction;
	
	/**
	 * @var string
	 */
	protected $text;
	
	/**
	 * @var string
	 */
	protected $author;
	
	/**
	 * @var string
	 */
	protected $authorEmail;
	
	/**
	 * @var string
	 */
	protected $files;
	
	/**
	 * @var string
	 */
	protected $links;
	
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
	 * Getter for title
	 *
	 * @return string
	 */
	public function getTitle() {
		return $this->title;
	}
	
	/**
	 * Setter for introduction
	 *
	 * @var string $introduction
	 * @return void
	 */
	public function setIntroduction($introduction) {
		$this->introduction = $introduction;
	}
	
	/**
	 * Getter for introduction
	 *
	 * @return string
	 */
	public function getIntroduction() {
		return $this->introduction;
	}
	
	/**
	 * Setter for text
	 *
	 * @var string $text
	 * @return void
	 */
	public function setText($text) {
		$this->text = $text;
	}
	
	/**
	 * Getter for text
	 *
	 * @return string
	 */
	public function getText() {
		return $this->text;
	}
	
	/**
	 * Setter for images
	 *
	 * @var array $images
	 * @return void
	 */
	public function setImages(array $images) {
		$this->images = implode(',', $images);
	}
	
	/**
	 * Getter for images
	 *
	 * @return array
	 */
	public function getImages() {
		return explode(',', $this->images);
	}
	
	/**
	 * Setter for captions
	 *
	 * @var array $captions
	 * @return void
	 */
	public function setCaptions(array $captions) {
		$this->captions = implode(chr(10), $captions);
	}
	
	/**
	 * Getter for captions
	 *
	 * @return array
	 */
	public function getCaptions() {
		return explode(chr(10), $this->captions);
	}
	
	/**
	 * Setter for author
	 *
	 * @var string $author
	 * @return void
	 */
	public function setAuthor($author) {
		$this->author = $author;
	}
	
	/**
	 * Getter for author
	 *
	 * @return string
	 */
	public function getAuthor() {
		return $this->author;
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