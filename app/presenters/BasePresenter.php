<?php

namespace App\Presenters;

use App\Model\Event;
use Nette;

abstract class BasePresenter extends Nette\Application\UI\Presenter {

    /** @var \Kdyby\Doctrine\EntityManager @inject */
    public $em;
    
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

    protected function createComponentEuCookies($name) {
        $control = new \Cothema\EuCookies\Bar;
        $control->redrawControl();
        return $control;
    }
    
    protected function getRecommendedEvents($limit = 10) {
        return $this->em->getRepository(Event::class)->findBy(['visible' => TRUE], ['start' => 'ASC'], $limit);
    }

}
