<?php

namespace App\Presenters;

use Nette\Application\UI\Form;

class ContactPresenter extends BasePresenter
{

	protected function createComponentForm()
	{
		$form = new Form();

		$form->addText('name', 'Jmeno');

		$form->addSubmit('send', 'Odeslat');

		$form->onSuccess[] = function (Form $form) {
			if ($form->values->name === 'tlapnet') {
				$this->flashMessage('Systems OK', 'success');
				$this->redirect('Homepage:');
			}

			dump($form->values);
		};

		return $form;
	}

}
