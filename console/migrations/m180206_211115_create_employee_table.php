<?php

use yii\db\Migration;

/**
 * Handles the creation of table `employee`.
 */
class m180206_211115_create_employee_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';

        $this->createTable('employee', [
            'id' => $this->primaryKey(),
            'firstName' => $this->string(255),
            'lastName' => $this->string(255),
            'middleName' => $this->string(255),
            'email' => $this->string(255),
            'birthday' => $this->date(),
            'dateWorkStart' => $this->date(),
            'city' => $this->integer(11),
            'position' => $this->string(255),
            'userId' => $this->string(10),

        ], $tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('employee');
    }
}
