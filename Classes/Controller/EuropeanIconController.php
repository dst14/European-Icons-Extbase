<?php
namespace DanielStange\DstEi2\Controller;

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
 *
 *
 * @package dst_ei2
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class EuropeanIconController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * europeanIconRepository
	 *
	 * @var \DanielStange\DstEi2\Domain\Repository\EuropeanIconRepository
	 * @inject
	 */
	protected $europeanIconRepository;

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$europeanIcons = $this->europeanIconRepository->findAll();
		$this->view->assign('europeanIcons', $europeanIcons);
	}

	/**
	 * action show
	 *
	 * @param \DanielStange\DstEi2\Domain\Model\EuropeanIcon $europeanIcon
	 * @return void
	 */
	public function showAction(\DanielStange\DstEi2\Domain\Model\EuropeanIcon $europeanIcon) {
		$this->view->assign('europeanIcon', $europeanIcon);
	}

	/**
	 * action new
	 *
	 * @param \DanielStange\DstEi2\Domain\Model\EuropeanIcon $newEuropeanIcon
	 * @dontvalidate $newEuropeanIcon
	 * @return void
	 */
	public function newAction(\DanielStange\DstEi2\Domain\Model\EuropeanIcon $newEuropeanIcon = NULL) {
		if ($newEuropeanIcon == NULL) { // workaround for fluid bug ##5636
			$newEuropeanIcon = t3lib_div::makeInstance('');
		}
		$this->view->assign('newEuropeanIcon', $newEuropeanIcon);
	}

	/**
	 * action create
	 *
	 * @param \DanielStange\DstEi2\Domain\Model\EuropeanIcon $newEuropeanIcon
	 * @return void
	 */
	public function createAction(\DanielStange\DstEi2\Domain\Model\EuropeanIcon $newEuropeanIcon) {
		$this->europeanIconRepository->add($newEuropeanIcon);
		$this->flashMessageContainer->add('Your new EuropeanIcon was created.');
		$this->redirect('list');
	}

	/**
	 * action edit
	 *
	 * @param \DanielStange\DstEi2\Domain\Model\EuropeanIcon $europeanIcon
	 * @return void
	 */
	public function editAction(\DanielStange\DstEi2\Domain\Model\EuropeanIcon $europeanIcon) {
		$this->view->assign('europeanIcon', $europeanIcon);
	}

	/**
	 * action update
	 *
	 * @param \DanielStange\DstEi2\Domain\Model\EuropeanIcon $europeanIcon
	 * @return void
	 */
	public function updateAction(\DanielStange\DstEi2\Domain\Model\EuropeanIcon $europeanIcon) {
		$this->europeanIconRepository->update($europeanIcon);
		$this->flashMessageContainer->add('Your EuropeanIcon was updated.');
		$this->redirect('list');
	}

	/**
	 * action delete
	 *
	 * @param \DanielStange\DstEi2\Domain\Model\EuropeanIcon $europeanIcon
	 * @return void
	 */
	public function deleteAction(\DanielStange\DstEi2\Domain\Model\EuropeanIcon $europeanIcon) {
		$this->europeanIconRepository->remove($europeanIcon);
		$this->flashMessageContainer->add('Your EuropeanIcon was removed.');
		$this->redirect('list');
	}

}
?>