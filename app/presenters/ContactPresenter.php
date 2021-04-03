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
			if ($form->values->name === 'nette') {
				$this->flashMessage('Systems OK', 'success');
				$this->redirect('Home:');
			}

			dump($form->values);
		};

		return $form;
	}

}
