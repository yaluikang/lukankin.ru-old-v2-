<?php
    namespace app\controllers;
    use yii\web\Controller;

    class SiteController extends Controller
    {
        public function actionIndex ()
        {
            echo 'Test';
            return $this->render('index');
        }
        public function actionFilms ()
        {
            echo '123';
            return $this->render('index');
        }
        public function actionTvseries ()
        {
            echo '123';
            return $this->render('index');
        }
        public function actionNewItems ()
        {
            echo 'TEST123';
            return $this->render('index');
        }
    }