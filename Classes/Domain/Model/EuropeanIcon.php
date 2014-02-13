<?php
namespace DanielStange\DstEi2\Domain\Model;

/***************************************************************
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
 *
 *
 * @package dst_ei2
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class EuropeanIcon extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * Deutscher Titel
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $titeldeutsch;

	/**
	 * Dt. Titel ist Originaltitel
	 *
	 * @var boolean
	 * @validate NotEmpty
	 */
	protected $titeistoriginal = FALSE;

	/**
	 * Originaltitel
	 *
	 * @var \string
	 */
	protected $titeloriginal;

	/**
	 * Bilddatei
	 *
	 * @var \string
	 */
	protected $abbildung;

	/**
	 * Urheber
	 *
	 * @var \string
	 */
	protected $urheber;

	/**
	 * Entstehungsjahr oder -zeitraum
	 *
	 * @var \string
	 */
	protected $jahr;

	/**
	 * Ort der Entstehung
	 *
	 * @var \string
	 */
	protected $ort;

	/**
	 * Land der Entstehung
	 *
	 * @var \string
	 */
	protected $land;

	/**
	 * Link zu einem Commons-Bestand
	 *
	 * @var \string
	 */
	protected $commonslink;

	/**
	 * Arbeitstechnik
	 *
	 * @var \string
	 */
	protected $technik;

	/**
	 * Originalgröße
	 *
	 * @var \string
	 */
	protected $originalgroesse;

	/**
	 * Bezeichnung der besitzenden Institution
	 *
	 * @var \string
	 */
	protected $besitzer;

	/**
	 * Link zur besitzenden Institution
	 *
	 * @var \string
	 */
	protected $besitzerlink;

	/**
	 * Kommentar zum Werk
	 *
	 * @var \string
	 */
	protected $kommentar;

	/**
	 * Literatur zum Werk
	 *
	 * @var \string
	 */
	protected $literatur;

	/**
	 * Motivgeschichtlich verebbt von...
	 *
	 * @var \DanielStange\DstEi2\Domain\Model\EuropeanIcon
	 */
	protected $childof;

	/**
	 * Returns the titeldeutsch
	 *
	 * @return \string $titeldeutsch
	 */
	public function getTiteldeutsch() {
		return $this->titeldeutsch;
	}

	/**
	 * Sets the titeldeutsch
	 *
	 * @param \string $titeldeutsch
	 * @return void
	 */
	public function setTiteldeutsch($titeldeutsch) {
		$this->titeldeutsch = $titeldeutsch;
	}

	/**
	 * Returns the titeistoriginal
	 *
	 * @return boolean $titeistoriginal
	 */
	public function getTiteistoriginal() {
		return $this->titeistoriginal;
	}

	/**
	 * Sets the titeistoriginal
	 *
	 * @param boolean $titeistoriginal
	 * @return void
	 */
	public function setTiteistoriginal($titeistoriginal) {
		$this->titeistoriginal = $titeistoriginal;
	}

	/**
	 * Returns the boolean state of titeistoriginal
	 *
	 * @return boolean
	 */
	public function isTiteistoriginal() {
		return $this->getTiteistoriginal();
	}

	/**
	 * Returns the titeloriginal
	 *
	 * @return \string $titeloriginal
	 */
	public function getTiteloriginal() {
		return $this->titeloriginal;
	}

	/**
	 * Sets the titeloriginal
	 *
	 * @param \string $titeloriginal
	 * @return void
	 */
	public function setTiteloriginal($titeloriginal) {
		$this->titeloriginal = $titeloriginal;
	}

	/**
	 * Returns the abbildung
	 *
	 * @return \string $abbildung
	 */
	public function getAbbildung() {
		return $this->abbildung;
	}

	/**
	 * Sets the abbildung
	 *
	 * @param \string $abbildung
	 * @return void
	 */
	public function setAbbildung($abbildung) {
		$this->abbildung = $abbildung;
	}

	/**
	 * Returns the urheber
	 *
	 * @return \string $urheber
	 */
	public function getUrheber() {
		return $this->urheber;
	}

	/**
	 * Sets the urheber
	 *
	 * @param \string $urheber
	 * @return void
	 */
	public function setUrheber($urheber) {
		$this->urheber = $urheber;
	}

	/**
	 * Returns the jahr
	 *
	 * @return \string $jahr
	 */
	public function getJahr() {
		return $this->jahr;
	}

	/**
	 * Sets the jahr
	 *
	 * @param \string $jahr
	 * @return void
	 */
	public function setJahr($jahr) {
		$this->jahr = $jahr;
	}

	/**
	 * Returns the ort
	 *
	 * @return \string $ort
	 */
	public function getOrt() {
		return $this->ort;
	}

	/**
	 * Sets the ort
	 *
	 * @param \string $ort
	 * @return void
	 */
	public function setOrt($ort) {
		$this->ort = $ort;
	}

	/**
	 * Returns the land
	 *
	 * @return \string $land
	 */
	public function getLand() {
		return $this->land;
	}

	/**
	 * Sets the land
	 *
	 * @param \string $land
	 * @return void
	 */
	public function setLand($land) {
		$this->land = $land;
	}

	/**
	 * Returns the commonslink
	 *
	 * @return \string $commonslink
	 */
	public function getCommonslink() {
		return $this->commonslink;
	}

	/**
	 * Sets the commonslink
	 *
	 * @param \string $commonslink
	 * @return void
	 */
	public function setCommonslink($commonslink) {
		$this->commonslink = $commonslink;
	}

	/**
	 * Returns the technik
	 *
	 * @return \string $technik
	 */
	public function getTechnik() {
		return $this->technik;
	}

	/**
	 * Sets the technik
	 *
	 * @param \string $technik
	 * @return void
	 */
	public function setTechnik($technik) {
		$this->technik = $technik;
	}

	/**
	 * Returns the originalgroesse
	 *
	 * @return \string $originalgroesse
	 */
	public function getOriginalgroesse() {
		return $this->originalgroesse;
	}

	/**
	 * Sets the originalgroesse
	 *
	 * @param \string $originalgroesse
	 * @return void
	 */
	public function setOriginalgroesse($originalgroesse) {
		$this->originalgroesse = $originalgroesse;
	}

	/**
	 * Returns the besitzer
	 *
	 * @return \string $besitzer
	 */
	public function getBesitzer() {
		return $this->besitzer;
	}

	/**
	 * Sets the besitzer
	 *
	 * @param \string $besitzer
	 * @return void
	 */
	public function setBesitzer($besitzer) {
		$this->besitzer = $besitzer;
	}

	/**
	 * Returns the besitzerlink
	 *
	 * @return \string $besitzerlink
	 */
	public function getBesitzerlink() {
		return $this->besitzerlink;
	}

	/**
	 * Sets the besitzerlink
	 *
	 * @param \string $besitzerlink
	 * @return void
	 */
	public function setBesitzerlink($besitzerlink) {
		$this->besitzerlink = $besitzerlink;
	}

	/**
	 * Returns the kommentar
	 *
	 * @return \string $kommentar
	 */
	public function getKommentar() {
		return $this->kommentar;
	}

	/**
	 * Sets the kommentar
	 *
	 * @param \string $kommentar
	 * @return void
	 */
	public function setKommentar($kommentar) {
		$this->kommentar = $kommentar;
	}

	/**
	 * Returns the literatur
	 *
	 * @return \string $literatur
	 */
	public function getLiteratur() {
		return $this->literatur;
	}

	/**
	 * Sets the literatur
	 *
	 * @param \string $literatur
	 * @return void
	 */
	public function setLiteratur($literatur) {
		$this->literatur = $literatur;
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
?>