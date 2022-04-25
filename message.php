<?php



namespace CustomJoinMessage\Blood;





use pocketmine\Server;

use pocketmine\player\Player;





use pocketmine\plugin\PluginBase;

use pocketmine\event\Listener;

use pocketmine\utils\Config;





use pocketmine\event\player\PlayerJoinEvent;





use pocketmine\command\Command;

use pocketmine\command\CommandSender;





class message extends PluginBase implements Listener {

    

    public function onEnable() : void {

    

        $this->getLogger()->info("======Custom Join Message By Bloodsucker Is Enable======");

     

        $this->getServer()->getPluginManager()->registerEvents($this, $this);



    }

  

    public function onJoin(PlayerJoinEvent $event) {

        $player = $event->getPlayer();

        $name = $player->getName();



        /* Things That You Can Use:-

        

        1. § sign to color your text

        2. $name for player name

        3. \n for a new line



        */



        $player->sendMessage("§e==============§6==============
§7Welcome, $name to §eDrago Skyblock

§7Amazing Skyblock Experience On Bedrock

§eVOTE:§7 Soon
§6DISCORD:§7 discord.gg/dragocraft
§e==============§6==============");

    }

}