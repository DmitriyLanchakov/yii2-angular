<?php

namespace modules\lease\controllers\frontend;

use yii\web\Controller;

/**
 * Default controller for the `lease` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
