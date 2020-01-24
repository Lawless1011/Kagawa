<?php

namespace bbo51dog\kagagwa\form;

use pocketmine\Player;
use pocketmine\form\Form;

class PrefectureForm implements Form{

    public function jsonSerialize(){
        $data = [
            "type" => "form",
            "title" => "§l§bKAGAGWA",
            "content" => "\nあなたは何歳ですか？\n",
            "buttons" => [
                [
                    "text" => "§lUnder 18 / 18歳以下",
                ],
                [
                    "text" => "§lOver 19 / 19歳以上",
                ],
            ],
        ];
        return $data;
    }

    public function handleResponse(Player $player, $data): void{
        if($data === null){
            $player->sendForm($this);
        }elseif($data === 0){
            
        }
    }
}