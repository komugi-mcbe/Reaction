<?php
namespace xtakumatutix\reaction\Reaction;

use pocketmine\Player;
use pocketmine\level\Level;
use pocketmine\math\Vector3;
use pocketmine\level\particle\FloatingTextParticle;
use pocketmine\plugin\Plugin;
use pocketmine\scheduler\ClosureTask;
use pocketmine\Server;


class Good
{
    public static function particle(Player $player): void
    {
        $x = $player->getX() + 1;
        $y = $player->getY() + 1.2;
        $z = $player->getZ();
        $level = $player->getLevel();
        $pos = new Vector3($x, $y, $z);
        $particle = new FloatingTextParticle($pos, "いいね！！", "§l§eGood!!");
        $level->addParticle($particle);

        $task = new ClosureTask(function (int $currentTick) use ($particle, $level): void {
            $particle->setInvisible(true);//パーティクルを見えなくする(これ以外に消す方法あるかも)
            $level->addParticle($particle);//見えなくしたのを反映させる
        });
        $plugin = Server::getInstance()->getPluginManager()->getPlugin("reaction");
        /** @var Plugin $plugin */
        $plugin->getScheduler()->scheduleDelayedTask($task, 20 * 5);//5秒後に実行
    }
}