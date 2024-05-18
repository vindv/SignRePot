<?php

namespace sing;

use muqsit\invmenu\InvMenuHandler;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\SingletonTrait;

class Loader extends PluginBase
{

    use SingletonTrait;

    public function onLoad() : void
    {
        self::$instance = $this;
    }

    public function onEnable() : void
    {
        $this->getServer()->getPluginManager()->registerEvents(new EventListener(), $this);

        if(!InvMenuHandler::isRegistered()){
            InvMenuHandler::register($this);
        }
    }

}