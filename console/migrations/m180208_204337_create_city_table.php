<?php

use yii\db\Migration;

/**
 * Handles the creation of table `city`.
 */
class m180208_204337_create_city_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';

        $this->createTable('city', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255),
        ], $tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('city');
    }
}
