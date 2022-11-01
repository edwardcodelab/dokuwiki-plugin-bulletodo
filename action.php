<?php
/**
 * DokuWiki Plugin bulletodo (Action Component)
 *
 * @license GPL 2 http://www.gnu.org/licenses/gpl-2.0.html
 * @author  dodotori <dodotori@localhost>
  
   
 */

class action_plugin_bulletodo extends \dokuwiki\Extension\ActionPlugin
{
    function register(Doku_Event_Handler $controller) {
             $controller->register_hook('TPL_ACT_RENDER', 'AFTER', $this, 'bulletlist');
 		}
             
public function bulletlist(Doku_Event $event,$param) {
      if($event->data != 'bulletodo') return; 
    $event->preventDefault(); 
        $beforesymbol = $this->getConf('before_symbol');
        $aftersymbol = $this->getConf('after_symbol');
    echo '<p>'.$beforesymbol.$aftersymbol.'</p>';
    echo'<script>
    var STbullet = ["'.$beforesymbol.'"];
var SBbullet = ["'.$aftersymbol.'"];
    </script>';
}
}
