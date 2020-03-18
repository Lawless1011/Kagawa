<?php

namespace bbo51dog\kagagwa\form;

use pocketmine\Player;
use pocketmine\form\Form;

class PrefectureForm implements Form{

    public function jsonSerialize(){
        $data = [
            "type" => "form",
            "title" => "§l§b香川県ゲーム抑制システム",
            "content" => "\nあなたは香川県民ですか？\n",
            "buttons" => [
                [
                    "text" => "§l§aYes / はい",
                ],
                [
                    "text" => "§l§cNo / いいえ",
                ],
            ],
        ];
        return $data;
    }

    public function handleResponse(Player $player, $data): void{
        if($data === null){
            $player->sendForm($this);
        }elseif($data === 0){
            $player->sendForm(new AgeForm());
        }
    }
}
