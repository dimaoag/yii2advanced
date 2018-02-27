<?php

use yii\db\Migration;

/**
 * Handles the creation of table `article_tag`.
 */
class m180227_112853_create_article_tag_table extends Migration
{
    /**
     * @inheritdoc
     */

    public $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';


    public function up()
    {
        $this->createTable('article_tag', [
            'id' => $this->primaryKey(),
            'article_id' => $this->integer(),
            'tag_id' => $this->integer(),
        ], $this->tableOptions);




        // create index for column `article_id`;

        $this->createIndex(
            'tag_article_article_id',
            'article_tag',
            'article_id'
        );


        // create foreign key for table `article`;

        $this->addForeignKey(
            'tag_article_article_id',
            'article_tag',
            'article_id',
            'article',
            'id',
            'CASCADE'
        );


        // create index for column `tag_id`;

        $this->createIndex(
            'idx_tag_id',
            'article_tag',
            'tag_id'
        );

        // create foreign key for table `tag`;

        $this->addForeignKey(
            'fk-tag_id',
            'article_tag',
            'tag_id',
            'tag',
            'id',
            'CASCADE'
        );


    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('article_tag');
    }
}
