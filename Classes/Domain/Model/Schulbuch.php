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
	 * titel
	 *
	 * @var \string
	 */
	protected $titel;

	/**
	 * autoren
	 *
	 * @var \string
	 */
	protected $autoren;

	/**
	 * jahr
	 *
	 * @var \string
	 */
	protected $jahr;

	/**
	 * verlag
	 *
	 * @var \string
	 */
	protected $verlag;

	/**
	 * auflage
	 *
	 * @var \string
	 */
	protected $auflage;

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

}
?>