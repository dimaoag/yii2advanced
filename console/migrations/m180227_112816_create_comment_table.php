<?php

use yii\db\Migration;

/**
 * Handles the creation of table `comment`.
 */
class m180227_112816_create_comment_table extends Migration
{
    /**
     * @inheritdoc
     */
    public $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';


    public function up()
    {
        $this->createTable('comment', [
            'id' => $this->primaryKey(),
            'text' => $this->text(),
            'user_id' => $this->integer(),
            'article_id' => $this->integer(),
            'status' => $this->integer(),
        ], $this->tableOptions);


        // create index for column `user_id`;

        $this->createIndex(
            'idx-post-user_id',
            'comment',
            'user_id'
        );


        // create foreign key for table `user`;

        $this->addForeignKey(
            'fk-post-user_id',
            'comment',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );


        // create index for column `article_id`;

        $this->createIndex(
            'idx-post-article_id',
            'comment',
            'article_id'
        );

        // create foreign key for table `article`;

        $this->addForeignKey(
            'fk-article_id',
            'comment',
            'article_id',
            'article',
            'id',
            'CASCADE'
        );

    }



    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('comment');
    }
}
