<?php

use yii\db\Migration;

/**
 * Handles the creation of table `category`.
 */
class m180227_112724_create_category_table extends Migration
{
    /**
     * @inheritdoc
     */

    public $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';


    public function up()
    {
        $this->createTable('category', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
        ], $this->tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('category');
    }
}
