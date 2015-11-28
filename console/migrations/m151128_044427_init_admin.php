<?php

use yii\db\Schema;
use yii\db\Migration;
use common\models\User;

class m151128_044427_init_admin extends Migration
{
    public function up()
    {
        $model = new User();
        $model->setAttributes(array(
            'username' => 'admin',
            'email' => 'admin@admin.com'
        ));
        $model->setPassword("admin123");
        if(!$model->save()){
            var_dump($model->errors);
        }

    }

    public function down()
    {
        User::deleteAll(array('username' => 'admin'));
        
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
