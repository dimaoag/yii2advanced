<?php

use yii\db\Migration;

/**
 * Handles adding phone to table `news`.
 */
class m180131_212755_add_phone_column_to_news_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('news', 'phone', $this->string(64)->after('content'));
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
    }
}
