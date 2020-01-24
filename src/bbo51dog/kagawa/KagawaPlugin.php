<?php

namespace bbo51dog\kagawa;

use pocketmine\plugin\PluginBase;

class KagawaPlugin extends PluginBase{

    /** @var Manager */
    private $manager;

    public function onLoad(){
        $this->manager = new Manager($this->getDataFolder());
    }

    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents(new EventListener(), $this);
    }
}