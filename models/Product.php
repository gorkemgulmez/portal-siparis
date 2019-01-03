<?php

namespace kouosl\siparis\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $product_id
 * @property string $product_name
 * @property string $type
 * @property int $price
 * @property int $stock
 * @property string $image_url
 *
 * @property Orders $orders
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_name', 'type', 'price', 'stock', 'image_url'], 'required'],
            [['type'], 'string'],
            [['price', 'stock'], 'integer'],
            [['product_name'], 'string', 'max' => 50],
            [['image_url'], 'string', 'max' => 500],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'product_id' => 'Product ID',
            'product_name' => 'Product Name',
            'type' => 'Type',
            'price' => 'Price',
            'stock' => 'Stock',
            'image_url' => 'Image Url',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasOne(Orders::className(), ['product_id' => 'product_id']);
    }
}
