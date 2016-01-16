<?php

namespace App;

use Nette;
use Nette\Application\Routers\RouteList;
use Nette\Application\Routers\Route;

class RouterFactory {

    /**
     * @return Nette\Application\IRouter
     */
    public static function createRouter() {
        $flag = in_array($_SERVER['REMOTE_ADDR'], ['::1', '127.0.0.1']) ? NULL : Route::SECURED;

        $router = new RouteList;
        
        $router[] = new Route('[<locale=cz cz>/]o-aplikaci', 'About:default', $flag);
        $router[] = new Route('[<locale=en>/]about-app', 'About:default', $flag);
        
        $router[] = new Route('[<locale=cz cz>/]udalost/vytvorit', 'Event:add', $flag);
        $router[] = new Route('[<locale=en>/]event/create', 'Event:add', $flag);
        
        $router[] = new Route('[<locale=cz cz|en>/]<presenter>/<action>[/<id>]', 'Homepage:default', $flag);
        return $router;
    }

}
