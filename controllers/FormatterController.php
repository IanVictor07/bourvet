<?php

namespace app\controllers;

use Yii;
use Yii\web\Controller;

class FormatterController extends Controller
{
    public function actionIndex()
    {
        $appLang = Yii::$app->lang;
        $formatter = Yii::$app->formatter;
        echo "<p>{$formatter->asDate('2023-04-02','dd/MM/YYY')} </P>";
    }
}

?>