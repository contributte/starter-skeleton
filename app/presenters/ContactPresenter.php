<?php declare(strict_types = 1);

namespace App\Presenters;

use Nette\Application\UI\Form;

class ContactPresenter extends BasePresenter
{

	protected function createComponentForm(): Form
	{
		$form = new Form();

		$form->addText('name', 'Jmeno');

		$form->addSubmit('send', 'Odeslat');

		$form->onSuccess[] = function (Form $form): void {
			if ($form->values->name === 'tlapnet') {
				$this->flashMessage('Systems OK', 'success');
				$this->redirect('Homepage:');
			}

			dump($form->values);
		};

		return $form;
	}

}
