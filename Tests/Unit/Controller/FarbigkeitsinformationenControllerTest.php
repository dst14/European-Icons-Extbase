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
 * Test case for class DanielStange\DstEi2\Controller\FarbigkeitsinformationenController.
 *
 * @author Daniel Stange <daniel.stange@gmail.com>
 */
class FarbigkeitsinformationenControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \DanielStange\DstEi2\Controller\FarbigkeitsinformationenController
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = $this->getMock('DanielStange\\DstEi2\\Controller\\FarbigkeitsinformationenController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllFarbigkeitsinformationensFromRepositoryAndAssignsThemToView() {

		$allFarbigkeitsinformationens = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$farbigkeitsinformationenRepository = $this->getMock('', array('findAll'), array(), '', FALSE);
		$farbigkeitsinformationenRepository->expects($this->once())->method('findAll')->will($this->returnValue($allFarbigkeitsinformationens));
		$this->inject($this->subject, 'farbigkeitsinformationenRepository', $farbigkeitsinformationenRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('farbigkeitsinformationens', $allFarbigkeitsinformationens);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenFarbigkeitsinformationenToView() {
		$farbigkeitsinformationen = new \DanielStange\DstEi2\Domain\Model\Farbigkeitsinformationen();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('farbigkeitsinformationen', $farbigkeitsinformationen);

		$this->subject->showAction($farbigkeitsinformationen);
	}

	/**
	 * @test
	 */
	public function newActionAssignsTheGivenFarbigkeitsinformationenToView() {
		$farbigkeitsinformationen = new \DanielStange\DstEi2\Domain\Model\Farbigkeitsinformationen();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('newFarbigkeitsinformationen', $farbigkeitsinformationen);
		$this->inject($this->subject, 'view', $view);

		$this->subject->newAction($farbigkeitsinformationen);
	}

	/**
	 * @test
	 */
	public function createActionAddsTheGivenFarbigkeitsinformationenToFarbigkeitsinformationenRepository() {
		$farbigkeitsinformationen = new \DanielStange\DstEi2\Domain\Model\Farbigkeitsinformationen();

		$farbigkeitsinformationenRepository = $this->getMock('', array('add'), array(), '', FALSE);
		$farbigkeitsinformationenRepository->expects($this->once())->method('add')->with($farbigkeitsinformationen);
		$this->inject($this->subject, 'farbigkeitsinformationenRepository', $farbigkeitsinformationenRepository);

		$this->subject->createAction($farbigkeitsinformationen);
	}

	/**
	 * @test
	 */
	public function editActionAssignsTheGivenFarbigkeitsinformationenToView() {
		$farbigkeitsinformationen = new \DanielStange\DstEi2\Domain\Model\Farbigkeitsinformationen();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('farbigkeitsinformationen', $farbigkeitsinformationen);

		$this->subject->editAction($farbigkeitsinformationen);
	}

	/**
	 * @test
	 */
	public function updateActionUpdatesTheGivenFarbigkeitsinformationenInFarbigkeitsinformationenRepository() {
		$farbigkeitsinformationen = new \DanielStange\DstEi2\Domain\Model\Farbigkeitsinformationen();

		$farbigkeitsinformationenRepository = $this->getMock('', array('update'), array(), '', FALSE);
		$farbigkeitsinformationenRepository->expects($this->once())->method('update')->with($farbigkeitsinformationen);
		$this->inject($this->subject, 'farbigkeitsinformationenRepository', $farbigkeitsinformationenRepository);

		$this->subject->updateAction($farbigkeitsinformationen);
	}

	/**
	 * @test
	 */
	public function deleteActionRemovesTheGivenFarbigkeitsinformationenFromFarbigkeitsinformationenRepository() {
		$farbigkeitsinformationen = new \DanielStange\DstEi2\Domain\Model\Farbigkeitsinformationen();

		$farbigkeitsinformationenRepository = $this->getMock('', array('remove'), array(), '', FALSE);
		$farbigkeitsinformationenRepository->expects($this->once())->method('remove')->with($farbigkeitsinformationen);
		$this->inject($this->subject, 'farbigkeitsinformationenRepository', $farbigkeitsinformationenRepository);

		$this->subject->deleteAction($farbigkeitsinformationen);
	}
}
