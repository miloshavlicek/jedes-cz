<?php

namespace App\Presenters;

class HomepagePresenter extends BasePresenter {

    public function renderDefault() {
        $this->template->recommendedEvents = $this->getRecommendedEvents();
    }

}
