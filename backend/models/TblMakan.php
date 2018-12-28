<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_makan".
 *
 * @property string $deks
 * @property int $id
 * @property string $nama
 * @property int $harga
 * @property string $gambar
 */
class TblMakan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_makan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['deks', 'nama', 'harga', 'gambar'], 'required'],
            [['harga'], 'integer'],
            [['deks'], 'string', 'max' => 1000],
            [['nama'], 'string', 'max' => 20],
            [['gambar'], 'file', 'extensions'=>'jpg, jpeg, png'],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'deks' => 'Deks',
            'id' => 'ID',
            'nama' => 'Nama',
            'harga' => 'Harga',
            'gambar' => 'Gambar',
        ];
    }
}
