<?php

namespace DanielStange\DstEi2\Tests\Unit\Domain\Model;

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
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Daniel Stange <daniel.stange@gmail.com>
 */
class VorkommenTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \DanielStange\DstEi2\Domain\Model\Vorkommen
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \DanielStange\DstEi2\Domain\Model\Vorkommen();
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getSeiteReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getSeite()
		);
	}

	/**
	 * @test
	 */
	public function setSeiteForStringSetsSeite() {
		$this->subject->setSeite('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'seite',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getBildReturnsInitialValueForEuropeanIcon() {
		$this->assertEquals(
			NULL,
			$this->subject->getBild()
		);
	}

	/**
	 * @test
	 */
	public function setBildForEuropeanIconSetsBild() {
		$bildFixture = new \DanielStange\DstEi2\Domain\Model\EuropeanIcon();
		$this->subject->setBild($bildFixture);

		$this->assertAttributeEquals(
			$bildFixture,
			'bild',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getBuchReturnsInitialValueForSchulbuch() {
		$this->assertEquals(
			NULL,
			$this->subject->getBuch()
		);
	}

	/**
	 * @test
	 */
	public function setBuchForSchulbuchSetsBuch() {
		$buchFixture = new \DanielStange\DstEi2\Domain\Model\Schulbuch();
		$this->subject->setBuch($buchFixture);

		$this->assertAttributeEquals(
			$buchFixture,
			'buch',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getGroesseReturnsInitialValueForGroesseninformationen() {
		$this->assertEquals(
			NULL,
			$this->subject->getGroesse()
		);
	}

	/**
	 * @test
	 */
	public function setGroesseForGroesseninformationenSetsGroesse() {
		$groesseFixture = new \DanielStange\DstEi2\Domain\Model\Groesseninformationen();
		$this->subject->setGroesse($groesseFixture);

		$this->assertAttributeEquals(
			$groesseFixture,
			'groesse',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getFarbigkeitReturnsInitialValueForFarbigkeitsinformationen() {
		$this->assertEquals(
			NULL,
			$this->subject->getFarbigkeit()
		);
	}

	/**
	 * @test
	 */
	public function setFarbigkeitForFarbigkeitsinformationenSetsFarbigkeit() {
		$farbigkeitFixture = new \DanielStange\DstEi2\Domain\Model\Farbigkeitsinformationen();
		$this->subject->setFarbigkeit($farbigkeitFixture);

		$this->assertAttributeEquals(
			$farbigkeitFixture,
			'farbigkeit',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getBeschnittReturnsInitialValueForBeschnittinformation() {
		$this->assertEquals(
			NULL,
			$this->subject->getBeschnitt()
		);
	}

	/**
	 * @test
	 */
	public function setBeschnittForBeschnittinformationSetsBeschnitt() {
		$beschnittFixture = new \DanielStange\DstEi2\Domain\Model\Beschnittinformation();
		$this->subject->setBeschnitt($beschnittFixture);

		$this->assertAttributeEquals(
			$beschnittFixture,
			'beschnitt',
			$this->subject
		);
	}
}
