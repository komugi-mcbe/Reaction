<?php
namespace xtakumatutix\reaction\Reaction;

use pocketmine\Player;

class Good
{
    public function particle(Player $player): void
    {
        $player->sendMessage("ああああああ");
    }
}