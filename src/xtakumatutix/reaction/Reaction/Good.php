<?php
namespace xtakumatutix\reaction\Reaction;

use pocketmine\Player;

class Good
{
    public static function particle(Player $player): void
    {
        $player->sendMessage("ああああああ");
    }
}