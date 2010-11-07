<?php

/**
* @package    Hidden Tab
* @subpackage	ThirdParty
* @category   Modules
* @version		1.0
* @author     Wouter Vervloet <wouter@baseworks.nl>
* @copyright  Copyright (c) 2010, Baseworks
* @license    http://creativecommons.org/licenses/by-sa/3.0/
* 
* This work is licensed under the Creative Commons Attribution-Share Alike 3.0 Unported.
* To view a copy of this license, visit http://creativecommons.org/licenses/by-sa/3.0/
* or send a letter to Creative Commons, 171 Second Street, Suite 300,
* San Francisco, California, 94105, USA.
* 
*/

if ( ! defined('EXT')) { exit('Invalid file request'); }

class Hidden_tab_acc {

	var $name		= 'Hidden Tab';
	var $id			= 'hidden_tab';
	var $version		= '1.0';
	var $description	= 'Create a hidden tab on your publish layout';
	var $sections		= array();

	function set_sections() {
	  
		$EE =& get_instance();

		$EE->cp->add_to_head('<style type="text/css">#menu_hidden {display:none !important} .ui-sortable #menu_hidden {display:inline !important}</style>');
		$this->sections[] = '<script type="text/javascript" charset="utf-8">$("#accessoryTabs a.hidden_tab").parent().remove();</script>';

	}
}
// END CLASS