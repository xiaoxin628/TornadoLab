<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tl_chinchilla_profile".
 *
 * @property int $cpid pk
 * @property int $user_id poster
 * @property int $breed color code
 * @property int $gender 0 maile 1 female
 * @property int $birthday birthday
 * @property int $weight
 * @property int $white 白色 0无 1有
 * @property int $black 黑色 0无 1浅 2中 3深 4纯
 * @property int $beige 0无 1 米色 2金色
 * @property int $velvet 丝绒 0 无 1有
 * @property int $violet 紫色 0 无 3紫灰 5带紫灰基因
 * @property int $sapphire 蓝色 0 无 1蓝灰 4带蓝灰基因
 * @property string $ip
 * @property string $contact contact
 * @property string $description
 * @property int $dateline post time
 * @property int $displayorder -1 done -2 expired 0 normal 1 2 3
 *
 * @property ChinchillaPhoto[] $chinchillaPhotos
 * @property User $user
 */
class ChinchillaProfile extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tl_chinchilla_profile';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'breed', 'gender', 'birthday', 'weight', 'white', 'black', 'beige', 'velvet', 'violet', 'sapphire', 'ip', 'contact', 'description', 'dateline', 'displayorder'], 'required'],
            [['user_id', 'breed', 'birthday', 'weight', 'dateline'], 'integer'],
            [['description'], 'string'],
            [['gender', 'white', 'black', 'beige', 'velvet', 'violet', 'sapphire'], 'string', 'max' => 1],
            [['ip'], 'string', 'max' => 15],
            [['contact'], 'string', 'max' => 60],
            [['displayorder'], 'string', 'max' => 2],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cpid' => 'Cpid',
            'user_id' => 'User ID',
            'breed' => 'Breed',
            'gender' => 'Gender',
            'birthday' => 'Birthday',
            'weight' => 'Weight',
            'white' => 'White',
            'black' => 'Black',
            'beige' => 'Beige',
            'velvet' => 'Velvet',
            'violet' => 'Violet',
            'sapphire' => 'Sapphire',
            'ip' => 'Ip',
            'contact' => 'Contact',
            'description' => 'Description',
            'dateline' => 'Dateline',
            'displayorder' => 'Displayorder',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChinchillaPhotos()
    {
        return $this->hasMany(ChinchillaPhoto::className(), ['profile_id' => 'cpid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
