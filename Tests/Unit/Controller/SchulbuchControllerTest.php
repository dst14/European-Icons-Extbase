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
 * Test case for class DanielStange\DstEi2\Controller\SchulbuchController.
 *
 * @author Daniel Stange <daniel.stange@gmail.com>
 */
class SchulbuchControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \DanielStange\DstEi2\Controller\SchulbuchController
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = $this->getMock('DanielStange\\DstEi2\\Controller\\SchulbuchController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllSchulbuchesFromRepositoryAndAssignsThemToView() {

		$allSchulbuches = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$schulbuchRepository = $this->getMock('DanielStange\\DstEi2\\Domain\\Repository\\SchulbuchRepository', array('findAll'), array(), '', FALSE);
		$schulbuchRepository->expects($this->once())->method('findAll')->will($this->returnValue($allSchulbuches));
		$this->inject($this->subject, 'schulbuchRepository', $schulbuchRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('schulbuches', $allSchulbuches);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenSchulbuchToView() {
		$schulbuch = new \DanielStange\DstEi2\Domain\Model\Schulbuch();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('schulbuch', $schulbuch);

		$this->subject->showAction($schulbuch);
	}

	/**
	 * @test
	 */
	public function newActionAssignsTheGivenSchulbuchToView() {
		$schulbuch = new \DanielStange\DstEi2\Domain\Model\Schulbuch();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('newSchulbuch', $schulbuch);
		$this->inject($this->subject, 'view', $view);

		$this->subject->newAction($schulbuch);
	}

	/**
	 * @test
	 */
	public function createActionAddsTheGivenSchulbuchToSchulbuchRepository() {
		$schulbuch = new \DanielStange\DstEi2\Domain\Model\Schulbuch();

		$schulbuchRepository = $this->getMock('DanielStange\\DstEi2\\Domain\\Repository\\SchulbuchRepository', array('add'), array(), '', FALSE);
		$schulbuchRepository->expects($this->once())->method('add')->with($schulbuch);
		$this->inject($this->subject, 'schulbuchRepository', $schulbuchRepository);

		$this->subject->createAction($schulbuch);
	}

	/**
	 * @test
	 */
	public function editActionAssignsTheGivenSchulbuchToView() {
		$schulbuch = new \DanielStange\DstEi2\Domain\Model\Schulbuch();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('schulbuch', $schulbuch);

		$this->subject->editAction($schulbuch);
	}

	/**
	 * @test
	 */
	public function updateActionUpdatesTheGivenSchulbuchInSchulbuchRepository() {
		$schulbuch = new \DanielStange\DstEi2\Domain\Model\Schulbuch();

		$schulbuchRepository = $this->getMock('DanielStange\\DstEi2\\Domain\\Repository\\SchulbuchRepository', array('update'), array(), '', FALSE);
		$schulbuchRepository->expects($this->once())->method('update')->with($schulbuch);
		$this->inject($this->subject, 'schulbuchRepository', $schulbuchRepository);

		$this->subject->updateAction($schulbuch);
	}

	/**
	 * @test
	 */
	public function deleteActionRemovesTheGivenSchulbuchFromSchulbuchRepository() {
		$schulbuch = new \DanielStange\DstEi2\Domain\Model\Schulbuch();

		$schulbuchRepository = $this->getMock('DanielStange\\DstEi2\\Domain\\Repository\\SchulbuchRepository', array('remove'), array(), '', FALSE);
		$schulbuchRepository->expects($this->once())->method('remove')->with($schulbuch);
		$this->inject($this->subject, 'schulbuchRepository', $schulbuchRepository);

		$this->subject->deleteAction($schulbuch);
	}
}
