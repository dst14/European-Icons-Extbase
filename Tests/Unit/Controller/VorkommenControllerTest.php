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
 * Test case for class DanielStange\DstEi2\Controller\VorkommenController.
 *
 * @author Daniel Stange <daniel.stange@gmail.com>
 */
class VorkommenControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \DanielStange\DstEi2\Controller\VorkommenController
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = $this->getMock('DanielStange\\DstEi2\\Controller\\VorkommenController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllVorkommensFromRepositoryAndAssignsThemToView() {

		$allVorkommens = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$vorkommenRepository = $this->getMock('', array('findAll'), array(), '', FALSE);
		$vorkommenRepository->expects($this->once())->method('findAll')->will($this->returnValue($allVorkommens));
		$this->inject($this->subject, 'vorkommenRepository', $vorkommenRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('vorkommens', $allVorkommens);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenVorkommenToView() {
		$vorkommen = new \DanielStange\DstEi2\Domain\Model\Vorkommen();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('vorkommen', $vorkommen);

		$this->subject->showAction($vorkommen);
	}

	/**
	 * @test
	 */
	public function newActionAssignsTheGivenVorkommenToView() {
		$vorkommen = new \DanielStange\DstEi2\Domain\Model\Vorkommen();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('newVorkommen', $vorkommen);
		$this->inject($this->subject, 'view', $view);

		$this->subject->newAction($vorkommen);
	}

	/**
	 * @test
	 */
	public function createActionAddsTheGivenVorkommenToVorkommenRepository() {
		$vorkommen = new \DanielStange\DstEi2\Domain\Model\Vorkommen();

		$vorkommenRepository = $this->getMock('', array('add'), array(), '', FALSE);
		$vorkommenRepository->expects($this->once())->method('add')->with($vorkommen);
		$this->inject($this->subject, 'vorkommenRepository', $vorkommenRepository);

		$this->subject->createAction($vorkommen);
	}

	/**
	 * @test
	 */
	public function editActionAssignsTheGivenVorkommenToView() {
		$vorkommen = new \DanielStange\DstEi2\Domain\Model\Vorkommen();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('vorkommen', $vorkommen);

		$this->subject->editAction($vorkommen);
	}

	/**
	 * @test
	 */
	public function updateActionUpdatesTheGivenVorkommenInVorkommenRepository() {
		$vorkommen = new \DanielStange\DstEi2\Domain\Model\Vorkommen();

		$vorkommenRepository = $this->getMock('', array('update'), array(), '', FALSE);
		$vorkommenRepository->expects($this->once())->method('update')->with($vorkommen);
		$this->inject($this->subject, 'vorkommenRepository', $vorkommenRepository);

		$this->subject->updateAction($vorkommen);
	}

	/**
	 * @test
	 */
	public function deleteActionRemovesTheGivenVorkommenFromVorkommenRepository() {
		$vorkommen = new \DanielStange\DstEi2\Domain\Model\Vorkommen();

		$vorkommenRepository = $this->getMock('', array('remove'), array(), '', FALSE);
		$vorkommenRepository->expects($this->once())->method('remove')->with($vorkommen);
		$this->inject($this->subject, 'vorkommenRepository', $vorkommenRepository);

		$this->subject->deleteAction($vorkommen);
	}
}
