<?php
namespace DanielStange\DstEi2\Domain\Model;


/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2014 Daniel Stange <daniel.stange@gmail.com>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
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
 * EuropeanIcon
 */
class EuropeanIcon extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * bezeichnung
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $bezeichnung = '';

	/**
	 * isnotoriginal
	 *
	 * @var boolean
	 * @validate NotEmpty
	 */
	protected $isnotoriginal = FALSE;

	/**
	 * originaltitel
	 *
	 * @var string
	 */
	protected $originaltitel = '';

	/**
	 * bild
	 *
	 * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
	 */
	protected $bild = NULL;

	/**
	 * childof
	 *
	 * @var \DanielStange\DstEi2\Domain\Model\EuropeanIcon
	 */
	protected $childof = NULL;

	/**
	 * Returns the bezeichnung
	 *
	 * @return string $bezeichnung
	 */
	public function getBezeichnung() {
		return $this->bezeichnung;
	}

	/**
	 * Sets the bezeichnung
	 *
	 * @param string $bezeichnung
	 * @return void
	 */
	public function setBezeichnung($bezeichnung) {
		$this->bezeichnung = $bezeichnung;
	}

	/**
	 * Returns the isnotoriginal
	 *
	 * @return boolean $isnotoriginal
	 */
	public function getIsnotoriginal() {
		return $this->isnotoriginal;
	}

	/**
	 * Sets the isnotoriginal
	 *
	 * @param boolean $isnotoriginal
	 * @return void
	 */
	public function setIsnotoriginal($isnotoriginal) {
		$this->isnotoriginal = $isnotoriginal;
	}

	/**
	 * Returns the boolean state of isnotoriginal
	 *
	 * @return boolean
	 */
	public function isIsnotoriginal() {
		return $this->isnotoriginal;
	}

	/**
	 * Returns the originaltitel
	 *
	 * @return string $originaltitel
	 */
	public function getOriginaltitel() {
		return $this->originaltitel;
	}

	/**
	 * Sets the originaltitel
	 *
	 * @param string $originaltitel
	 * @return void
	 */
	public function setOriginaltitel($originaltitel) {
		$this->originaltitel = $originaltitel;
	}

	/**
	 * Returns the bild
	 *
	 * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $bild
	 */
	public function getBild() {
		return $this->bild;
	}

	/**
	 * Sets the bild
	 *
	 * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $bild
	 * @return void
	 */
	public function setBild(\TYPO3\CMS\Extbase\Domain\Model\FileReference $bild) {
		$this->bild = $bild;
	}

	/**
	 * Returns the childof
	 *
	 * @return \DanielStange\DstEi2\Domain\Model\EuropeanIcon $childof
	 */
	public function getChildof() {
		return $this->childof;
	}

	/**
	 * Sets the childof
	 *
	 * @param \DanielStange\DstEi2\Domain\Model\EuropeanIcon $childof
	 * @return void
	 */
	public function setChildof(\DanielStange\DstEi2\Domain\Model\EuropeanIcon $childof) {
		$this->childof = $childof;
	}

}