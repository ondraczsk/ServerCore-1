<?php

namespace ServerCore;

use pocketmine\plugin;
use pocketmine\entity;
use pocketmine\level;
use pocketmine\tile;
use pocketmine\Server;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\CommandExecutor;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\Player;
use pocketmine\utils\Config;
use pocketmine\level\Level;
use pocketmine\event\Listener;
use pocketmine\math\Vector3;


class ServerCore extends PluginBase implements Listener;

 public function onEnable(){
        $this->getLogger()->info ( TextFormat::GREEN . "ServerCore is enabled" );
        $this->getServer()->getPluginManager ()->registerEvents ( $this, $this );		
        }

