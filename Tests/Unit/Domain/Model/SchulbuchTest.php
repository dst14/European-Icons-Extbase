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
 * Test case for class \DanielStange\DstEi2\Domain\Model\Schulbuch.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Daniel Stange <daniel.stange@gmail.com>
 */
class SchulbuchTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \DanielStange\DstEi2\Domain\Model\Schulbuch
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \DanielStange\DstEi2\Domain\Model\Schulbuch();
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getTitelReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getTitel()
		);
	}

	/**
	 * @test
	 */
	public function setTitelForStringSetsTitel() {
		$this->subject->setTitel('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'titel',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getAutorenReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getAutoren()
		);
	}

	/**
	 * @test
	 */
	public function setAutorenForStringSetsAutoren() {
		$this->subject->setAutoren('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'autoren',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getJahrReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getJahr()
		);
	}

	/**
	 * @test
	 */
	public function setJahrForStringSetsJahr() {
		$this->subject->setJahr('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'jahr',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getVerlagReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getVerlag()
		);
	}

	/**
	 * @test
	 */
	public function setVerlagForStringSetsVerlag() {
		$this->subject->setVerlag('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'verlag',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getAuflageReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getAuflage()
		);
	}

	/**
	 * @test
	 */
	public function setAuflageForStringSetsAuflage() {
		$this->subject->setAuflage('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'auflage',
			$this->subject
		);
	}
}
