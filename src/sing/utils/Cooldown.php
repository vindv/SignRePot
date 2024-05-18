<?php

namespace sing\utils;

use pocketmine\player\Player;

class Cooldown
{

    private static array $cooldowns = [];
    private const COOLDOWN = 30;

    public static function openMenuTime(Player $player) : bool
    {
        $name = $player->getName();
        if(!isset(self::$cooldowns[$name])) {
            self::$cooldowns[$name] = time();
            return true;
        }
        $lastTime = self::$cooldowns[$name];
        $currentTime = time();
        $remainingTime = self::COOLDOWN - ($currentTime - $lastTime);
        if($remainingTime <= 0){
            self::$cooldowns[$name] = $currentTime;
            return true;
        }
        $player->sendMessage("§cDebes esperar $remainingTime segundos antes de abrir el menú nuevamente.");
        return false;
    }

}