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
			bdump($form->values);
		};

		return $form;
	}

}
