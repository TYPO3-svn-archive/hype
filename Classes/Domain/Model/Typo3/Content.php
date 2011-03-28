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
 * Content
 *
 * @package Hype
 * @subpackage Domain/Model
 * @version $Id:$
 * @copyright Copyright belongs to the respective authors
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License, version 2
 * @scope prototype
 * @entity
 */
class Tx_Hype_Domain_Model_Typo3_Content extends Tx_Extbase_DomainObject_AbstractEntity {
	
	/**
	 * @var integer
	 */
	protected $pid;
	
	/**
	 * @var DateTime
	 */
	protected $modificationDate;
	
	/**
	 * @var DateTime
	 */
	protected $creationDate;
	
	/**
	 * @var Tx_Hype_Domain_Model_Typo3_BackendUser
	 */
	//protected $creationUser;
	
	/**
	 * @var integer
	 */
	protected $hidden;
	
	/**
	 * @var integer
	 */
	protected $sorting;
	
	/**
	 * @var string
	 */
	protected $type;
	
	/**
	 * @var string
	 */
	protected $header;
	
	/**
	 * @var integer
	 */
	protected $headerPosition;
	
	/**
	 * @var string
	 */
	protected $text;
	
	/**
	 * @var string
	 */
	protected $images;
	
	/**
	 * @var integer
	 */
	protected $imageWidth;
	
	/**
	 * @var integer
	 */
	protected $imageOrientation;
	
	/**
	 * @var string
	 */
	protected $imageCaption;
	
	/**
	 * @var integer
	 */
	protected $imageColumns;
	
	/**
	 * @var integer
	 */
	protected $imageBorder;
	
	/**
	 * @var string
	 */
	protected $media;
	
	/**
	 * @var integer
	 */
	protected $layout;
	
	/**
	 * @var integer
	 */
	protected $deleted;
	
	/**
	 * @var integer
	 */
	protected $columns;
	
	/**
	 * @var string
	 */
	protected $pages;
	
	/**
	 * @var DateTime
	 */
	protected $startTime;
	
	/**
	 * @var DateTime
	 */
	protected $endTime;
	
	/**
	 * @var integer
	 */
	protected $columnPosition;
	
	/**
	 * @var string
	 */
	protected $subheader;
	
	/**
	 * @var integer
	 */
	protected $spaceBefore;
	
	/**
	 * @var integer
	 */
	protected $spaceAfter;
	
	/**
	 * @var Tx_Hype_Domain_Model_Typo3_FrontendUsergroup
	 */
	protected $frontendUsergroup;
	
	/**
	 * @var string
	 */
	protected $headerLink;
	
	/**
	 * @var string
	 */
	protected $imageCaptionPosition;
	
	/**
	 * @var string
	 */
	protected $imageLink;
	
	/**
	 * @var bool
	 */
	protected $imageZoom;
	
	/**
	 * @var bool
	 */
	protected $imageNoRows;
	
	/**
	 * @var string
	 */
	protected $imageEffects;
	
	/**
	 * @var string
	 */
	protected $imageCompression;
	
	/**
	 * @var string
	 */
	protected $imageAlternativeText;
	
	/**
	 * @var string
	 */
	protected $imageTitleText;
	
	/**
	 * @var string
	 */
	protected $imageLongDescriptionUrl;
	
	/**
	 * @var integer
	 */
	protected $headerLayout;
	
	/**
	 * @var string
	 */
	protected $textAlign;
	
	/**
	 * @var string
	 */
	protected $textFace;
	
	/**
	 * @var string
	 */
	protected $textSize;
	
	/**
	 * @var string
	 */
	protected $textColor;
	
	/**
	 * @var string
	 */
	protected $textProperties;
	
	/**
	 * @var string
	 */
	protected $menuType;
	
	/**
	 * @var string
	 */
	protected $tableBorder;
	
	/**
	 * @var integer
	 */
	protected $tableCellSpacing;
	
	/**
	 * @var integer
	 */
	protected $tableCellPadding;
	
	/**
	 * @var string
	 */
	protected $tableBackgroundColor;
	
	/**
	 * @var string
	 */
	protected $selectKey;
	
	/**
	 * @var bool
	 */
	protected $sectionIndex;
	
	/**
	 * @var bool
	 */
	protected $linkToTop;
	
	/**
	 * @var string
	 */
	protected $filelinkSize;
	
	/**
	 * @var string
	 */
	protected $sectionFrame;
	
	/**
	 * @var DateTime
	 */
	protected $publicationDate;
	
	/**
	 * @var string
	 */
	protected $splashLayout;
	
	/**
	 * @var string
	 */
	protected $multimedia;
	
	/**
	 * @var string
	 */
	protected $imageFrames;
	
	/**
	 * @var bool
	 */
	protected $recursive;
	
	/**
	 * @var integer 
	 */
	protected $imageHeight;
	
	/**
	 * @var integer
	 */
	protected $rteEnabled;
	
	/**
	 * @var integer
	 */
	protected $language;
	
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
	 * @param string $type
	 * @return void
	 */
	public function setType($type) {
		$this->type = $type;
	}
	
	/**
	 * @return string
	 */
	public function getType() {
		return $this->type;
	}
	
	/**
	 * @param string $header
	 */
	public function setHeader($header) {
		$this->header = $header;
	}
	
	/**
	 * @return string
	 */
	public function getHeader() {
		return $this->header;
	}
	
	/**
	 * @param string $subHeader
	 */
	public function setSubHeader($subHeader) {
		$this->subHeader = $subHeader;
	}
	
	/**
	 * @return string
	 */
	public function getSubHeader() {
		return $this->subHeader;
	}
	
	/**
	 * @param string $text
	 */
	public function setText($text) {
		$this->text = $text;
	}
	
	/**
	 * @return string
	 */
	public function getText() {
		return $this->text;
	}
	
	/**
	 * @return array $images
	 */
	public function setImages(array $images) {
		$this->images = implode(',', $images);
	}
	
	/**
	 * @return array
	 */
	public function getImages() {
		return !empty($this->images) ? explode(',', $this->images) : NULL;
	}
	
	
	
	/* Magic methods */
	
	/**
	 * @return string
	 */
	public function __toString() {
		return (string)$this->getUid();
	}
}
?>