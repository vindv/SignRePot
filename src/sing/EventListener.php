<?php

namespace sing;

use pocketmine\block\BaseSign;
use pocketmine\block\utils\SignText;
use pocketmine\event\block\SignChangeEvent;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\utils\TextFormat as C;
use sing\menu\SingMenu;
use sing\utils\Cooldown;

class EventListener implements Listener
{
    public function onSingChangeEvent(SignChangeEvent $event): void
    {
        $player = $event->getPlayer();
        $newText = $event->getNewText();
        if($player->hasPermission("repot.sing")){
            if($newText->getLine(0) === "[repot]") {
                $event->setNewText(new SignText([C::colorize("&r&l&7[&cRePot&7]")]));
            }
        }
    }

    public function onPlayerInteract(PlayerInteractEvent $event): void
    {
        $player = $event->getPlayer();
        $block = $event->getBlock();

        if ($block instanceof BaseSign) {
            $signText = $block->getText();
            if ($signText->getLine(0) === C::colorize("&r&l&7[&cRePot&7]")) {
                if(Cooldown::openMenuTime($player)){
                    SingMenu::menuRepot($player);
                }
                $event->cancel();
            }
        }
    }
}