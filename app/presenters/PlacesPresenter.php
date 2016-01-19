<?php

namespace App\Presenters;

use App\Model\Place\City;

class PlacesPresenter extends BasePresenter {

    public function renderDefault() {
        
    }

    public function renderCities() {
        $this->template->cities = $this->getCitiesList();
    }

    private function getCitiesList() {
        return $this->em->getRepository(City::class)->findBy([],['name' => 'ASC']);
    }

}
