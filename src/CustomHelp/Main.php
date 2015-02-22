<?php
namespace xFlare\CustomHelp;

use pocketmine\event\player\PlayerCommandPreprocessEvent;
use pocketmine\utils\TextFormat;
use pocketmine\utils\Config;
use pocketmine\Server;

class Main extends PluginBase implements Listener{
    public function onEnable(){
        $this->saveDefaultConfig();
    }

    public function onPlayerCommand(PlayerCommandPreprocessEvent $event){
        $player= $event->getPlayer();
        $owner = $player->getName();
        $message = $event->getMessage();
        $command = substr($message, 1);
        $args = explode(" ", $command);
        $name = $event->getPlayer()->getName();
        $name = strtolower($name);
        if($args[0] === "help"){
            //messages
            $event->setCancelled(true);
            return true;
        }
?>
