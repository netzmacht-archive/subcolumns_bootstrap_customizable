<?php

namespace Netzmacht\ColumnSet;

class upgrade
{
	public function run()
	{
		// fix typo
		if($GLOBALS['CONFIG']['subcolumns'] == 'bootstrap_customizable') {
			$config = \Config::getInstance();
			$config->update('$GLOBALS[\'TL_CONFIG\'][\'subcolumns\']', 'bootstrap_customizable');
			$config->save();
		}
	}
}

$upgrade = new upgrade();
$upgrade->run();