<?php

namespace DanielStange\DstEi2\Tests;
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
 * Test case for class \DanielStange\DstEi2\Domain\Model\Vorkommen.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage European Icons
 *
 * @author Daniel Stange <daniel.stange@gmail.com>
 */
class VorkommenTest extends \TYPO3\CMS\Extbase\Tests\Unit\BaseTestCase {
	/**
	 * @var \DanielStange\DstEi2\Domain\Model\Vorkommen
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new \DanielStange\DstEi2\Domain\Model\Vorkommen();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getSeiteReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setSeiteForStringSetsSeite() { 
		$this->fixture->setSeite('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getSeite()
		);
	}
	
	/**
	 * @test
	 */
	public function getBildReturnsInitialValueForSchulbuch() { }

	/**
	 * @test
	 */
	public function setBildForSchulbuchSetsBild() { }
	
	/**
	 * @test
	 */
	public function getBuchReturnsInitialValueForEuropeanIcon() { }

	/**
	 * @test
	 */
	public function setBuchForEuropeanIconSetsBuch() { }
	
	/**
	 * @test
	 */
	public function getGroesseReturnsInitialValueForGroesseninformationen() { }

	/**
	 * @test
	 */
	public function setGroesseForGroesseninformationenSetsGroesse() { }
	
	/**
	 * @test
	 */
	public function getFarbigkeitReturnsInitialValueForFarbigkeitsinformationen() { }

	/**
	 * @test
	 */
	public function setFarbigkeitForFarbigkeitsinformationenSetsFarbigkeit() { }
	
	/**
	 * @test
	 */
	public function getBeschnittReturnsInitialValueForBeschnittinformation() { }

	/**
	 * @test
	 */
	public function setBeschnittForBeschnittinformationSetsBeschnitt() { }
	
}
?>