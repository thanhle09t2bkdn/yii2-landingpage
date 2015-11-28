<?php

use yii\db\Schema;
use yii\db\Migration;

class m151128_042945_create_option_tbl extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('option', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'value' => 'longtext NOT NULL',
        ], $tableOptions);

    }

    public function down()
    {
        $this->dropTable('option');
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
