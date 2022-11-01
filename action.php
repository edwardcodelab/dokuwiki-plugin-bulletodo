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
        'type' => 'picker',
        'title' => 'Bullettodo',
        'icon' => '../../plugins/bulletodo/button.png',
        'list'=> array(
        array(
            'type'=>'insert',
            'insert'=>'#d',
            'title' =>'⏺',
            ),
          array(
            'type'=>'insert',
            'insert'=>'#c',
            'title' =>'○',
            ),          
          array(
            'type'=>'insert',
            'insert'=>'#l',
            'title' =>'⇦',
            ),                 
          array(
            'type'=>'insert',
            'insert'=>'#r',
            'title' =>'⇨',
            ),             
          array(
            'type'=>'insert',
            'insert'=>'#t',
            'title' =>'△',
            ),             
          array(
            'type'=>'insert',
            'insert'=>'#bt',
            'title' =>'▲',
            ),  
          array(
            'type'=>'insert',
            'insert'=>'#lt',
            'title' =>'⏴',
            ),  
          array(
            'type'=>'insert',
            'insert'=>'#rt',
            'title' =>'⏵',
            ) 
        ));
}
}
