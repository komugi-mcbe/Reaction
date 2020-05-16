<?php
namespace xtakumatutix\reaction\Reaction;

use pocketmine\Player;
use xtakumatutix\reaction\Reaction\Good;

class ActionForm
{
    public function particle(Player $player): void
    {
        $player->sendMessage("ああああああ");
    }
}