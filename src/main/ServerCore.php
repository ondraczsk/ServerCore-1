<?php

/** ____________________________________  __________________________   ___________________________________ 
 * ❘   _____  _____   ___   _____         ❘    _____     ____         ❘  _____   ____     ¦     ¦¦      ¦¦   ❘
 * ❘  ¦          /   ¦     ¦      ¦    ¦  ❘   ¦  _  ╲   ¦      ¦   ¦  ❘    ¦    ¦        ¦ ¦    ¦ ¦   ¦  ¦   ❘            
 * ❘  ¦         /    ¦___  ¦      ¦____¦  ❘   ¦ ¦_¦  ¦  ¦____   ¦ ¦   ❘    ¦    ¦____   ¦___¦   ¦  ¦ ¦   ¦   ❘  
 * ❘  ¦_____  _____  ¦___  ¦_____ ¦    ¦  ❘   ¦_____╱   ¦____    ¦    ❘    ¦    ¦____  ¦     ¦  ¦   ¦    ¦   ❘
    ____________________________________   __________________________  ___________________________________ ❘ 
 *@author: PikyCZ
 */

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
use pocketmine\permission\Permission;




class ServerCore extends PluginBase implements Listener;

 public function onEnable(){
        $this->getLogger()->info ( TextFormat::GREEN . "ServerCore is enabled" );
        $this->getServer()->getPluginManager ()->registerEvents ( $this, $this );		
        }



/**
*    public function getPermission($name)
*    if(isset($this->permissions[$name])){
*    return $this->permissions[$name];
*    }
*  return null;
*}
*/
