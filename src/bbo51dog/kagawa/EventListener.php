<?php

namespace bbo51dog\kagagwa;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use bbo51dog\kagagwa\form\PrefectureForm;

class EventListener implements Listener{

    public function onJoin(PlayerJoinEvent $event){
        $event->getPlayer()->sendForm(new PrefectureForm());
    }
}