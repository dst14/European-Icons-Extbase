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
 * Test case for class \DanielStange\DstEi2\Domain\Model\EuropeanIcon.
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
class EuropeanIconTest extends \TYPO3\CMS\Extbase\Tests\Unit\BaseTestCase {
	/**
	 * @var \DanielStange\DstEi2\Domain\Model\EuropeanIcon
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new \DanielStange\DstEi2\Domain\Model\EuropeanIcon();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getTiteldeutschReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setTiteldeutschForStringSetsTiteldeutsch() { 
		$this->fixture->setTiteldeutsch('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getTiteldeutsch()
		);
	}
	
	/**
	 * @test
	 */
	public function getTiteistoriginalReturnsInitialValueForOolean() { }

	/**
	 * @test
	 */
	public function setTiteistoriginalForOoleanSetsTiteistoriginal() { }
	
	/**
	 * @test
	 */
	public function getTiteloriginalReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setTiteloriginalForStringSetsTiteloriginal() { 
		$this->fixture->setTiteloriginal('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getTiteloriginal()
		);
	}
	
	/**
	 * @test
	 */
	public function getAbbildungReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setAbbildungForStringSetsAbbildung() { 
		$this->fixture->setAbbildung('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getAbbildung()
		);
	}
	
	/**
	 * @test
	 */
	public function getUrheberReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setUrheberForStringSetsUrheber() { 
		$this->fixture->setUrheber('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getUrheber()
		);
	}
	
	/**
	 * @test
	 */
	public function getJahrReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setJahrForStringSetsJahr() { 
		$this->fixture->setJahr('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getJahr()
		);
	}
	
	/**
	 * @test
	 */
	public function getOrtReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setOrtForStringSetsOrt() { 
		$this->fixture->setOrt('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getOrt()
		);
	}
	
	/**
	 * @test
	 */
	public function getLandReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setLandForStringSetsLand() { 
		$this->fixture->setLand('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getLand()
		);
	}
	
	/**
	 * @test
	 */
	public function getCommonslinkReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setCommonslinkForStringSetsCommonslink() { 
		$this->fixture->setCommonslink('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getCommonslink()
		);
	}
	
	/**
	 * @test
	 */
	public function getTechnikReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setTechnikForStringSetsTechnik() { 
		$this->fixture->setTechnik('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getTechnik()
		);
	}
	
	/**
	 * @test
	 */
	public function getOriginalgroesseReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setOriginalgroesseForStringSetsOriginalgroesse() { 
		$this->fixture->setOriginalgroesse('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getOriginalgroesse()
		);
	}
	
	/**
	 * @test
	 */
	public function getBesitzerReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setBesitzerForStringSetsBesitzer() { 
		$this->fixture->setBesitzer('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getBesitzer()
		);
	}
	
	/**
	 * @test
	 */
	public function getBesitzerlinkReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setBesitzerlinkForStringSetsBesitzerlink() { 
		$this->fixture->setBesitzerlink('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getBesitzerlink()
		);
	}
	
	/**
	 * @test
	 */
	public function getKommentarReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setKommentarForStringSetsKommentar() { 
		$this->fixture->setKommentar('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getKommentar()
		);
	}
	
	/**
	 * @test
	 */
	public function getLiteraturReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setLiteraturForStringSetsLiteratur() { 
		$this->fixture->setLiteratur('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getLiteratur()
		);
	}
	
	/**
	 * @test
	 */
	public function getChildofReturnsInitialValueForEuropeanIcon() { }

	/**
	 * @test
	 */
	public function setChildofForEuropeanIconSetsChildof() { }
	
}
?>