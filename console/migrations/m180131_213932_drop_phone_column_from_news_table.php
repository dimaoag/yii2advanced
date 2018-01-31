<?php

use yii\db\Migration;

/**
 * Handles dropping phone from table `news`.
 */
class m180131_213932_drop_phone_column_from_news_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->dropColumn('news', 'phone');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
    }
}
