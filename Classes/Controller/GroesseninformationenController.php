<?php
namespace DanielStange\DstEi2\Controller;


/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2014 Daniel Stange <daniel.stange@gmail.com>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
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
 * GroesseninformationenController
 */
class GroesseninformationenController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$groesseninformationens = $this->groesseninformationenRepository->findAll();
		$this->view->assign('groesseninformationens', $groesseninformationens);
	}

	/**
	 * action show
	 *
	 * @param \DanielStange\DstEi2\Domain\Model\Groesseninformationen $groesseninformationen
	 * @return void
	 */
	public function showAction(\DanielStange\DstEi2\Domain\Model\Groesseninformationen $groesseninformationen) {
		$this->view->assign('groesseninformationen', $groesseninformationen);
	}

	/**
	 * action new
	 *
	 * @param \DanielStange\DstEi2\Domain\Model\Groesseninformationen $newGroesseninformationen
	 * @ignorevalidation $newGroesseninformationen
	 * @return void
	 */
	public function newAction(\DanielStange\DstEi2\Domain\Model\Groesseninformationen $newGroesseninformationen = NULL) {
		$this->view->assign('newGroesseninformationen', $newGroesseninformationen);
	}

	/**
	 * action create
	 *
	 * @param \DanielStange\DstEi2\Domain\Model\Groesseninformationen $newGroesseninformationen
	 * @return void
	 */
	public function createAction(\DanielStange\DstEi2\Domain\Model\Groesseninformationen $newGroesseninformationen) {
		$this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->groesseninformationenRepository->add($newGroesseninformationen);
		$this->redirect('list');
	}

	/**
	 * action edit
	 *
	 * @param \DanielStange\DstEi2\Domain\Model\Groesseninformationen $groesseninformationen
	 * @ignorevalidation $groesseninformationen
	 * @return void
	 */
	public function editAction(\DanielStange\DstEi2\Domain\Model\Groesseninformationen $groesseninformationen) {
		$this->view->assign('groesseninformationen', $groesseninformationen);
	}

	/**
	 * action update
	 *
	 * @param \DanielStange\DstEi2\Domain\Model\Groesseninformationen $groesseninformationen
	 * @return void
	 */
	public function updateAction(\DanielStange\DstEi2\Domain\Model\Groesseninformationen $groesseninformationen) {
		$this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->groesseninformationenRepository->update($groesseninformationen);
		$this->redirect('list');
	}

	/**
	 * action delete
	 *
	 * @param \DanielStange\DstEi2\Domain\Model\Groesseninformationen $groesseninformationen
	 * @return void
	 */
	public function deleteAction(\DanielStange\DstEi2\Domain\Model\Groesseninformationen $groesseninformationen) {
		$this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->groesseninformationenRepository->remove($groesseninformationen);
		$this->redirect('list');
	}

}