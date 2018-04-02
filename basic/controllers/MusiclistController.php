<?php

namespace app\controllers;

class MusiclistController extends \yii\web\Controller
{
    public function actionSongs()
    {
        return $this->render('songs');
    }

}
