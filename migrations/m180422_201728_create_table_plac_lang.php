<?php

use yii\db\Migration;

/**
 * Class m180422_201728_create_table_plac_lang
 */
class m180422_201728_create_table_plac_lang extends Migration
{
        public function up() {
        $this->createTable('place_lang', [
            'id' => $this->primaryKey()->unsigned(),
            'place_id' => $this->integer()->unsigned()->notNull(),
            'locality' => $this->string(45)->notNull(),
            'country' => $this->string(45)->notNull(),
            'lang' => $this->string(2)->notNull(),
        ]);
        
        $this->createIndex('idx_place_lang_place_id_place', 'place_lang', 'place_id');
        $this->addForeignKey('fk_place_lang_place_id_place', 'place_lang', 'place_id', 'place', 'id', 'restrict', 'cascade');
    }
    public function down() {
        $this->dropForeignKey('fk_place_lang_place_id_place', 'place_lang');
        $this->dropIndex('idx_place_lang_place_id_place', 'place_lang');
        
        $this->dropTable('place_lang');       
    }
    /*
      // Use safeUp/safeDown to run migration code within a transaction
      public function safeUp()
      {
      }
      public function safeDown()
      {
      }
     */
}
