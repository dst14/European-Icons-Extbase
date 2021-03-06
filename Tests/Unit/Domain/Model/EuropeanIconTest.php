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
 * Test case for class \DanielStange\DstEi2\Domain\Model\EuropeanIcon.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Daniel Stange <daniel.stange@gmail.com>
 */
class EuropeanIconTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \DanielStange\DstEi2\Domain\Model\EuropeanIcon
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \DanielStange\DstEi2\Domain\Model\EuropeanIcon();
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getBezeichnungReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getBezeichnung()
		);
	}

	/**
	 * @test
	 */
	public function setBezeichnungForStringSetsBezeichnung() {
		$this->subject->setBezeichnung('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'bezeichnung',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getIsnotoriginalReturnsInitialValueForBoolean() {
		$this->assertSame(
			FALSE,
			$this->subject->getIsnotoriginal()
		);
	}

	/**
	 * @test
	 */
	public function setIsnotoriginalForBooleanSetsIsnotoriginal() {
		$this->subject->setIsnotoriginal(TRUE);

		$this->assertAttributeEquals(
			TRUE,
			'isnotoriginal',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getOriginaltitelReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getOriginaltitel()
		);
	}

	/**
	 * @test
	 */
	public function setOriginaltitelForStringSetsOriginaltitel() {
		$this->subject->setOriginaltitel('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'originaltitel',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getBildReturnsInitialValueForFileReference() {
		$this->assertEquals(
			NULL,
			$this->subject->getBild()
		);
	}

	/**
	 * @test
	 */
	public function setBildForFileReferenceSetsBild() {
		$fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
		$this->subject->setBild($fileReferenceFixture);

		$this->assertAttributeEquals(
			$fileReferenceFixture,
			'bild',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getChildofReturnsInitialValueForEuropeanIcon() {
		$this->assertEquals(
			NULL,
			$this->subject->getChildof()
		);
	}

	/**
	 * @test
	 */
	public function setChildofForEuropeanIconSetsChildof() {
		$childofFixture = new \DanielStange\DstEi2\Domain\Model\EuropeanIcon();
		$this->subject->setChildof($childofFixture);

		$this->assertAttributeEquals(
			$childofFixture,
			'childof',
			$this->subject
		);
	}
}
