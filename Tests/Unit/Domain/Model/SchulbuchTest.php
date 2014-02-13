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
 * Test case for class \DanielStange\DstEi2\Domain\Model\Schulbuch.
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
class SchulbuchTest extends \TYPO3\CMS\Extbase\Tests\Unit\BaseTestCase {
	/**
	 * @var \DanielStange\DstEi2\Domain\Model\Schulbuch
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new \DanielStange\DstEi2\Domain\Model\Schulbuch();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getTitelReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setTitelForStringSetsTitel() { 
		$this->fixture->setTitel('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getTitel()
		);
	}
	
	/**
	 * @test
	 */
	public function getAutorenReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setAutorenForStringSetsAutoren() { 
		$this->fixture->setAutoren('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getAutoren()
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
	public function getVerlagReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setVerlagForStringSetsVerlag() { 
		$this->fixture->setVerlag('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getVerlag()
		);
	}
	
	/**
	 * @test
	 */
	public function getVerlagsortReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setVerlagsortForStringSetsVerlagsort() { 
		$this->fixture->setVerlagsort('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getVerlagsort()
		);
	}
	
	/**
	 * @test
	 */
	public function getAuflageReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setAuflageForStringSetsAuflage() { 
		$this->fixture->setAuflage('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getAuflage()
		);
	}
	
	/**
	 * @test
	 */
	public function getErstauflageReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setErstauflageForStringSetsErstauflage() { 
		$this->fixture->setErstauflage('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getErstauflage()
		);
	}
	
	/**
	 * @test
	 */
	public function getZusatzReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setZusatzForStringSetsZusatz() { 
		$this->fixture->setZusatz('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getZusatz()
		);
	}
	
	/**
	 * @test
	 */
	public function getGeisignaturReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setGeisignaturForStringSetsGeisignatur() { 
		$this->fixture->setGeisignatur('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getGeisignatur()
		);
	}
	
	/**
	 * @test
	 */
	public function getBibliolinkReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setBibliolinkForStringSetsBibliolink() { 
		$this->fixture->setBibliolink('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getBibliolink()
		);
	}
	
	/**
	 * @test
	 */
	public function getMorelinkReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setMorelinkForStringSetsMorelink() { 
		$this->fixture->setMorelink('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getMorelink()
		);
	}
	
	/**
	 * @test
	 */
	public function getMorelinktitelReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setMorelinktitelForStringSetsMorelinktitel() { 
		$this->fixture->setMorelinktitel('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getMorelinktitel()
		);
	}
	
}
?>