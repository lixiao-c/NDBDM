<?php
/**
 * Team: red hackers
 * Coding by cuilixiao 1511366, 20170708
 * This is the link info model of backend web.
 */
namespace backend\models;

use Yii;

/**
 * This is the model class for table "rh_info_link".
 *
 * @property string $link_name
 * @property string $link_url
 */
class RhInfoLink extends \backend\base\BaseActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rh_info_link';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['link_name', 'link_url'], 'required'],
            [['link_name'], 'string', 'max' => 20],
            [['link_url'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'link_name' => '链接名',
            'link_url' => '链接地址',
        ];
    }
}
