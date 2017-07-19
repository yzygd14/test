<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/7/18
 * Time: 16:44
 */
namespace app\models;

use Yii;
use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
        ];
    }
}