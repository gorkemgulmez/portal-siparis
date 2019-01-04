<?php

namespace kouosl\siparis\models;

use Yii;

/**
 * This is the model class for table "orders".
 *
 * @property int $order_id
 * @property int $user_id
 * @property int $product_id
 * @property string $order_date
 * @property string $status
 * @property string $track_number
 * @property string $arrive_date
 * @property string $address
 * @property int $total_number
 *
 * @property User $user
 * @property Product $product
 */
class Orders extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'orders';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'product_id', 'total_number'], 'integer'],
            [['order_date', 'arrive_date'], 'safe'],
            [['status'], 'string'],
            [['track_number'], 'string', 'max' => 20],
            [['address'], 'string', 'max' => 500],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => Product::className(), 'targetAttribute' => ['product_id' => 'product_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'order_id' => 'Order ID',
            'user_id' => 'User ID',
            'product_id' => 'Product ID',
            'order_date' => 'Order Date',
            'status' => 'Status',
            'track_number' => 'Track Number',
            'arrive_date' => 'Arrive Date',
            'address' => 'Address',
            'total_number' => 'Total Number',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Product::className(), ['product_id' => 'product_id']);
    }
}
