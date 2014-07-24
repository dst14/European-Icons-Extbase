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
 * Test case for class DanielStange\DstEi2\Controller\GroesseninformationenController.
 *
 * @author Daniel Stange <daniel.stange@gmail.com>
 */
class GroesseninformationenControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \DanielStange\DstEi2\Controller\GroesseninformationenController
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = $this->getMock('DanielStange\\DstEi2\\Controller\\GroesseninformationenController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllGroesseninformationensFromRepositoryAndAssignsThemToView() {

		$allGroesseninformationens = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$groesseninformationenRepository = $this->getMock('', array('findAll'), array(), '', FALSE);
		$groesseninformationenRepository->expects($this->once())->method('findAll')->will($this->returnValue($allGroesseninformationens));
		$this->inject($this->subject, 'groesseninformationenRepository', $groesseninformationenRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('groesseninformationens', $allGroesseninformationens);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenGroesseninformationenToView() {
		$groesseninformationen = new \DanielStange\DstEi2\Domain\Model\Groesseninformationen();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('groesseninformationen', $groesseninformationen);

		$this->subject->showAction($groesseninformationen);
	}

	/**
	 * @test
	 */
	public function newActionAssignsTheGivenGroesseninformationenToView() {
		$groesseninformationen = new \DanielStange\DstEi2\Domain\Model\Groesseninformationen();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('newGroesseninformationen', $groesseninformationen);
		$this->inject($this->subject, 'view', $view);

		$this->subject->newAction($groesseninformationen);
	}

	/**
	 * @test
	 */
	public function createActionAddsTheGivenGroesseninformationenToGroesseninformationenRepository() {
		$groesseninformationen = new \DanielStange\DstEi2\Domain\Model\Groesseninformationen();

		$groesseninformationenRepository = $this->getMock('', array('add'), array(), '', FALSE);
		$groesseninformationenRepository->expects($this->once())->method('add')->with($groesseninformationen);
		$this->inject($this->subject, 'groesseninformationenRepository', $groesseninformationenRepository);

		$this->subject->createAction($groesseninformationen);
	}

	/**
	 * @test
	 */
	public function editActionAssignsTheGivenGroesseninformationenToView() {
		$groesseninformationen = new \DanielStange\DstEi2\Domain\Model\Groesseninformationen();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('groesseninformationen', $groesseninformationen);

		$this->subject->editAction($groesseninformationen);
	}

	/**
	 * @test
	 */
	public function updateActionUpdatesTheGivenGroesseninformationenInGroesseninformationenRepository() {
		$groesseninformationen = new \DanielStange\DstEi2\Domain\Model\Groesseninformationen();

		$groesseninformationenRepository = $this->getMock('', array('update'), array(), '', FALSE);
		$groesseninformationenRepository->expects($this->once())->method('update')->with($groesseninformationen);
		$this->inject($this->subject, 'groesseninformationenRepository', $groesseninformationenRepository);

		$this->subject->updateAction($groesseninformationen);
	}

	/**
	 * @test
	 */
	public function deleteActionRemovesTheGivenGroesseninformationenFromGroesseninformationenRepository() {
		$groesseninformationen = new \DanielStange\DstEi2\Domain\Model\Groesseninformationen();

		$groesseninformationenRepository = $this->getMock('', array('remove'), array(), '', FALSE);
		$groesseninformationenRepository->expects($this->once())->method('remove')->with($groesseninformationen);
		$this->inject($this->subject, 'groesseninformationenRepository', $groesseninformationenRepository);

		$this->subject->deleteAction($groesseninformationen);
	}
}
