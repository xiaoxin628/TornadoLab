<?php

namespace api\modules\v1\controllers\chinchillaMatch;

use yii\rest\ActiveController;

/**
 * Default controller for the `v1` module
 */
class ProfileController extends ActiveController
{
	public $modelClass = 'common\models\ChinchillaProfile';
        
        
        public function actions() {
            $actions = parent::actions();
            return $actions;
        }
}
