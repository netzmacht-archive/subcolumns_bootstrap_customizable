<?php

namespace Netzmacht\ColumnSet;

class Hooks
{
	protected $name   = 'bootstrap_customizable';

	/**
	 * @param \Model $model
	 * @param $isVisible
	 * @return mixed
	 */
	public function isVisibleElement(\Model $model, $isVisible)
	{
		if($GLOBALS['TL_CONFIG']['subcolumns'] == $this->name &&
			(($model->getTable() == 'tl_module' && $model->type == 'subcolumns') ||
				$model->getTable() == 'tl_content' && ($model->type == 'colsetStart' || $model->type == 'colsetPart' ))
		) {
			if($model->type == 'colsetPart') {
				$modelClass = get_class($model);
				$parent     = $modelClass::findByPk($model->sc_parent);

				$GLOBALS['TL_SUBCL']['bootstrap_customizable']['sets'][$parent->sc_type] = ColumnSet::prepareContainer($parent->columnset_id);
			}
			else {
				$GLOBALS['TL_SUBCL']['bootstrap_customizable']['sets'][$model->sc_type] = ColumnSet::prepareContainer($model->columnset_id);
			}
		}

		return $isVisible;
	}
} 