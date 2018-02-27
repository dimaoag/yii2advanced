<?php

use yii\db\Migration;

/**
 * Handles the creation of table `tag`.
 */
class m180227_112745_create_tag_table extends Migration
{
    /**
     * @inheritdoc
     */

    public $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';


    public function up()
    {
        $this->createTable('tag', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
        ], $this->tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('tag');
    }
}
