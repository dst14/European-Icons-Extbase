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
 * Test case for class DanielStange\DstEi2\Controller\BeschnittinformationController.
 *
 * @author Daniel Stange <daniel.stange@gmail.com>
 */
class BeschnittinformationControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \DanielStange\DstEi2\Controller\BeschnittinformationController
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = $this->getMock('DanielStange\\DstEi2\\Controller\\BeschnittinformationController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllBeschnittinformationsFromRepositoryAndAssignsThemToView() {

		$allBeschnittinformations = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$beschnittinformationRepository = $this->getMock('', array('findAll'), array(), '', FALSE);
		$beschnittinformationRepository->expects($this->once())->method('findAll')->will($this->returnValue($allBeschnittinformations));
		$this->inject($this->subject, 'beschnittinformationRepository', $beschnittinformationRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('beschnittinformations', $allBeschnittinformations);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenBeschnittinformationToView() {
		$beschnittinformation = new \DanielStange\DstEi2\Domain\Model\Beschnittinformation();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('beschnittinformation', $beschnittinformation);

		$this->subject->showAction($beschnittinformation);
	}

	/**
	 * @test
	 */
	public function newActionAssignsTheGivenBeschnittinformationToView() {
		$beschnittinformation = new \DanielStange\DstEi2\Domain\Model\Beschnittinformation();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('newBeschnittinformation', $beschnittinformation);
		$this->inject($this->subject, 'view', $view);

		$this->subject->newAction($beschnittinformation);
	}

	/**
	 * @test
	 */
	public function createActionAddsTheGivenBeschnittinformationToBeschnittinformationRepository() {
		$beschnittinformation = new \DanielStange\DstEi2\Domain\Model\Beschnittinformation();

		$beschnittinformationRepository = $this->getMock('', array('add'), array(), '', FALSE);
		$beschnittinformationRepository->expects($this->once())->method('add')->with($beschnittinformation);
		$this->inject($this->subject, 'beschnittinformationRepository', $beschnittinformationRepository);

		$this->subject->createAction($beschnittinformation);
	}

	/**
	 * @test
	 */
	public function editActionAssignsTheGivenBeschnittinformationToView() {
		$beschnittinformation = new \DanielStange\DstEi2\Domain\Model\Beschnittinformation();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('beschnittinformation', $beschnittinformation);

		$this->subject->editAction($beschnittinformation);
	}

	/**
	 * @test
	 */
	public function updateActionUpdatesTheGivenBeschnittinformationInBeschnittinformationRepository() {
		$beschnittinformation = new \DanielStange\DstEi2\Domain\Model\Beschnittinformation();

		$beschnittinformationRepository = $this->getMock('', array('update'), array(), '', FALSE);
		$beschnittinformationRepository->expects($this->once())->method('update')->with($beschnittinformation);
		$this->inject($this->subject, 'beschnittinformationRepository', $beschnittinformationRepository);

		$this->subject->updateAction($beschnittinformation);
	}

	/**
	 * @test
	 */
	public function deleteActionRemovesTheGivenBeschnittinformationFromBeschnittinformationRepository() {
		$beschnittinformation = new \DanielStange\DstEi2\Domain\Model\Beschnittinformation();

		$beschnittinformationRepository = $this->getMock('', array('remove'), array(), '', FALSE);
		$beschnittinformationRepository->expects($this->once())->method('remove')->with($beschnittinformation);
		$this->inject($this->subject, 'beschnittinformationRepository', $beschnittinformationRepository);

		$this->subject->deleteAction($beschnittinformation);
	}
}
