<?php

use yii\db\Migration;

/**
 * Class m180421_185956_create_table_place
 */
class m180421_185956_create_table_place extends Migration
{
    /**
     * {@inheritdoc}
     */
 /* public function safeUp()
    {
        $this->createTable('place',[
                
                'id' => $this->primaryKey()->unsigned(),
                'place_id' => $this->string(45)->notNull(),
                'lat' => $this->string(45)->notNull(),
                'lng' => $this->string(45)->notNull(),
                'country_code' => $this->string(2)->notNull(),
                'is_country' => $this->boolean()->notNull()
                       
            ]);
        
            $this->insert('place', [
                
                'place_id' => 'DR',
                'lat' => '458745',
                'lng' => '458745',
                'country_code' => 'GR',
                'is_country' => 1
                
            ]);
    }*/

    /**
     * {@inheritdoc}
     */
    /*public function safeDown()
    {
        $this->delete('place');
        $this->dropTable('place');
    }*/

    
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
            $this->createTable('place',[
                
                'id' => $this->primaryKey()->unsigned(),
                'place_id' => $this->string(45)->notNull(),
                'lat' => $this->string(45)->notNull(),
                'lng' => $this->string(45)->notNull(),
                'country_code' => $this->string(2)->notNull(),
                'is_country' => $this->boolean()->notNull()
                       
            ]);
    }

    public function down()
    {
        $this->dropTable('place');
    }
    
}
