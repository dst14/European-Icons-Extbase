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
class Schulbuch extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * Titel des Werks
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $titel;

	/**
	 * Autoren/herausgeber des Werks
	 *
	 * @var \string
	 */
	protected $autoren;

	/**
	 * Erscheinungsjahr der eingesehenen Auflage
	 *
	 * @var \string
	 */
	protected $jahr;

	/**
	 * Bezeichnung des Verlags
	 *
	 * @var \string
	 */
	protected $verlag;

	/**
	 * Verlagsort
	 *
	 * @var \string
	 */
	protected $verlagsort;

	/**
	 * Nr. der Auflage
	 *
	 * @var \string
	 */
	protected $auflage;

	/**
	 * Jahr der ersten Auflage
	 *
	 * @var \string
	 */
	protected $erstauflage;

	/**
	 * zusätzliche Angaben und Kommentare zum Werk
	 *
	 * @var \string
	 */
	protected $zusatz;

	/**
	 * Signatur des Werkes
	 *
	 * @var \string
	 */
	protected $geisignatur;

	/**
	 * Link zum Bibliothekskatalog
	 *
	 * @var \string
	 */
	protected $bibliolink;

	/**
	 * weiterer Link (z.B. Eurviews)
	 *
	 * @var \string
	 */
	protected $morelink;

	/**
	 * Titel des weiteren Links
	 *
	 * @var \string
	 */
	protected $morelinktitel;

	/**
	 * Returns the titel
	 *
	 * @return \string $titel
	 */
	public function getTitel() {
		return $this->titel;
	}

	/**
	 * Sets the titel
	 *
	 * @param \string $titel
	 * @return void
	 */
	public function setTitel($titel) {
		$this->titel = $titel;
	}

	/**
	 * Returns the autoren
	 *
	 * @return \string $autoren
	 */
	public function getAutoren() {
		return $this->autoren;
	}

	/**
	 * Sets the autoren
	 *
	 * @param \string $autoren
	 * @return void
	 */
	public function setAutoren($autoren) {
		$this->autoren = $autoren;
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
	 * Returns the verlag
	 *
	 * @return \string $verlag
	 */
	public function getVerlag() {
		return $this->verlag;
	}

	/**
	 * Sets the verlag
	 *
	 * @param \string $verlag
	 * @return void
	 */
	public function setVerlag($verlag) {
		$this->verlag = $verlag;
	}

	/**
	 * Returns the verlagsort
	 *
	 * @return \string $verlagsort
	 */
	public function getVerlagsort() {
		return $this->verlagsort;
	}

	/**
	 * Sets the verlagsort
	 *
	 * @param \string $verlagsort
	 * @return void
	 */
	public function setVerlagsort($verlagsort) {
		$this->verlagsort = $verlagsort;
	}

	/**
	 * Returns the auflage
	 *
	 * @return \string $auflage
	 */
	public function getAuflage() {
		return $this->auflage;
	}

	/**
	 * Sets the auflage
	 *
	 * @param \string $auflage
	 * @return void
	 */
	public function setAuflage($auflage) {
		$this->auflage = $auflage;
	}

	/**
	 * Returns the erstauflage
	 *
	 * @return \string $erstauflage
	 */
	public function getErstauflage() {
		return $this->erstauflage;
	}

	/**
	 * Sets the erstauflage
	 *
	 * @param \string $erstauflage
	 * @return void
	 */
	public function setErstauflage($erstauflage) {
		$this->erstauflage = $erstauflage;
	}

	/**
	 * Returns the zusatz
	 *
	 * @return \string $zusatz
	 */
	public function getZusatz() {
		return $this->zusatz;
	}

	/**
	 * Sets the zusatz
	 *
	 * @param \string $zusatz
	 * @return void
	 */
	public function setZusatz($zusatz) {
		$this->zusatz = $zusatz;
	}

	/**
	 * Returns the geisignatur
	 *
	 * @return \string $geisignatur
	 */
	public function getGeisignatur() {
		return $this->geisignatur;
	}

	/**
	 * Sets the geisignatur
	 *
	 * @param \string $geisignatur
	 * @return void
	 */
	public function setGeisignatur($geisignatur) {
		$this->geisignatur = $geisignatur;
	}

	/**
	 * Returns the bibliolink
	 *
	 * @return \string $bibliolink
	 */
	public function getBibliolink() {
		return $this->bibliolink;
	}

	/**
	 * Sets the bibliolink
	 *
	 * @param \string $bibliolink
	 * @return void
	 */
	public function setBibliolink($bibliolink) {
		$this->bibliolink = $bibliolink;
	}

	/**
	 * Returns the morelink
	 *
	 * @return \string $morelink
	 */
	public function getMorelink() {
		return $this->morelink;
	}

	/**
	 * Sets the morelink
	 *
	 * @param \string $morelink
	 * @return void
	 */
	public function setMorelink($morelink) {
		$this->morelink = $morelink;
	}

	/**
	 * Returns the morelinktitel
	 *
	 * @return \string $morelinktitel
	 */
	public function getMorelinktitel() {
		return $this->morelinktitel;
	}

	/**
	 * Sets the morelinktitel
	 *
	 * @param \string $morelinktitel
	 * @return void
	 */
	public function setMorelinktitel($morelinktitel) {
		$this->morelinktitel = $morelinktitel;
	}

}
?>