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
             $controller->register_hook('TPL_ACT_RENDER', 'AFTER', $this, 'bulletshow');
 		}
 function bulletshow($event, $param) {
   echo"";
    }
  
}
