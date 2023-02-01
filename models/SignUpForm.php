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
            ['login', 'unique', 'targetClass' => '\app\models\User', 'message' => 'This username has already been taken.'],
            ['login', 'string', 'min' => 2, 'max' => 50],
            ['fio', 'string', 'min' => 2, 'max' => 50],
            ['fio', 'match', 'pattern' => '/^[а-яА-Яa-zA-Z\s]+$/', 'message' => 'Name can only contain word characters'],
            ['email', 'email'],
            ['email', 'string', 'max' => 50],
            ['admin', 'boolean'],
            ['email', 'unique', 'targetClass' => '\app\models\User', 'message' => 'This email address has already been taken.'],
            ['password', 'string', 'min' => 6],
            [['login', 'fio', 'email', 'password'], 'required', 'message' => 'Поле не может быть пустым'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'login' => 'Логин',
            'fio' => 'Полное имя',
            'email' => 'Почта',
            'password' => 'Пароль',
            'admin' => 'Админ',
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
        $user->setPassword($this->password);

        var_dump($user);

        return $user->save() ? $user : null;
    }
}
