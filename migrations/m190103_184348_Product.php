<?php

use yii\db\Migration;

/**
 * Class m190103_184348_Product
 */
class m190103_184348_Product extends Migration
{

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $TABLE_NAME = 'product';
        $this->createTable($TABLE_NAME, [
            'product_id' => $this->primaryKey(),
            'product_name' => $this->string(50)->notNull(),
            //ENUM icin string cözümü
            'type' => "ENUM('Yuvarlak', 'Kare') NOT NULL DEFAULT 'Yuvarlak'",
            'price' => $this->integer()->notNull(),
            'stock' => $this->integer()->notNull(),
            'image_url' => $this->string(500)->notNull(),
        ], $tableOptions);

        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $TABLE_NAME = 'orders';
        $this->createTable($TABLE_NAME, [
            'order_id' => $this->primaryKey(),
            'user_id' => $this->integer(11),
            'product_id' => $this->integer(11)->notNull(),
            'order_date' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
            //ENUM icin string cözümü
            'status' => "ENUM('Yolda', 'Iptal', 'Gonderildi') NOT NULL DEFAULT 'Yolda'",
            'track_number' => $this->string(20),
            'arrive_date' => $this->timestamp(),
            'address' => $this->string(500)->notNull(),
            'total_number' => $this->integer(11)->notNull(),
        ], $tableOptions);

        //index ve fk ler
        $this->createIndex(
            'idx-orders-user_id',
            'orders',
            'user_id'
        );

        $this->addForeignKey(
            'fk-orders-user_id',
            'orders',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-orders-product_id',
            'orders',
            'product_id'
        );

        $this->addForeignKey(
            'fk-orders-product_id',
            'orders',
            'product_id',
            'product',
            'product_id',
            'CASCADE'
        );
    }

    public function down()
    {
        $this->dropForeignKey(
            'fk-orders-user_id',
            'orders'
        );

        $this->dropIndex(
            'idx-orders-user_id',
            'orders'
        );

        $this->dropForeignKey(
            'fk-orders-product_id',
            'orders'
        );

        $this->dropIndex(
            'idx-orders-product_id',
            'orders'
        );

        $TABLE_NAME = 'product';
        $this->dropTable($TABLE_NAME);
        $TABLE_NAME = 'orders';
        $this->dropTable($TABLE_NAME);
    }
}
