<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tl_chinchilla_photo".
 *
 * @property int $pid 自增id
 * @property string $ip
 * @property string $type
 * @property int $size
 * @property int $thumb
 * @property string $filepath
 * @property string $filename
 * @property int $views 浏览次数
 * @property int $dateline
 * @property int $chinchilla_id
 * @property int $hidden
 * @property int $profile_id
 *
 * @property ChinchillaProfile $profile
 */
class ChinchillaPhoto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tl_chinchilla_photo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ip', 'size', 'thumb', 'filepath', 'filename', 'views', 'dateline', 'chinchilla_id', 'profile_id'], 'required'],
            [['size', 'views', 'dateline', 'chinchilla_id', 'profile_id'], 'integer'],
            [['ip'], 'string', 'max' => 20],
            [['type'], 'string', 'max' => 40],
            [['thumb', 'hidden'], 'string', 'max' => 1],
            [['filepath'], 'string', 'max' => 255],
            [['filename'], 'string', 'max' => 30],
            [['profile_id'], 'exist', 'skipOnError' => true, 'targetClass' => ChinchillaProfile::className(), 'targetAttribute' => ['profile_id' => 'cpid']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pid' => 'Pid',
            'ip' => 'Ip',
            'type' => 'Type',
            'size' => 'Size',
            'thumb' => 'Thumb',
            'filepath' => 'Filepath',
            'filename' => 'Filename',
            'views' => 'Views',
            'dateline' => 'Dateline',
            'chinchilla_id' => 'Chinchilla ID',
            'hidden' => 'Hidden',
            'profile_id' => 'Profile ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfile()
    {
        return $this->hasOne(ChinchillaProfile::className(), ['cpid' => 'profile_id']);
    }
}
