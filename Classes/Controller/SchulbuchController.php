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
class SchulbuchController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * schulbuchRepository
	 *
	 * @var \DanielStange\DstEi2\Domain\Repository\SchulbuchRepository
	 * @inject
	 */
	protected $schulbuchRepository;

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$schulbuches = $this->schulbuchRepository->findAll();
		$this->view->assign('schulbuches', $schulbuches);
	}

	/**
	 * action show
	 *
	 * @param \DanielStange\DstEi2\Domain\Model\Schulbuch $schulbuch
	 * @return void
	 */
	public function showAction(\DanielStange\DstEi2\Domain\Model\Schulbuch $schulbuch) {
		$this->view->assign('schulbuch', $schulbuch);
	}

	/**
	 * action new
	 *
	 * @param \DanielStange\DstEi2\Domain\Model\Schulbuch $newSchulbuch
	 * @dontvalidate $newSchulbuch
	 * @return void
	 */
	public function newAction(\DanielStange\DstEi2\Domain\Model\Schulbuch $newSchulbuch = NULL) {
		$this->view->assign('newSchulbuch', $newSchulbuch);
	}

	/**
	 * action create
	 *
	 * @param \DanielStange\DstEi2\Domain\Model\Schulbuch $newSchulbuch
	 * @return void
	 */
	public function createAction(\DanielStange\DstEi2\Domain\Model\Schulbuch $newSchulbuch) {
		$this->schulbuchRepository->add($newSchulbuch);
		$this->flashMessageContainer->add('Your new Schulbuch was created.');
		$this->redirect('list');
	}

	/**
	 * action edit
	 *
	 * @param \DanielStange\DstEi2\Domain\Model\Schulbuch $schulbuch
	 * @return void
	 */
	public function editAction(\DanielStange\DstEi2\Domain\Model\Schulbuch $schulbuch) {
		$this->view->assign('schulbuch', $schulbuch);
	}

	/**
	 * action update
	 *
	 * @param \DanielStange\DstEi2\Domain\Model\Schulbuch $schulbuch
	 * @return void
	 */
	public function updateAction(\DanielStange\DstEi2\Domain\Model\Schulbuch $schulbuch) {
		$this->schulbuchRepository->update($schulbuch);
		$this->flashMessageContainer->add('Your Schulbuch was updated.');
		$this->redirect('list');
	}

	/**
	 * action delete
	 *
	 * @param \DanielStange\DstEi2\Domain\Model\Schulbuch $schulbuch
	 * @return void
	 */
	public function deleteAction(\DanielStange\DstEi2\Domain\Model\Schulbuch $schulbuch) {
		$this->schulbuchRepository->remove($schulbuch);
		$this->flashMessageContainer->add('Your Schulbuch was removed.');
		$this->redirect('list');
	}

}
?>