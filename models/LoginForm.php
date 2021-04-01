<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 *
 * @property-read User|null $user This property is read-only.
 *
 */
class LoginForm extends Model
{
    public $email;

    private $_user = false;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['email'], 'required'],
            [['email'], 'email'], //проверка на корректность вводимой почты
            [['email'], 'validateEmail'] //проверка на существование вводимоц почты
            // rememberMe must be a boolean value
            // ['rememberMe', 'boolean'],
        ];
    }


        
    /**
     * validateEmail
     *
     * @param  mixed $attribute
     * @return void
     */
    public function validateEmail($attribute)
    {
        if(!$this->hasErrors()) { //проверка на существующие ошибки
            if(!$this->GetUser()){ //если пользователь не найден, добавление ошибки
                $this->addError($attribute, 'Пользователь не найден');
            }
        }
    }
    
    /**
     * Logs in a user using the provided username and password.
     * @return bool whether the user is logged in successfully
     */
    public function login()
    {
        if ($this->validate()) {
            return Yii::$app->user->login($this->getUser());
        }
        return false;
    }

    /**
     * Finds user by [[username]]
     *
     * @return User|null
     */
    public function getUser()
    {
        if ($this->_user === false) {
            $this->_user = User::findByUsername($this->email);
        }
        
        return $this->_user;
    }
}
