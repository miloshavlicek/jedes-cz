<?php

namespace App\Presenters;

use Nette;

abstract class BasePresenter extends Nette\Application\UI\Presenter {

    private $gtmId = 'GTM-N2QPZ6';

    public function beforeRender() {
        parent::beforeRender();
        $this->template->gtmId = $this->gtmId;
    }

}
