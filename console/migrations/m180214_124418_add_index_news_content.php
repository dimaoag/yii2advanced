<?php

use yii\db\Migration;

/**
 * Class m180214_124418_add_index_news_content
 */
class m180214_124418_add_index_news_content extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->execute("ALTER TABLE `news` ADD FULLTEXT INDEX index_content (content)");
    }

    /**
     * @inheritdoc
     */
    public function down()
    {

        $this->dropIndex('index_content', 'news');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180214_124418_add_index_news_content cannot be reverted.\n";

        return false;
    }
    */
}
