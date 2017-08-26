<?php

namespace bausch\nimo\controllers;

use Yii;
use yii\web\Controller;
use yii\helper\Url;

/**
 * Default controller for the `ticket` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the markdown readme and guid files.
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

}
