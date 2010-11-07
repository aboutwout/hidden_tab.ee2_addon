<?php

class Hidden_tab_acc {

	var $name		= 'Hidden Tab';
	var $id			= 'hidden_tab';
	var $version		= '1.0';
	var $description	= 'Have a hidden tab on your publish layout';
	var $sections		= array();

	function set_sections() {
	  
		$EE =& get_instance();

		$EE->cp->add_to_head('<style type="text/css">#menu_hidden {display:none !important} .ui-sortable #menu_hidden {display:inline !important}</style>');
		$this->sections[] = '<script type="text/javascript" charset="utf-8">$("#accessoryTabs a.hidden_tab").parent().remove();</script>';

	}
}
// END CLASS