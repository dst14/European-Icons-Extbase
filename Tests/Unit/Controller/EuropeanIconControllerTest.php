<?php
namespace DanielStange\DstEi2\Tests\Unit\Controller;
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
 * Test case for class DanielStange\DstEi2\Controller\EuropeanIconController.
 *
 * @author Daniel Stange <daniel.stange@gmail.com>
 */
class EuropeanIconControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \DanielStange\DstEi2\Controller\EuropeanIconController
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = $this->getMock('DanielStange\\DstEi2\\Controller\\EuropeanIconController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllEuropeanIconsFromRepositoryAndAssignsThemToView() {

		$allEuropeanIcons = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$europeanIconRepository = $this->getMock('DanielStange\\DstEi2\\Domain\\Repository\\EuropeanIconRepository', array('findAll'), array(), '', FALSE);
		$europeanIconRepository->expects($this->once())->method('findAll')->will($this->returnValue($allEuropeanIcons));
		$this->inject($this->subject, 'europeanIconRepository', $europeanIconRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('europeanIcons', $allEuropeanIcons);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenEuropeanIconToView() {
		$europeanIcon = new \DanielStange\DstEi2\Domain\Model\EuropeanIcon();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('europeanIcon', $europeanIcon);

		$this->subject->showAction($europeanIcon);
	}

	/**
	 * @test
	 */
	public function newActionAssignsTheGivenEuropeanIconToView() {
		$europeanIcon = new \DanielStange\DstEi2\Domain\Model\EuropeanIcon();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('newEuropeanIcon', $europeanIcon);
		$this->inject($this->subject, 'view', $view);

		$this->subject->newAction($europeanIcon);
	}

	/**
	 * @test
	 */
	public function createActionAddsTheGivenEuropeanIconToEuropeanIconRepository() {
		$europeanIcon = new \DanielStange\DstEi2\Domain\Model\EuropeanIcon();

		$europeanIconRepository = $this->getMock('DanielStange\\DstEi2\\Domain\\Repository\\EuropeanIconRepository', array('add'), array(), '', FALSE);
		$europeanIconRepository->expects($this->once())->method('add')->with($europeanIcon);
		$this->inject($this->subject, 'europeanIconRepository', $europeanIconRepository);

		$this->subject->createAction($europeanIcon);
	}

	/**
	 * @test
	 */
	public function editActionAssignsTheGivenEuropeanIconToView() {
		$europeanIcon = new \DanielStange\DstEi2\Domain\Model\EuropeanIcon();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('europeanIcon', $europeanIcon);

		$this->subject->editAction($europeanIcon);
	}

	/**
	 * @test
	 */
	public function updateActionUpdatesTheGivenEuropeanIconInEuropeanIconRepository() {
		$europeanIcon = new \DanielStange\DstEi2\Domain\Model\EuropeanIcon();

		$europeanIconRepository = $this->getMock('DanielStange\\DstEi2\\Domain\\Repository\\EuropeanIconRepository', array('update'), array(), '', FALSE);
		$europeanIconRepository->expects($this->once())->method('update')->with($europeanIcon);
		$this->inject($this->subject, 'europeanIconRepository', $europeanIconRepository);

		$this->subject->updateAction($europeanIcon);
	}

	/**
	 * @test
	 */
	public function deleteActionRemovesTheGivenEuropeanIconFromEuropeanIconRepository() {
		$europeanIcon = new \DanielStange\DstEi2\Domain\Model\EuropeanIcon();

		$europeanIconRepository = $this->getMock('DanielStange\\DstEi2\\Domain\\Repository\\EuropeanIconRepository', array('remove'), array(), '', FALSE);
		$europeanIconRepository->expects($this->once())->method('remove')->with($europeanIcon);
		$this->inject($this->subject, 'europeanIconRepository', $europeanIconRepository);

		$this->subject->deleteAction($europeanIcon);
	}
}
