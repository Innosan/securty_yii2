<?php

namespace app\models;
use yii\base\Exception;
use yii\base\Model;

class SignUpForm extends Model {
    public $fio;
    public $login;
    public $email;
    public $password;
    public $admin;

    public function rules()
    {
        return [
            ['login', 'trim'],
            ['login', 'required'],
            ['login', 'unique', 'targetClass' => '\app\models\User', 'message' => 'This username has already been taken.'],
            ['login', 'string', 'min' => 2, 'max' => 50],
            ['fio', 'string', 'min' => 2, 'max' => 50],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 50],
            ['admin', 'integer'],
            ['email', 'unique', 'targetClass' => '\app\models\User', 'message' => 'This email address has already been taken.'],
            ['password', 'required'],
            ['password', 'string', 'min' => 6],
        ];
    }

    /**
     * @throws Exception
     */
    public function signUp(): ?User
    {
        $user = new User();

        $user->login = $this->login;
        $user->fio = $this->fio;
        $user->email = $this->email;
        $user->admin = $this->admin;
        $user->password = $this->password;

        var_dump($user);

        return $user->save() ? $user : null;
    }
}
