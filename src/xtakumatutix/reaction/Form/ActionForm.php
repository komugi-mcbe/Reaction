<?php
namespace xtakumatutix\reaction\Form;

use pocketmine\form\Form;
use pocketmine\Player;
use xtakumatutix\reaction\Reaction\Good;
use xtakumatutix\reaction\Reaction\Bad;

class ActionForm implements Form
{
    public function handleResponse(Player $player, $data): void
    {
        if ($data === null) {
            return;
        }

        switch ($data) {
            case 0:
            Good::particle($player);
            break;

            case 1:
            Bad::particle($player);
            break;
        }
    }

    public function jsonSerialize()
    {
        return [
            'type' => 'form',
            'title' => 'リアクション',
            'content' => 'ボタンを押してリアクションしましょう',
            'buttons' => [
                [
                    'text' => 'Good'
                ],
                [
                    'text' => 'Bad'
                ]
            ],
        ];
    }
}