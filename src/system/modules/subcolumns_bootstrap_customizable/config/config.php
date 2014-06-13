<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (C) 2005-2012 Leo Feyer
 *
 * @package   netzmacht-columnset
 * @author    David Molineus <http://www.netzmacht.de>
 * @license   GNU/LGPL
 * @copyright Copyright 2012 David Molineus netzmacht creative
 *
 **/

$GLOBALS['TL_MODELS']['tl_columnset'] = 'Netzmacht\ColumnSet\ColumnsetModel';

$GLOBALS['TL_HOOKS']['isVisibleElement'][] = array('Netzmacht\ColumnSet\Hooks', 'isVisibleElement');

/**
 * backend modules
 */
$GLOBALS['BE_MOD']['design']['columnset'] = array(
	'icon' => 'system/modules/subcolumns_bootstrap_customizable/assets/icon.png',
	'tables' => array('tl_columnset'),
);


/**
 * replace content elements
 */
// using isVisibleElement since Contao 3.2
if(version_compare(VERSION, '3.2', '<')) {
	$GLOBALS['TL_CTE']['subcolumn']['colsetStart']  = 'Netzmacht\ColumnSet\colsetStart';
	$GLOBALS['TL_CTE']['subcolumn']['colsetPart']   = 'Netzmacht\ColumnSet\colsetPart';
	$GLOBALS['FE_MOD']['application']['subcolumns'] = 'Netzmacht\ColumnSet\ModuleSubcolumns';
}

/**
 * columset
 */

$GLOBALS['TL_SUBCL']['bootstrap_customizable'] = array
(
	'label'		=> 'Bootstrap 3 (customizable)', // Label for the selectmenu
	'scclass' 	=> 'row', // Class for the wrapping container
	'inside' 	=> false, // Are inside containers used?
	'gap' 		=> false, // A gap between the columns can be entered in backend
	'sets'		=> array( // provide default column sets as fallback if an database entry is deleted
		'1' => array(
			array('col-lg-12'),
		),
		'2' => array(
			array('col-lg-6'),
			array('col-lg-6'),
		),
		'3' => array(
			array('col-lg-4'),
			array('col-lg-4'),
			array('col-lg-4'),
		),
		'4' => array(
			array('col-lg-3'),
			array('col-lg-3'),
			array('col-lg-3'),
			array('col-lg-3'),
		),
		'5' => array(
			array('col-lg-3'),
			array('col-lg-3'),
			array('col-lg-2'),
			array('col-lg-2'),
			array('col-lg-2'),
		),
		'6' => array(
			array('col-lg-2'),
			array('col-lg-2'),
			array('col-lg-2'),
			array('col-lg-2'),
			array('col-lg-2'),
			array('col-lg-2'),
		),
		'7' => array(
			array('col-lg-2'),
			array('col-lg-2'),
			array('col-lg-2'),
			array('col-lg-2'),
			array('col-lg-2'),
			array('col-lg-1'),
			array('col-lg-1'),
		),
		'8' => array(
			array('col-lg-2'),
			array('col-lg-2'),
			array('col-lg-2'),
			array('col-lg-2'),
			array('col-lg-1'),
			array('col-lg-1'),
			array('col-lg-1'),
			array('col-lg-1'),
		),
		'9' => array(
			array('col-lg-2'),
			array('col-lg-2'),
			array('col-lg-2'),
			array('col-lg-1'),
			array('col-lg-1'),
			array('col-lg-1'),
			array('col-lg-1'),
			array('col-lg-1'),
			array('col-lg-1'),
		),
		'10' => array(
			array('col-lg-2'),
			array('col-lg-2'),
			array('col-lg-1'),
			array('col-lg-1'),
			array('col-lg-1'),
			array('col-lg-1'),
			array('col-lg-1'),
			array('col-lg-1'),
			array('col-lg-1'),
			array('col-lg-1'),
		),
		'11' => array(
			array('col-lg-2'),
			array('col-lg-1'),
			array('col-lg-1'),
			array('col-lg-1'),
			array('col-lg-1'),
			array('col-lg-1'),
			array('col-lg-1'),
			array('col-lg-1'),
			array('col-lg-1'),
			array('col-lg-1'),
			array('col-lg-1'),
		),
		'12' => array(
			array('col-lg-1'),
			array('col-lg-1'),
			array('col-lg-1'),
			array('col-lg-1'),
			array('col-lg-1'),
			array('col-lg-1'),
			array('col-lg-1'),
			array('col-lg-1'),
			array('col-lg-1'),
			array('col-lg-1'),
			array('col-lg-1'),
			array('col-lg-1'),
		),
	),
);