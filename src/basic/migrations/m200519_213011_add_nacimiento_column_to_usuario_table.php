<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%usuario}}`.
 */
class m200519_213011_add_nacimiento_column_to_usuario_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%usuario}}', 'nacimiento', $this->date());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%usuario}}', 'nacimiento');
    }
}
