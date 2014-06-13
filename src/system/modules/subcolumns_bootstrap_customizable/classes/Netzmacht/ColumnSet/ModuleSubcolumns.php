<?php

namespace Netzmacht;


use Netzmacht\ColumnSet;

class ModuleSubcolumns extends \FelixPfeiffer\Subcolumns
{

	/**
	 *
	 */
	protected function compile()
	{
		parent::compile();

		if($GLOBALS['TL_CONFIG']['subcolumns'] == 'bootstrap_customizable') {
			$container =  ColumnSet::prepareContainer($this->columnset_id);

			if($container) {
				$this->Template->intCols = count($container);
				$this->Template->arrSet  = $container;
			}
		}
	}

} 