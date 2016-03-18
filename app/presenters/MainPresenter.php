<?php

namespace App\Presenters;

use Nette;


/**
 * Main presenter.
 */
class MainPresenter extends BasePresenter
{

	public function renderDefault()
	{
		$this->template->anyVariable = 'any value';

	}

}
