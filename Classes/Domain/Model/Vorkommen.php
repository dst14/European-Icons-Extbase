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
 * Vorkommen
 */
class Vorkommen extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * seite
	 *
	 * @var string
	 */
	protected $seite = '';

	/**
	 * bild
	 *
	 * @var \DanielStange\DstEi2\Domain\Model\EuropeanIcon
	 */
	protected $bild = NULL;

	/**
	 * buch
	 *
	 * @var \DanielStange\DstEi2\Domain\Model\Schulbuch
	 */
	protected $buch = NULL;

	/**
	 * groesse
	 *
	 * @var \DanielStange\DstEi2\Domain\Model\Groesseninformationen
	 */
	protected $groesse = NULL;

	/**
	 * farbigkeit
	 *
	 * @var \DanielStange\DstEi2\Domain\Model\Farbigkeitsinformationen
	 */
	protected $farbigkeit = NULL;

	/**
	 * beschnitt
	 *
	 * @var \DanielStange\DstEi2\Domain\Model\Beschnittinformation
	 */
	protected $beschnitt = NULL;

	/**
	 * Returns the seite
	 *
	 * @return string $seite
	 */
	public function getSeite() {
		return $this->seite;
	}

	/**
	 * Sets the seite
	 *
	 * @param string $seite
	 * @return void
	 */
	public function setSeite($seite) {
		$this->seite = $seite;
	}

	/**
	 * Returns the bild
	 *
	 * @return \DanielStange\DstEi2\Domain\Model\EuropeanIcon $bild
	 */
	public function getBild() {
		return $this->bild;
	}

	/**
	 * Sets the bild
	 *
	 * @param \DanielStange\DstEi2\Domain\Model\EuropeanIcon $bild
	 * @return void
	 */
	public function setBild(\DanielStange\DstEi2\Domain\Model\EuropeanIcon $bild) {
		$this->bild = $bild;
	}

	/**
	 * Returns the buch
	 *
	 * @return \DanielStange\DstEi2\Domain\Model\Schulbuch $buch
	 */
	public function getBuch() {
		return $this->buch;
	}

	/**
	 * Sets the buch
	 *
	 * @param \DanielStange\DstEi2\Domain\Model\Schulbuch $buch
	 * @return void
	 */
	public function setBuch(\DanielStange\DstEi2\Domain\Model\Schulbuch $buch) {
		$this->buch = $buch;
	}

	/**
	 * Returns the groesse
	 *
	 * @return \DanielStange\DstEi2\Domain\Model\Groesseninformationen $groesse
	 */
	public function getGroesse() {
		return $this->groesse;
	}

	/**
	 * Sets the groesse
	 *
	 * @param \DanielStange\DstEi2\Domain\Model\Groesseninformationen $groesse
	 * @return void
	 */
	public function setGroesse(\DanielStange\DstEi2\Domain\Model\Groesseninformationen $groesse) {
		$this->groesse = $groesse;
	}

	/**
	 * Returns the farbigkeit
	 *
	 * @return \DanielStange\DstEi2\Domain\Model\Farbigkeitsinformationen $farbigkeit
	 */
	public function getFarbigkeit() {
		return $this->farbigkeit;
	}

	/**
	 * Sets the farbigkeit
	 *
	 * @param \DanielStange\DstEi2\Domain\Model\Farbigkeitsinformationen $farbigkeit
	 * @return void
	 */
	public function setFarbigkeit(\DanielStange\DstEi2\Domain\Model\Farbigkeitsinformationen $farbigkeit) {
		$this->farbigkeit = $farbigkeit;
	}

	/**
	 * Returns the beschnitt
	 *
	 * @return \DanielStange\DstEi2\Domain\Model\Beschnittinformation $beschnitt
	 */
	public function getBeschnitt() {
		return $this->beschnitt;
	}

	/**
	 * Sets the beschnitt
	 *
	 * @param \DanielStange\DstEi2\Domain\Model\Beschnittinformation $beschnitt
	 * @return void
	 */
	public function setBeschnitt(\DanielStange\DstEi2\Domain\Model\Beschnittinformation $beschnitt) {
		$this->beschnitt = $beschnitt;
	}

}