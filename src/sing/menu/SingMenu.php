<?php

namespace sing\menu;

use muqsit\invmenu\InvMenu;
use muqsit\invmenu\type\InvMenuTypeIds;

use pocketmine\item\PotionType;
use pocketmine\item\VanillaItems;
use pocketmine\player\Player;
use pocketmine\utils\TextFormat as C;

class SingMenu
{

    public static function menuRepot(Player $player) : void
    {
        $menu = InvMenu::create(InvMenuTypeIds::TYPE_DOUBLE_CHEST);
        $menu->setName(C::colorize("&r&cREPot Menu"));

        $pearl = VanillaItems::ENDER_PEARL()->setCount(16);
        $fire = VanillaItems::POTION()->setType(PotionType::LONG_FIRE_RESISTANCE());
        $speed = VanillaItems::SPLASH_POTION()->setType(PotionType::LONG_SWIFTNESS());
        $splash = VanillaItems::SPLASH_POTION()->setType(PotionType::STRONG_HEALING());
        $rogue = VanillaItems::GOLDEN_SWORD();

        $menu->getInventory()->setContents([
            0 => $pearl,
            1 => $pearl,
            2 => $pearl,
            3 => $fire,
            4 => $fire,
            5 => $fire,
            6 => $speed,
            7 => $speed,
            8 => $speed,
            9 => $splash,
            10 => $splash,
            11 => $splash,
            12 => $splash,
            13 => $splash,
            14 => $splash,
            15 => $splash,
            16 => $splash,
            17 => $splash,
            18 => $splash,
            19 => $splash,
            20 => $splash,
            21 => $splash,
            22 => $splash,
            23 => $splash,
            24 => $splash,
            25 => $splash,
            26 => $splash,
            27 => $splash,
            28 => $splash,
            29 => $splash,
            30 => $splash,
            31 => $splash,
            32 => $splash,
            33 => $splash,
            34 => $splash,
            35 => $splash,
            36 => $splash,
            37 => $splash,
            38 => $splash,
            39 => $splash,
            40 => $splash,
            41 => $splash,
            42 => $splash,
            43 => $splash,
            44 => $splash,
            45 => $rogue,
            46 => $rogue,
            47 => $rogue,
            48 => $rogue,
            49 => $rogue,
            50 => $rogue,
            51 => $rogue,
            52 => $rogue,
            53 => $rogue
        ]);
        $menu->send($player);
    }

}
