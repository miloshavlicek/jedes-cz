<?php

namespace App\Presenters;

use Nette;

abstract class BasePresenter extends Nette\Application\UI\Presenter {

    /** @persistent */
    public $locale;

    /** @var \Kdyby\Translation\Translator @inject */
    public $translator;

    /** @var string */
    private $gtmId = 'GTM-N2QPZ6';

    public function beforeRender() {
        parent::beforeRender();
        $this->template->gtmId = $this->gtmId;
    }

}
