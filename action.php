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
             $controller->register_hook('TOOLBAR_DEFINE', 'AFTER', $this, 'bullet_button', array ());
 		}
             
function insert_button(Doku_Event $event, $param) {
    $event->data[] = array (
        'type' => 'format',
        'title' => $this->getLang('abutton'),
        'icon' => '../../plugins/bulletodo/button.png',
        'list': {
        '#d ':           '⏺',
        '#c':       '○',
        '#l': '⇦',
        '#r':   '⇨',
        '#t':   '△',
        '#bt':   '▲',
        '#lt':   '⏴',
        '#rt':   '⏵'
    }
        'block' => false,
}
}
