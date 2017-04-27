<?php
/**
 * @author Yuriy Basov <basowy@gmail.com>
 * @since 1.0.0
 */

namespace yii2x\user\actions;

use Yii;
use yii\base\Action;

class LoginAction extends Action
{
    public $view = '@vendor/yii2x/yii2-user/views/auth/login';
    
    public function run()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->controller->goHome();
        }

        $model = Yii::createObject([
            'class' => '\yii2x\user\models\UsernameLoginForm'
        ]);
        
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->controller->goBack();
        }
 
        $model->password = null;

        return $this->controller->render($this->view, [
            'model' => $model,
        ]); 
    }    
}

